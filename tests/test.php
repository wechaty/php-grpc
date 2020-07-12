<?php
/**
 * Created by PhpStorm.
 * User: peterzhang
 * Date: 2020/7/12
 * Time: 5:13 PM
 */

require dirname(__FILE__) . '/vendor/autoload.php';

use Swoole\Coroutine;

// The Watcher
Coroutine::create(function () {
    $watchClient = new \Wechaty\PuppetClientSwoole("localhost:8788");

    $watchCall = $watchClient->Ding();
    $request = new \Wechaty\Puppet\DingRequest();
    $request->setData("hello");

    _retry:
    $watchCall->push($request);
    /**@var $reply Etcdserverpb\WatchResponse */
    while (true) {
        [$reply, $status] = $watchCall->recv();
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