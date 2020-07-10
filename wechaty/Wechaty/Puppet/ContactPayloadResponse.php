<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: contact.proto

namespace Wechaty\Puppet;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>wechaty.puppet.ContactPayloadResponse</code>
 */
class ContactPayloadResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>.wechaty.puppet.ContactGender gender = 2;</code>
     */
    protected $gender = 0;
    /**
     * Generated from protobuf field <code>.wechaty.puppet.ContactType type = 3;</code>
     */
    protected $type = 0;
    /**
     * Generated from protobuf field <code>string name = 4;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>string avatar = 5;</code>
     */
    protected $avatar = '';
    /**
     * Generated from protobuf field <code>string address = 6;</code>
     */
    protected $address = '';
    /**
     * Generated from protobuf field <code>string alias = 7;</code>
     */
    protected $alias = '';
    /**
     * Generated from protobuf field <code>string city = 8;</code>
     */
    protected $city = '';
    /**
     * Generated from protobuf field <code>bool friend = 9;</code>
     */
    protected $friend = false;
    /**
     * Generated from protobuf field <code>string province = 10;</code>
     */
    protected $province = '';
    /**
     * Generated from protobuf field <code>string signature = 11;</code>
     */
    protected $signature = '';
    /**
     * Generated from protobuf field <code>bool star = 12;</code>
     */
    protected $star = false;
    /**
     * Generated from protobuf field <code>string weixin = 13;</code>
     */
    protected $weixin = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type int $gender
     *     @type int $type
     *     @type string $name
     *     @type string $avatar
     *     @type string $address
     *     @type string $alias
     *     @type string $city
     *     @type bool $friend
     *     @type string $province
     *     @type string $signature
     *     @type bool $star
     *     @type string $weixin
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Contact::initOnce();
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
     * Generated from protobuf field <code>.wechaty.puppet.ContactGender gender = 2;</code>
     * @return int
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Generated from protobuf field <code>.wechaty.puppet.ContactGender gender = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setGender($var)
    {
        GPBUtil::checkEnum($var, \Wechaty\Puppet\ContactGender::class);
        $this->gender = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.wechaty.puppet.ContactType type = 3;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.wechaty.puppet.ContactType type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Wechaty\Puppet\ContactType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 4;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string avatar = 5;</code>
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Generated from protobuf field <code>string avatar = 5;</code>
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
     * Generated from protobuf field <code>string address = 6;</code>
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Generated from protobuf field <code>string address = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->address = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string alias = 7;</code>
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Generated from protobuf field <code>string alias = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setAlias($var)
    {
        GPBUtil::checkString($var, True);
        $this->alias = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string city = 8;</code>
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Generated from protobuf field <code>string city = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setCity($var)
    {
        GPBUtil::checkString($var, True);
        $this->city = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool friend = 9;</code>
     * @return bool
     */
    public function getFriend()
    {
        return $this->friend;
    }

    /**
     * Generated from protobuf field <code>bool friend = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setFriend($var)
    {
        GPBUtil::checkBool($var);
        $this->friend = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string province = 10;</code>
     * @return string
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * Generated from protobuf field <code>string province = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setProvince($var)
    {
        GPBUtil::checkString($var, True);
        $this->province = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string signature = 11;</code>
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Generated from protobuf field <code>string signature = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setSignature($var)
    {
        GPBUtil::checkString($var, True);
        $this->signature = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool star = 12;</code>
     * @return bool
     */
    public function getStar()
    {
        return $this->star;
    }

    /**
     * Generated from protobuf field <code>bool star = 12;</code>
     * @param bool $var
     * @return $this
     */
    public function setStar($var)
    {
        GPBUtil::checkBool($var);
        $this->star = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string weixin = 13;</code>
     * @return string
     */
    public function getWeixin()
    {
        return $this->weixin;
    }

    /**
     * Generated from protobuf field <code>string weixin = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setWeixin($var)
    {
        GPBUtil::checkString($var, True);
        $this->weixin = $var;

        return $this;
    }

}

