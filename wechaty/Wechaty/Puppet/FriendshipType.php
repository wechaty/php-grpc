<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: friendship.proto

namespace Wechaty\Puppet;

use UnexpectedValueException;

/**
 * Protobuf type <code>wechaty.puppet.FriendshipType</code>
 */
class FriendshipType
{
    /**
     * Generated from protobuf enum <code>FRIENDSHIP_TYPE_UNSPECIFIED = 0;</code>
     */
    const FRIENDSHIP_TYPE_UNSPECIFIED = 0;
    /**
     * Generated from protobuf enum <code>FRIENDSHIP_TYPE_CONFIRM = 1;</code>
     */
    const FRIENDSHIP_TYPE_CONFIRM = 1;
    /**
     * Generated from protobuf enum <code>FRIENDSHIP_TYPE_RECEIVE = 2;</code>
     */
    const FRIENDSHIP_TYPE_RECEIVE = 2;
    /**
     * Generated from protobuf enum <code>FRIENDSHIP_TYPE_VERIFY = 3;</code>
     */
    const FRIENDSHIP_TYPE_VERIFY = 3;

    private static $valueToName = [
        self::FRIENDSHIP_TYPE_UNSPECIFIED => 'FRIENDSHIP_TYPE_UNSPECIFIED',
        self::FRIENDSHIP_TYPE_CONFIRM => 'FRIENDSHIP_TYPE_CONFIRM',
        self::FRIENDSHIP_TYPE_RECEIVE => 'FRIENDSHIP_TYPE_RECEIVE',
        self::FRIENDSHIP_TYPE_VERIFY => 'FRIENDSHIP_TYPE_VERIFY',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

