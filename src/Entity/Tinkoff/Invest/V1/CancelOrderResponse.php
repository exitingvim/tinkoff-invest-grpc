<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: orders.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Результат отмены торгового поручения.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.CancelOrderResponse</code>
 */
class CancelOrderResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *Дата и время отмены заявки в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time = 1;</code>
     */
    protected $time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $time
     *          Дата и время отмены заявки в часовом поясе UTC.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Orders::initOnce();
        parent::__construct($data);
    }

    /**
     *Дата и время отмены заявки в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getTime()
    {
        return $this->time;
    }

    public function hasTime()
    {
        return isset($this->time);
    }

    public function clearTime()
    {
        unset($this->time);
    }

    /**
     *Дата и время отмены заявки в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->time = $var;

        return $this;
    }

}

