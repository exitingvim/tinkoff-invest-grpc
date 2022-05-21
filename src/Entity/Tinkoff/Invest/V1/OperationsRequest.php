<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: operations.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Запрос получения списка операций по счёту.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.OperationsRequest</code>
 */
class OperationsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *Идентификатор счёта клиента.
     *
     * Generated from protobuf field <code>string account_id = 1;</code>
     */
    protected $account_id = '';
    /**
     *Начало периода (по UTC).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp from = 2;</code>
     */
    protected $from = null;
    /**
     *Окончание периода (по UTC).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp to = 3;</code>
     */
    protected $to = null;
    /**
     *Статус запрашиваемых операций.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.OperationState state = 4;</code>
     */
    protected $state = 0;
    /**
     *Figi-идентификатор инструмента для фильтрации.
     *
     * Generated from protobuf field <code>string figi = 5;</code>
     */
    protected $figi = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $account_id
     *          Идентификатор счёта клиента.
     *     @type \Google\Protobuf\Timestamp $from
     *          Начало периода (по UTC).
     *     @type \Google\Protobuf\Timestamp $to
     *          Окончание периода (по UTC).
     *     @type int $state
     *          Статус запрашиваемых операций.
     *     @type string $figi
     *          Figi-идентификатор инструмента для фильтрации.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Operations::initOnce();
        parent::__construct($data);
    }

    /**
     *Идентификатор счёта клиента.
     *
     * Generated from protobuf field <code>string account_id = 1;</code>
     * @return string
     */
    public function getAccountId()
    {
        return $this->account_id;
    }

    /**
     *Идентификатор счёта клиента.
     *
     * Generated from protobuf field <code>string account_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAccountId($var)
    {
        GPBUtil::checkString($var, True);
        $this->account_id = $var;

        return $this;
    }

    /**
     *Начало периода (по UTC).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp from = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getFrom()
    {
        return $this->from;
    }

    public function hasFrom()
    {
        return isset($this->from);
    }

    public function clearFrom()
    {
        unset($this->from);
    }

    /**
     *Начало периода (по UTC).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp from = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setFrom($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->from = $var;

        return $this;
    }

    /**
     *Окончание периода (по UTC).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp to = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getTo()
    {
        return $this->to;
    }

    public function hasTo()
    {
        return isset($this->to);
    }

    public function clearTo()
    {
        unset($this->to);
    }

    /**
     *Окончание периода (по UTC).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp to = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTo($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->to = $var;

        return $this;
    }

    /**
     *Статус запрашиваемых операций.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.OperationState state = 4;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     *Статус запрашиваемых операций.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.OperationState state = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\OperationState::class);
        $this->state = $var;

        return $this;
    }

    /**
     *Figi-идентификатор инструмента для фильтрации.
     *
     * Generated from protobuf field <code>string figi = 5;</code>
     * @return string
     */
    public function getFigi()
    {
        return $this->figi;
    }

    /**
     *Figi-идентификатор инструмента для фильтрации.
     *
     * Generated from protobuf field <code>string figi = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setFigi($var)
    {
        GPBUtil::checkString($var, True);
        $this->figi = $var;

        return $this;
    }

}

