<?php
/**
 * Author: Twosee <twose@qq.com>
 * Date: 2020/5/29 5:21 下午
 */

namespace Wechaty\Swoole;

class Request extends \Swoole\Http2\Request
{
    public $headers = ['content-type' => 'application/grpc'];
}
