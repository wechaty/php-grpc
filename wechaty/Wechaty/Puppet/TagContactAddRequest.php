<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: tag.proto

namespace Wechaty\Puppet;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>wechaty.puppet.TagContactAddRequest</code>
 */
class TagContactAddRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string contact_id = 2;</code>
     */
    protected $contact_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $contact_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Tag::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string contact_id = 2;</code>
     * @return string
     */
    public function getContactId()
    {
        return $this->contact_id;
    }

    /**
     * Generated from protobuf field <code>string contact_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setContactId($var)
    {
        GPBUtil::checkString($var, True);
        $this->contact_id = $var;

        return $this;
    }

}

