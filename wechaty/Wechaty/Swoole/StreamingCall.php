<?php
/*
  +----------------------------------------------------------------------+
  | Swoole-gRPC                                                   |
  +----------------------------------------------------------------------+
  | This source file is subject to version 2.0 of the Apache license,    |
  | that is bundled with this package in the file LICENSE, and is        |
  | available through the world-wide-web at the following url:           |
  | http://www.apache.org/licenses/LICENSE-2.0.html                      |
  | If you did not receive a copy of the Apache2.0 license and are unable|
  | to obtain it through the world-wide-web, please send a note to       |
  | license@swoole.com so we can mail you a copy immediately.            |
  +----------------------------------------------------------------------+
  | Author: Twosee <twose@qq.com>                                        |
  +----------------------------------------------------------------------+
*/

namespace Wechaty\Puppet\Swoole;

class StreamingCall extends BaseCall
{
    public function send($message = null): bool
    {
        if (!$this->streamId) {
            $this->streamId = $this->client->openStream(
                $this->method,
                Parser::serializeMessage($message),
                '',
                true
            );
            return $this->streamId > 0;
        } else {
            return false;
        }
    }

    public function push($message): bool
    {
        if (!$this->streamId) {
            $this->streamId = $this->client->openStream($this->method, null, '', true);
        }
        return $this->client->write($this->streamId, Parser::serializeMessage($message), false);
    }

    public function recv(float $timeout = -1)
    {
        if ($this->streamId <= 0) {
            $response = false;
        } else {
            $response = $this->client->recv($this->streamId, $timeout);
            if (!$this->client->isStreamExist($this->streamId)) {
                // stream lost, we need re-push
                $this->streamId = 0;
            }
        }
        return Parser::parseToResultArray($response, $this->deserialize);
    }

    public function end(): bool
    {
        if (!$this->streamId) {
            return false;
        }
        $ret = $this->client->write($this->streamId, null, true);
        if ($ret) {
            $this->streamId = 0;
        }
        return $ret;
    }

}
