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
    $client = new \Wechaty\PuppetClientStream("localhost:8788", [
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
    print_r($ret->serializeToString());

    $request = new \Wechaty\Puppet\StartRequest();
    $call = $client->Start();
    $call->write($request);
    $call->writesDone();

    $ret = $call->read();//Wechaty\Puppet\StartResponse
    print_r($ret->serializeToString());
    /*
     * 03:12:22 VERB EventStreamManager start(stream)
03:12:22 VERB EventStreamManager connectPuppetEventToStreamingCall() for Puppet#0<PuppetPuppeteer>(67ac832ecc2d5fcda97c7e63595060cb)
03:12:22 VERB EventStreamManager connectPuppetEventToStreamingCall() this.puppet.on(friendship) (listenerCount:1) registering...
03:12:22 VERB EventStreamManager connectPuppetEventToStreamingCall() this.puppet.on(login) (listenerCount:3) registering...
03:12:22 VERB EventStreamManager connectPuppetEventToStreamingCall() this.puppet.on(logout) (listenerCount:2) registering...
03:12:22 VERB EventStreamManager connectPuppetEventToStreamingCall() this.puppet.on(message) (listenerCount:1) registering...
03:12:22 VERB EventStreamManager connectPuppetEventToStreamingCall() this.puppet.on(room-invite) (listenerCount:1) registering...
03:12:22 VERB EventStreamManager connectPuppetEventToStreamingCall() this.puppet.on(room-join) (listenerCount:1) registering...
03:12:22 VERB EventStreamManager connectPuppetEventToStreamingCall() this.puppet.on(room-leave) (listenerCount:1) registering...
03:12:22 VERB EventStreamManager connectPuppetEventToStreamingCall() this.puppet.on(room-topic) (listenerCount:1) registering...
03:12:22 VERB EventStreamManager connectPuppetEventToStreamingCall() this.puppet.on(scan) (listenerCount:3) registering...
03:12:22 VERB EventStreamManager connectPuppetEventToStreamingCall() this.puppet.on(dong) (listenerCount:1) registering...
03:12:22 VERB EventStreamManager connectPuppetEventToStreamingCall() this.puppet.on(error) (listenerCount:1) registering...
03:12:22 VERB EventStreamManager connectPuppetEventToStreamingCall() this.puppet.on(heartbeat) (listenerCount:4) registering...
03:12:22 VERB EventStreamManager connectPuppetEventToStreamingCall() this.puppet.on(ready) (listenerCount:1) registering...
03:12:22 VERB EventStreamManager connectPuppetEventToStreamingCall() this.puppet.on(reset) (listenerCount:1) registering...
03:12:22 VERB EventStreamManager onStreamingCallEnd(callback)
03:12:22 VERB EventStreamManager grpcEmit(EVENT_TYPE_SCAN[22], {"qrcode":"https://login.weixin.qq.com/l/IaysbZa04Q==","status":5})
03:12:22 VERB EventStreamManager this.onStreamingCallEnd() this.eventStream.on(error) fired: Error: The async function encountered an error
03:12:22 VERB EventStreamManager connectPuppetEventToStreamingCall() unconnect() 13 callbacks*/

    $request = new \Wechaty\Puppet\EventRequest();
    $call = $client->Event($request);
    $ret = $call->responses();//Generator Object
    while($ret->valid()) {
        print_r($ret->key());//0 1 2
        $response = $ret->current();
        print_r($response);//Wechaty\Puppet\EventResponse Object
        print_r($response->getType());
        print_r($response->getPayload());
        $ret->send("test");
        $ret->next();
    }
    print_r($ret->getReturn());
});

$name = !empty($argv[1]) ? $argv[1] : 'Swoole';

/*Swoole\Coroutine::create(function () use ($name) {
    $greeterClient = new \Wechaty\Helloworld\GreeterClient('127.0.0.1:50051', [
        'credentials' => Grpc\ChannelCredentials::createInsecure()
    ]);
    $request = new Wechaty\Helloworld\HelloRequest();
    $request->setName($name);
    [$reply, $status] = $greeterClient->SayHello($request)->wait();
    $message = $reply->getMessage();
    echo "{$message}\n";
    $greeterClient->close();
});

Swoole\Coroutine::create(function () use ($name) {
    $greeterClient = new \Wechaty\Helloworld\GreeterClientSwoole('127.0.0.1:50051');
    $request = new Wechaty\Helloworld\HelloRequest();
    $request->setName($name);
    [$reply] = $greeterClient->SayHello($request);
    $message = $reply->getMessage();
    echo "{$message}\n";
    $greeterClient->close();
});*/

// The Watcher
// E0712 17:26:09.958493298    6736 http_server_filter.cc:300]  GET request without QUERY
Coroutine::create(function () {
    $watchClient = new \Wechaty\PuppetClientSwoole("172.17.205.29:8788");

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