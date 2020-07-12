<?php
/**
 * Created by PhpStorm.
 * User: peterzhang
 * Date: 2020/7/12
 * Time: 5:13 PM
 */

require dirname(__FILE__) . '/vendor/autoload.php';

use Swoole\Coroutine;
use Wechaty\Swoole\Parser;
use Wechaty\Swoole\Request;

define('GRPC_DEFAULT_TIMEOUT', 1);
define('GRPC_ERROR_NO_RESPONSE', 'no data');

Coroutine::create(function () {
    /*$client = new \Wechaty\PuppetClientStream("localhost:8788", [
        'credentials' => Grpc\ChannelCredentials::createInsecure()
    ]);
    $request = new \Wechaty\Puppet\DingRequest();

    $request->setData("hello1");
    $client->DingSimple($request);
    $call = $client->Ding();//Grpc\BidiStreamingCall
    $request->setData("hello2");
    $call->write($request);
    $call->writesDone();

    $ret = $call->read();//Wechaty\Puppet\DingResponse
    print_r($ret->serializeToString());*/
});

// The Watcher
// E0712 17:26:09.958493298    6736 http_server_filter.cc:300]  GET request without QUERY
Coroutine::create(function () {
    $watchClient = new \Wechaty\PuppetClientSwoole("localhost:8788");

    $watchCall = $watchClient->Ding();
    $request = new \Wechaty\Puppet\DingRequest();
    $request->setData("hello");

    [$reply, $status] = $watchClient->DingSimple($request);
    print_r($reply);
    print_r($status);

    $swooleRequest = new Request;
    $swooleRequest->method = 'POST';
    $swooleRequest->path = "/wechaty.Puppet/Ding";
    $swooleRequest->data = Parser::serializeMessage($request);
    $request->setData("hello3");
    //$watchCall->send($request);
    _retry:
    $watchCall->push($request);
    /**@var $reply \Wechaty\Puppet\DingResponse */
    while (true) {
        echo "1";
        [$reply, $status] = $watchCall->recv();
        echo "t";
        print_r($reply);
        print_r($status);
        if ($status === 0) { // success
            if ($reply->getCreated() || $reply->getCanceled()) {
                continue;
            }
            foreach ($reply->getEvents() as $event) {
                /**@var $event Mvccpb\Event */
                $type = $event->getType();
                $kv = $event->getKv();
                if (FilterType::NOPUT === $type) {
                    echo "Put key {$kv->getKey()} => {$kv->getValue()}\n";
                    break;
                } elseif (FilterType::NODELETE === $type) {
                    echo "Delete key {$kv->getKey()}\n";
                    break;
                }
            }
        } else { // failed
            static $retry_time = 0;
            if ($watchClient->isConnected()) {
                $retry_time++;
                echo "Retry#{$retry_time}\n";
                goto _retry;
            } else {
                echo "Error#{$status}: {$reply}\n";
                break;
            }
        }
    }
    $watchClient->close();
});