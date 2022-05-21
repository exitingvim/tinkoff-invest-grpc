<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: orders.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Информация о сделке.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.OrderTrade</code>
 */
class OrderTrade extends \Google\Protobuf\Internal\Message
{
    /**
     *Дата и время совершения сделки в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp date_time = 1;</code>
     */
    protected $date_time = null;
    /**
     *Цена одного инструмента, по которой совершена сделка.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation price = 2;</code>
     */
    protected $price = null;
    /**
     *Количество лотов в сделке.
     *
     * Generated from protobuf field <code>int64 quantity = 3;</code>
     */
    protected $quantity = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $date_time
     *          Дата и время совершения сделки в часовом поясе UTC.
     *     @type \Tinkoff\Invest\V1\Quotation $price
     *          Цена одного инструмента, по которой совершена сделка.
     *     @type int|string $quantity
     *          Количество лотов в сделке.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Orders::initOnce();
        parent::__construct($data);
    }

    /**
     *Дата и время совершения сделки в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp date_time = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getDateTime()
    {
        return $this->date_time;
    }

    public function hasDateTime()
    {
        return isset($this->date_time);
    }

    public function clearDateTime()
    {
        unset($this->date_time);
    }

    /**
     *Дата и время совершения сделки в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp date_time = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->date_time = $var;

        return $this;
    }

    /**
     *Цена одного инструмента, по которой совершена сделка.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation price = 2;</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getPrice()
    {
        return $this->price;
    }

    public function hasPrice()
    {
        return isset($this->price);
    }

    public function clearPrice()
    {
        unset($this->price);
    }

    /**
     *Цена одного инструмента, по которой совершена сделка.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation price = 2;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setPrice($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->price = $var;

        return $this;
    }

    /**
     *Количество лотов в сделке.
     *
     * Generated from protobuf field <code>int64 quantity = 3;</code>
     * @return int|string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     *Количество лотов в сделке.
     *
     * Generated from protobuf field <code>int64 quantity = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setQuantity($var)
    {
        GPBUtil::checkInt64($var);
        $this->quantity = $var;

        return $this;
    }

}

