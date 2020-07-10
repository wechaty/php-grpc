<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: event.proto

namespace Wechaty\Puppet;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>wechaty.puppet.EventResponse</code>
 */
class EventResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.wechaty.puppet.EventType type = 1;</code>
     */
    protected $type = 0;
    /**
     * TODO: Huan(202002) consider to use a PB Map?
     *
     * Generated from protobuf field <code>string payload = 2;</code>
     */
    protected $payload = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *     @type string $payload
     *           TODO: Huan(202002) consider to use a PB Map?
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Event::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.wechaty.puppet.EventType type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.wechaty.puppet.EventType type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Wechaty\Puppet\EventType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * TODO: Huan(202002) consider to use a PB Map?
     *
     * Generated from protobuf field <code>string payload = 2;</code>
     * @return string
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * TODO: Huan(202002) consider to use a PB Map?
     *
     * Generated from protobuf field <code>string payload = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPayload($var)
    {
        GPBUtil::checkString($var, True);
        $this->payload = $var;

        return $this;
    }

}

