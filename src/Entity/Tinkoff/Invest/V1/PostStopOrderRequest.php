<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: stoporders.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Запрос выставления стоп-заявки.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.PostStopOrderRequest</code>
 */
class PostStopOrderRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *Figi-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string figi = 1;</code>
     */
    protected $figi = '';
    /**
     *Количество лотов.
     *
     * Generated from protobuf field <code>int64 quantity = 2;</code>
     */
    protected $quantity = 0;
    /**
     *Цена за 1 инструмент. Для получения стоимости лота требуется умножить на лотность инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation price = 3;</code>
     */
    protected $price = null;
    /**
     *Стоп-цена заявки за 1 инструмент. Для получения стоимости лота требуется умножить на лотность инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation stop_price = 4;</code>
     */
    protected $stop_price = null;
    /**
     *Направление операции.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.StopOrderDirection direction = 5;</code>
     */
    protected $direction = 0;
    /**
     *Номер счёта.
     *
     * Generated from protobuf field <code>string account_id = 6;</code>
     */
    protected $account_id = '';
    /**
     *Тип экспирации заявки.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.StopOrderExpirationType expiration_type = 7;</code>
     */
    protected $expiration_type = 0;
    /**
     *Тип заявки.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.StopOrderType stop_order_type = 8;</code>
     */
    protected $stop_order_type = 0;
    /**
     *Дата и время окончания действия стоп-заявки в часовом поясе UTC. **Для ExpirationType = GoodTillDate заполнение обязательно**.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_date = 9;</code>
     */
    protected $expire_date = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $figi
     *          Figi-идентификатор инструмента.
     *     @type int|string $quantity
     *          Количество лотов.
     *     @type \Tinkoff\Invest\V1\Quotation $price
     *          Цена за 1 инструмент. Для получения стоимости лота требуется умножить на лотность инструмента.
     *     @type \Tinkoff\Invest\V1\Quotation $stop_price
     *          Стоп-цена заявки за 1 инструмент. Для получения стоимости лота требуется умножить на лотность инструмента.
     *     @type int $direction
     *          Направление операции.
     *     @type string $account_id
     *          Номер счёта.
     *     @type int $expiration_type
     *          Тип экспирации заявки.
     *     @type int $stop_order_type
     *          Тип заявки.
     *     @type \Google\Protobuf\Timestamp $expire_date
     *          Дата и время окончания действия стоп-заявки в часовом поясе UTC. **Для ExpirationType = GoodTillDate заполнение обязательно**.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Stoporders::initOnce();
        parent::__construct($data);
    }

    /**
     *Figi-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string figi = 1;</code>
     * @return string
     */
    public function getFigi()
    {
        return $this->figi;
    }

    /**
     *Figi-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string figi = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFigi($var)
    {
        GPBUtil::checkString($var, True);
        $this->figi = $var;

        return $this;
    }

    /**
     *Количество лотов.
     *
     * Generated from protobuf field <code>int64 quantity = 2;</code>
     * @return int|string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     *Количество лотов.
     *
     * Generated from protobuf field <code>int64 quantity = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setQuantity($var)
    {
        GPBUtil::checkInt64($var);
        $this->quantity = $var;

        return $this;
    }

    /**
     *Цена за 1 инструмент. Для получения стоимости лота требуется умножить на лотность инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation price = 3;</code>
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
     *Цена за 1 инструмент. Для получения стоимости лота требуется умножить на лотность инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation price = 3;</code>
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
     *Стоп-цена заявки за 1 инструмент. Для получения стоимости лота требуется умножить на лотность инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation stop_price = 4;</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getStopPrice()
    {
        return $this->stop_price;
    }

    public function hasStopPrice()
    {
        return isset($this->stop_price);
    }

    public function clearStopPrice()
    {
        unset($this->stop_price);
    }

    /**
     *Стоп-цена заявки за 1 инструмент. Для получения стоимости лота требуется умножить на лотность инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation stop_price = 4;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setStopPrice($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->stop_price = $var;

        return $this;
    }

    /**
     *Направление операции.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.StopOrderDirection direction = 5;</code>
     * @return int
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     *Направление операции.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.StopOrderDirection direction = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setDirection($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\StopOrderDirection::class);
        $this->direction = $var;

        return $this;
    }

    /**
     *Номер счёта.
     *
     * Generated from protobuf field <code>string account_id = 6;</code>
     * @return string
     */
    public function getAccountId()
    {
        return $this->account_id;
    }

    /**
     *Номер счёта.
     *
     * Generated from protobuf field <code>string account_id = 6;</code>
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
     *Тип экспирации заявки.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.StopOrderExpirationType expiration_type = 7;</code>
     * @return int
     */
    public function getExpirationType()
    {
        return $this->expiration_type;
    }

    /**
     *Тип экспирации заявки.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.StopOrderExpirationType expiration_type = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setExpirationType($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\StopOrderExpirationType::class);
        $this->expiration_type = $var;

        return $this;
    }

    /**
     *Тип заявки.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.StopOrderType stop_order_type = 8;</code>
     * @return int
     */
    public function getStopOrderType()
    {
        return $this->stop_order_type;
    }

    /**
     *Тип заявки.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.StopOrderType stop_order_type = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setStopOrderType($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\StopOrderType::class);
        $this->stop_order_type = $var;

        return $this;
    }

    /**
     *Дата и время окончания действия стоп-заявки в часовом поясе UTC. **Для ExpirationType = GoodTillDate заполнение обязательно**.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_date = 9;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExpireDate()
    {
        return $this->expire_date;
    }

    public function hasExpireDate()
    {
        return isset($this->expire_date);
    }

    public function clearExpireDate()
    {
        unset($this->expire_date);
    }

    /**
     *Дата и время окончания действия стоп-заявки в часовом поясе UTC. **Для ExpirationType = GoodTillDate заполнение обязательно**.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_date = 9;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpireDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expire_date = $var;

        return $this;
    }

}

