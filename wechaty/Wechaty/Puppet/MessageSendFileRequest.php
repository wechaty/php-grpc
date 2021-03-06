<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: message.proto

namespace Wechaty\Puppet;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>wechaty.puppet.MessageSendFileRequest</code>
 */
class MessageSendFileRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string conversation_id = 1;</code>
     */
    protected $conversation_id = '';
    /**
     * Generated from protobuf field <code>string filebox = 2;</code>
     */
    protected $filebox = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $conversation_id
     *     @type string $filebox
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string conversation_id = 1;</code>
     * @return string
     */
    public function getConversationId()
    {
        return $this->conversation_id;
    }

    /**
     * Generated from protobuf field <code>string conversation_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setConversationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->conversation_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string filebox = 2;</code>
     * @return string
     */
    public function getFilebox()
    {
        return $this->filebox;
    }

    /**
     * Generated from protobuf field <code>string filebox = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFilebox($var)
    {
        GPBUtil::checkString($var, True);
        $this->filebox = $var;

        return $this;
    }

}

