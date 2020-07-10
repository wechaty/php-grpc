<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: room_member.proto

namespace Wechaty\Puppet;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>wechaty.puppet.RoomMemberPayloadResponse</code>
 */
class RoomMemberPayloadResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string room_alias = 2;</code>
     */
    protected $room_alias = '';
    /**
     * Generated from protobuf field <code>string inviter_id = 3;</code>
     */
    protected $inviter_id = '';
    /**
     * Generated from protobuf field <code>string avatar = 4;</code>
     */
    protected $avatar = '';
    /**
     * Generated from protobuf field <code>string name = 5;</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $room_alias
     *     @type string $inviter_id
     *     @type string $avatar
     *     @type string $name
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\RoomMember::initOnce();
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
     * Generated from protobuf field <code>string room_alias = 2;</code>
     * @return string
     */
    public function getRoomAlias()
    {
        return $this->room_alias;
    }

    /**
     * Generated from protobuf field <code>string room_alias = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRoomAlias($var)
    {
        GPBUtil::checkString($var, True);
        $this->room_alias = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string inviter_id = 3;</code>
     * @return string
     */
    public function getInviterId()
    {
        return $this->inviter_id;
    }

    /**
     * Generated from protobuf field <code>string inviter_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setInviterId($var)
    {
        GPBUtil::checkString($var, True);
        $this->inviter_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string avatar = 4;</code>
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Generated from protobuf field <code>string avatar = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setAvatar($var)
    {
        GPBUtil::checkString($var, True);
        $this->avatar = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 5;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}
