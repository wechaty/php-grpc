<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: contact.proto

namespace Wechaty\Puppet;

use UnexpectedValueException;

/**
 * Protobuf type <code>wechaty.puppet.ContactGender</code>
 */
class ContactGender
{
    /**
     * Generated from protobuf enum <code>CONTACT_GENDER_UNSPECIFIED = 0;</code>
     */
    const CONTACT_GENDER_UNSPECIFIED = 0;
    /**
     * Generated from protobuf enum <code>CONTACT_GENDER_MALE = 1;</code>
     */
    const CONTACT_GENDER_MALE = 1;
    /**
     * Generated from protobuf enum <code>CONTACT_GENDER_FEMALE = 2;</code>
     */
    const CONTACT_GENDER_FEMALE = 2;

    private static $valueToName = [
        self::CONTACT_GENDER_UNSPECIFIED => 'CONTACT_GENDER_UNSPECIFIED',
        self::CONTACT_GENDER_MALE => 'CONTACT_GENDER_MALE',
        self::CONTACT_GENDER_FEMALE => 'CONTACT_GENDER_FEMALE',
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

