<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: marketdata.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Пакет стаканов в рамках стрима.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.OrderBook</code>
 */
class OrderBook extends \Google\Protobuf\Internal\Message
{
    /**
     *Figi-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string figi = 1;</code>
     */
    protected $figi = '';
    /**
     *Глубина стакана.
     *
     * Generated from protobuf field <code>int32 depth = 2;</code>
     */
    protected $depth = 0;
    /**
     *Флаг консистентности стакана. **false** значит не все заявки попали в стакан по причинам сетевых задержек или нарушения порядка доставки.
     *
     * Generated from protobuf field <code>bool is_consistent = 3;</code>
     */
    protected $is_consistent = false;
    /**
     *Массив предложений.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.Order bids = 4;</code>
     */
    private $bids;
    /**
     *Массив спроса.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.Order asks = 5;</code>
     */
    private $asks;
    /**
     *Время формирования стакана в часовом поясе UTC по времени биржи.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time = 6;</code>
     */
    protected $time = null;
    /**
     *Верхний лимит цены за 1 инструмент. Для получения стоимости лота требуется умножить на лотность инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation limit_up = 7;</code>
     */
    protected $limit_up = null;
    /**
     *Нижний лимит цены за 1 инструмент. Для получения стоимости лота требуется умножить на лотность инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation limit_down = 8;</code>
     */
    protected $limit_down = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $figi
     *          Figi-идентификатор инструмента.
     *     @type int $depth
     *          Глубина стакана.
     *     @type bool $is_consistent
     *          Флаг консистентности стакана. **false** значит не все заявки попали в стакан по причинам сетевых задержек или нарушения порядка доставки.
     *     @type \Tinkoff\Invest\V1\Order[]|\Google\Protobuf\Internal\RepeatedField $bids
     *          Массив предложений.
     *     @type \Tinkoff\Invest\V1\Order[]|\Google\Protobuf\Internal\RepeatedField $asks
     *          Массив спроса.
     *     @type \Google\Protobuf\Timestamp $time
     *          Время формирования стакана в часовом поясе UTC по времени биржи.
     *     @type \Tinkoff\Invest\V1\Quotation $limit_up
     *          Верхний лимит цены за 1 инструмент. Для получения стоимости лота требуется умножить на лотность инструмента.
     *     @type \Tinkoff\Invest\V1\Quotation $limit_down
     *          Нижний лимит цены за 1 инструмент. Для получения стоимости лота требуется умножить на лотность инструмента.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Marketdata::initOnce();
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
     *Глубина стакана.
     *
     * Generated from protobuf field <code>int32 depth = 2;</code>
     * @return int
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     *Глубина стакана.
     *
     * Generated from protobuf field <code>int32 depth = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setDepth($var)
    {
        GPBUtil::checkInt32($var);
        $this->depth = $var;

        return $this;
    }

    /**
     *Флаг консистентности стакана. **false** значит не все заявки попали в стакан по причинам сетевых задержек или нарушения порядка доставки.
     *
     * Generated from protobuf field <code>bool is_consistent = 3;</code>
     * @return bool
     */
    public function getIsConsistent()
    {
        return $this->is_consistent;
    }

    /**
     *Флаг консистентности стакана. **false** значит не все заявки попали в стакан по причинам сетевых задержек или нарушения порядка доставки.
     *
     * Generated from protobuf field <code>bool is_consistent = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsConsistent($var)
    {
        GPBUtil::checkBool($var);
        $this->is_consistent = $var;

        return $this;
    }

    /**
     *Массив предложений.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.Order bids = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBids()
    {
        return $this->bids;
    }

    /**
     *Массив предложений.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.Order bids = 4;</code>
     * @param \Tinkoff\Invest\V1\Order[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBids($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Tinkoff\Invest\V1\Order::class);
        $this->bids = $arr;

        return $this;
    }

    /**
     *Массив спроса.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.Order asks = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAsks()
    {
        return $this->asks;
    }

    /**
     *Массив спроса.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.Order asks = 5;</code>
     * @param \Tinkoff\Invest\V1\Order[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAsks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Tinkoff\Invest\V1\Order::class);
        $this->asks = $arr;

        return $this;
    }

    /**
     *Время формирования стакана в часовом поясе UTC по времени биржи.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time = 6;</code>
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
     *Время формирования стакана в часовом поясе UTC по времени биржи.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time = 6;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->time = $var;

        return $this;
    }

    /**
     *Верхний лимит цены за 1 инструмент. Для получения стоимости лота требуется умножить на лотность инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation limit_up = 7;</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getLimitUp()
    {
        return $this->limit_up;
    }

    public function hasLimitUp()
    {
        return isset($this->limit_up);
    }

    public function clearLimitUp()
    {
        unset($this->limit_up);
    }

    /**
     *Верхний лимит цены за 1 инструмент. Для получения стоимости лота требуется умножить на лотность инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation limit_up = 7;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setLimitUp($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->limit_up = $var;

        return $this;
    }

    /**
     *Нижний лимит цены за 1 инструмент. Для получения стоимости лота требуется умножить на лотность инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation limit_down = 8;</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getLimitDown()
    {
        return $this->limit_down;
    }

    public function hasLimitDown()
    {
        return isset($this->limit_down);
    }

    public function clearLimitDown()
    {
        unset($this->limit_down);
    }

    /**
     *Нижний лимит цены за 1 инструмент. Для получения стоимости лота требуется умножить на лотность инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation limit_down = 8;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setLimitDown($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->limit_down = $var;

        return $this;
    }

}

