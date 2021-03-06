<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: contact.proto

namespace Wechaty\Puppet;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>wechaty.puppet.ContactAliasResponse</code>
 */
class ContactAliasResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue alias = 1;</code>
     */
    protected $alias = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $alias
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Contact::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue alias = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Returns the unboxed value from <code>getAlias()</code>

     * Generated from protobuf field <code>.google.protobuf.StringValue alias = 1;</code>
     * @return string|null
     */
    public function getAliasUnwrapped()
    {
        return $this->readWrapperValue("alias");
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue alias = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAlias($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->alias = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Generated from protobuf field <code>.google.protobuf.StringValue alias = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setAliasUnwrapped($var)
    {
        $this->writeWrapperValue("alias", $var);
        return $this;}

}

