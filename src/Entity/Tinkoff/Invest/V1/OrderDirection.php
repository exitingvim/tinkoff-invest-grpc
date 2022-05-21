<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: orders.proto

namespace Tinkoff\Invest\V1;

use UnexpectedValueException;

/**
 *Направление операции
 *
 * Protobuf type <code>tinkoff.public.invest.api.contract.v1.OrderDirection</code>
 */
class OrderDirection
{
    /**
     *Значение не указано
     *
     * Generated from protobuf enum <code>ORDER_DIRECTION_UNSPECIFIED = 0;</code>
     */
    const ORDER_DIRECTION_UNSPECIFIED = 0;
    /**
     *Покупка
     *
     * Generated from protobuf enum <code>ORDER_DIRECTION_BUY = 1;</code>
     */
    const ORDER_DIRECTION_BUY = 1;
    /**
     *Продажа
     *
     * Generated from protobuf enum <code>ORDER_DIRECTION_SELL = 2;</code>
     */
    const ORDER_DIRECTION_SELL = 2;

    private static $valueToName = [
        self::ORDER_DIRECTION_UNSPECIFIED => 'ORDER_DIRECTION_UNSPECIFIED',
        self::ORDER_DIRECTION_BUY => 'ORDER_DIRECTION_BUY',
        self::ORDER_DIRECTION_SELL => 'ORDER_DIRECTION_SELL',
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

