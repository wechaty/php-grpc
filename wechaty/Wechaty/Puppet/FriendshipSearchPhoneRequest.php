<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: friendship.proto

namespace Wechaty\Puppet;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>wechaty.puppet.FriendshipSearchPhoneRequest</code>
 */
class FriendshipSearchPhoneRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string phone = 1;</code>
     */
    protected $phone = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $phone
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Friendship::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string phone = 1;</code>
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Generated from protobuf field <code>string phone = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPhone($var)
    {
        GPBUtil::checkString($var, True);
        $this->phone = $var;

        return $this;
    }

}

