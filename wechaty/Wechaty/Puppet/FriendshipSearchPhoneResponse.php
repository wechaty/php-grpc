<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: friendship.proto

namespace Wechaty\Puppet;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>wechaty.puppet.FriendshipSearchPhoneResponse</code>
 */
class FriendshipSearchPhoneResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * nullable
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue contact_id = 1;</code>
     */
    protected $contact_id = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $contact_id
     *           nullable
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Friendship::initOnce();
        parent::__construct($data);
    }

    /**
     * nullable
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue contact_id = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getContactId()
    {
        return $this->contact_id;
    }

    /**
     * Returns the unboxed value from <code>getContactId()</code>

     * nullable
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue contact_id = 1;</code>
     * @return string|null
     */
    public function getContactIdUnwrapped()
    {
        return $this->readWrapperValue("contact_id");
    }

    /**
     * nullable
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue contact_id = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setContactId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->contact_id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * nullable
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue contact_id = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setContactIdUnwrapped($var)
    {
        $this->writeWrapperValue("contact_id", $var);
        return $this;}

}

