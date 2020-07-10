<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: room.proto

namespace Wechaty\Puppet;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>wechaty.puppet.RoomCreateRequest</code>
 */
class RoomCreateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string contact_ids = 1;</code>
     */
    private $contact_ids;
    /**
     * Generated from protobuf field <code>string topic = 2;</code>
     */
    protected $topic = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $contact_ids
     *     @type string $topic
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Room::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string contact_ids = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getContactIds()
    {
        return $this->contact_ids;
    }

    /**
     * Generated from protobuf field <code>repeated string contact_ids = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setContactIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->contact_ids = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string topic = 2;</code>
     * @return string
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * Generated from protobuf field <code>string topic = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTopic($var)
    {
        GPBUtil::checkString($var, True);
        $this->topic = $var;

        return $this;
    }

}
