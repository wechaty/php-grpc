<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: room.proto

namespace Wechaty\Puppet;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>wechaty.puppet.RoomListResponse</code>
 */
class RoomListResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string ids = 1;</code>
     */
    private $ids;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $ids
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Room::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string ids = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIds()
    {
        return $this->ids;
    }

    /**
     * Generated from protobuf field <code>repeated string ids = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->ids = $arr;

        return $this;
    }

}

