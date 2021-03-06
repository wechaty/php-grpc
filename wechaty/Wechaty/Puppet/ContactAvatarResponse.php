<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: contact.proto

namespace Wechaty\Puppet;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>wechaty.puppet.ContactAvatarResponse</code>
 */
class ContactAvatarResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue filebox = 1;</code>
     */
    protected $filebox = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $filebox
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Contact::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue filebox = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getFilebox()
    {
        return $this->filebox;
    }

    /**
     * Returns the unboxed value from <code>getFilebox()</code>

     * Generated from protobuf field <code>.google.protobuf.StringValue filebox = 1;</code>
     * @return string|null
     */
    public function getFileboxUnwrapped()
    {
        return $this->readWrapperValue("filebox");
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue filebox = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setFilebox($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->filebox = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Generated from protobuf field <code>.google.protobuf.StringValue filebox = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setFileboxUnwrapped($var)
    {
        $this->writeWrapperValue("filebox", $var);
        return $this;}

}

