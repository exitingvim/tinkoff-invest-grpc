<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sandbox.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Результат пополнения счёта, текущий баланс.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.SandboxPayInResponse</code>
 */
class SandboxPayInResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *Текущий баланс счёта
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue balance = 1;</code>
     */
    protected $balance = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Tinkoff\Invest\V1\MoneyValue $balance
     *          Текущий баланс счёта
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Sandbox::initOnce();
        parent::__construct($data);
    }

    /**
     *Текущий баланс счёта
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue balance = 1;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue|null
     */
    public function getBalance()
    {
        return $this->balance;
    }

    public function hasBalance()
    {
        return isset($this->balance);
    }

    public function clearBalance()
    {
        unset($this->balance);
    }

    /**
     *Текущий баланс счёта
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue balance = 1;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setBalance($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->balance = $var;

        return $this;
    }

}

