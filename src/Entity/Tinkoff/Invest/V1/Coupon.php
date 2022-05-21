<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: instruments.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Объект передачи информации о купоне облигации.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.Coupon</code>
 */
class Coupon extends \Google\Protobuf\Internal\Message
{
    /**
     *Figi-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string figi = 1;</code>
     */
    protected $figi = '';
    /**
     *Дата выплаты купона
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp coupon_date = 2;</code>
     */
    protected $coupon_date = null;
    /**
     *Номер купона
     *
     * Generated from protobuf field <code>int64 coupon_number = 3;</code>
     */
    protected $coupon_number = 0;
    /**
     *(Опционально) Дата фиксации реестра для выплаты купона
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp fix_date = 4;</code>
     */
    protected $fix_date = null;
    /**
     *Выплата на одну облигацию
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue pay_one_bond = 5;</code>
     */
    protected $pay_one_bond = null;
    /**
     *Тип купона
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.CouponType coupon_type = 6;</code>
     */
    protected $coupon_type = 0;
    /**
     *Начало купонного периода.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp coupon_start_date = 7;</code>
     */
    protected $coupon_start_date = null;
    /**
     *Окончание купонного периода.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp coupon_end_date = 8;</code>
     */
    protected $coupon_end_date = null;
    /**
     *Купонный период в днях.
     *
     * Generated from protobuf field <code>int32 coupon_period = 9;</code>
     */
    protected $coupon_period = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $figi
     *          Figi-идентификатор инструмента.
     *     @type \Google\Protobuf\Timestamp $coupon_date
     *          Дата выплаты купона
     *     @type int|string $coupon_number
     *          Номер купона
     *     @type \Google\Protobuf\Timestamp $fix_date
     *          (Опционально) Дата фиксации реестра для выплаты купона
     *     @type \Tinkoff\Invest\V1\MoneyValue $pay_one_bond
     *          Выплата на одну облигацию
     *     @type int $coupon_type
     *          Тип купона
     *     @type \Google\Protobuf\Timestamp $coupon_start_date
     *          Начало купонного периода.
     *     @type \Google\Protobuf\Timestamp $coupon_end_date
     *          Окончание купонного периода.
     *     @type int $coupon_period
     *          Купонный период в днях.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Instruments::initOnce();
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
     *Дата выплаты купона
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp coupon_date = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCouponDate()
    {
        return $this->coupon_date;
    }

    public function hasCouponDate()
    {
        return isset($this->coupon_date);
    }

    public function clearCouponDate()
    {
        unset($this->coupon_date);
    }

    /**
     *Дата выплаты купона
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp coupon_date = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCouponDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->coupon_date = $var;

        return $this;
    }

    /**
     *Номер купона
     *
     * Generated from protobuf field <code>int64 coupon_number = 3;</code>
     * @return int|string
     */
    public function getCouponNumber()
    {
        return $this->coupon_number;
    }

    /**
     *Номер купона
     *
     * Generated from protobuf field <code>int64 coupon_number = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCouponNumber($var)
    {
        GPBUtil::checkInt64($var);
        $this->coupon_number = $var;

        return $this;
    }

    /**
     *(Опционально) Дата фиксации реестра для выплаты купона
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp fix_date = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getFixDate()
    {
        return $this->fix_date;
    }

    public function hasFixDate()
    {
        return isset($this->fix_date);
    }

    public function clearFixDate()
    {
        unset($this->fix_date);
    }

    /**
     *(Опционально) Дата фиксации реестра для выплаты купона
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp fix_date = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setFixDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->fix_date = $var;

        return $this;
    }

    /**
     *Выплата на одну облигацию
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue pay_one_bond = 5;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue|null
     */
    public function getPayOneBond()
    {
        return $this->pay_one_bond;
    }

    public function hasPayOneBond()
    {
        return isset($this->pay_one_bond);
    }

    public function clearPayOneBond()
    {
        unset($this->pay_one_bond);
    }

    /**
     *Выплата на одну облигацию
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue pay_one_bond = 5;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setPayOneBond($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->pay_one_bond = $var;

        return $this;
    }

    /**
     *Тип купона
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.CouponType coupon_type = 6;</code>
     * @return int
     */
    public function getCouponType()
    {
        return $this->coupon_type;
    }

    /**
     *Тип купона
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.CouponType coupon_type = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setCouponType($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\CouponType::class);
        $this->coupon_type = $var;

        return $this;
    }

    /**
     *Начало купонного периода.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp coupon_start_date = 7;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCouponStartDate()
    {
        return $this->coupon_start_date;
    }

    public function hasCouponStartDate()
    {
        return isset($this->coupon_start_date);
    }

    public function clearCouponStartDate()
    {
        unset($this->coupon_start_date);
    }

    /**
     *Начало купонного периода.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp coupon_start_date = 7;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCouponStartDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->coupon_start_date = $var;

        return $this;
    }

    /**
     *Окончание купонного периода.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp coupon_end_date = 8;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCouponEndDate()
    {
        return $this->coupon_end_date;
    }

    public function hasCouponEndDate()
    {
        return isset($this->coupon_end_date);
    }

    public function clearCouponEndDate()
    {
        unset($this->coupon_end_date);
    }

    /**
     *Окончание купонного периода.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp coupon_end_date = 8;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCouponEndDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->coupon_end_date = $var;

        return $this;
    }

    /**
     *Купонный период в днях.
     *
     * Generated from protobuf field <code>int32 coupon_period = 9;</code>
     * @return int
     */
    public function getCouponPeriod()
    {
        return $this->coupon_period;
    }

    /**
     *Купонный период в днях.
     *
     * Generated from protobuf field <code>int32 coupon_period = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setCouponPeriod($var)
    {
        GPBUtil::checkInt32($var);
        $this->coupon_period = $var;

        return $this;
    }

}

