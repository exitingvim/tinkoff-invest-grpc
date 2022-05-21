<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: instruments.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Объект передачи основной информации об инструменте.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.Instrument</code>
 */
class Instrument extends \Google\Protobuf\Internal\Message
{
    /**
     *Figi-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string figi = 1;</code>
     */
    protected $figi = '';
    /**
     *Тикер инструмента.
     *
     * Generated from protobuf field <code>string ticker = 2;</code>
     */
    protected $ticker = '';
    /**
     *Класс-код инструмента.
     *
     * Generated from protobuf field <code>string class_code = 3;</code>
     */
    protected $class_code = '';
    /**
     *Isin-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string isin = 4;</code>
     */
    protected $isin = '';
    /**
     *Лотность инструмента. Возможно совершение операций только на количества ценной бумаги, кратные параметру *lot*. Подробнее: [лот](https://tinkoff.github.io/investAPI/glossary#lot)
     *
     * Generated from protobuf field <code>int32 lot = 5;</code>
     */
    protected $lot = 0;
    /**
     *Валюта расчётов.
     *
     * Generated from protobuf field <code>string currency = 6;</code>
     */
    protected $currency = '';
    /**
     *Коэффициент ставки риска длинной позиции по инструменту.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation klong = 7;</code>
     */
    protected $klong = null;
    /**
     *Коэффициент ставки риска короткой позиции по инструменту.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation kshort = 8;</code>
     */
    protected $kshort = null;
    /**
     *Ставка риска минимальной маржи в лонг. Подробнее: [ставка риска в лонг](https://help.tinkoff.ru/margin-trade/long/risk-rate/)
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation dlong = 9;</code>
     */
    protected $dlong = null;
    /**
     *Ставка риска минимальной маржи в шорт. Подробнее: [ставка риска в шорт](https://help.tinkoff.ru/margin-trade/short/risk-rate/)
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation dshort = 10;</code>
     */
    protected $dshort = null;
    /**
     *Ставка риска начальной маржи в лонг. Подробнее: [ставка риска в лонг](https://help.tinkoff.ru/margin-trade/long/risk-rate/)
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation dlong_min = 11;</code>
     */
    protected $dlong_min = null;
    /**
     *Ставка риска начальной маржи в шорт. Подробнее: [ставка риска в шорт](https://help.tinkoff.ru/margin-trade/short/risk-rate/)
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation dshort_min = 12;</code>
     */
    protected $dshort_min = null;
    /**
     *Признак доступности для операций в шорт.
     *
     * Generated from protobuf field <code>bool short_enabled_flag = 13;</code>
     */
    protected $short_enabled_flag = false;
    /**
     *Название инструмента.
     *
     * Generated from protobuf field <code>string name = 14;</code>
     */
    protected $name = '';
    /**
     *Торговая площадка.
     *
     * Generated from protobuf field <code>string exchange = 15;</code>
     */
    protected $exchange = '';
    /**
     *Код страны риска, т.е. страны, в которой компания ведёт основной бизнес.
     *
     * Generated from protobuf field <code>string country_of_risk = 16;</code>
     */
    protected $country_of_risk = '';
    /**
     *Наименование страны риска, т.е. страны, в которой компания ведёт основной бизнес.
     *
     * Generated from protobuf field <code>string country_of_risk_name = 17;</code>
     */
    protected $country_of_risk_name = '';
    /**
     *Тип инструмента.
     *
     * Generated from protobuf field <code>string instrument_type = 18;</code>
     */
    protected $instrument_type = '';
    /**
     *Текущий режим торгов инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SecurityTradingStatus trading_status = 19;</code>
     */
    protected $trading_status = 0;
    /**
     *Признак внебиржевой ценной бумаги.
     *
     * Generated from protobuf field <code>bool otc_flag = 20;</code>
     */
    protected $otc_flag = false;
    /**
     *Признак доступности для покупки.
     *
     * Generated from protobuf field <code>bool buy_available_flag = 21;</code>
     */
    protected $buy_available_flag = false;
    /**
     *Признак доступности для продажи.
     *
     * Generated from protobuf field <code>bool sell_available_flag = 22;</code>
     */
    protected $sell_available_flag = false;
    /**
     *Шаг цены.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation min_price_increment = 23;</code>
     */
    protected $min_price_increment = null;
    /**
     *Признак доступности торгов через API.
     *
     * Generated from protobuf field <code>bool api_trade_available_flag = 24;</code>
     */
    protected $api_trade_available_flag = false;
    /**
     *Уникальный идентификатор инструмента.
     *
     * Generated from protobuf field <code>string uid = 25;</code>
     */
    protected $uid = '';
    /**
     *Реальная площадка исполнения расчётов.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.RealExchange real_exchange = 26;</code>
     */
    protected $real_exchange = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $figi
     *          Figi-идентификатор инструмента.
     *     @type string $ticker
     *          Тикер инструмента.
     *     @type string $class_code
     *          Класс-код инструмента.
     *     @type string $isin
     *          Isin-идентификатор инструмента.
     *     @type int $lot
     *          Лотность инструмента. Возможно совершение операций только на количества ценной бумаги, кратные параметру *lot*. Подробнее: [лот](https://tinkoff.github.io/investAPI/glossary#lot)
     *     @type string $currency
     *          Валюта расчётов.
     *     @type \Tinkoff\Invest\V1\Quotation $klong
     *          Коэффициент ставки риска длинной позиции по инструменту.
     *     @type \Tinkoff\Invest\V1\Quotation $kshort
     *          Коэффициент ставки риска короткой позиции по инструменту.
     *     @type \Tinkoff\Invest\V1\Quotation $dlong
     *          Ставка риска минимальной маржи в лонг. Подробнее: [ставка риска в лонг](https://help.tinkoff.ru/margin-trade/long/risk-rate/)
     *     @type \Tinkoff\Invest\V1\Quotation $dshort
     *          Ставка риска минимальной маржи в шорт. Подробнее: [ставка риска в шорт](https://help.tinkoff.ru/margin-trade/short/risk-rate/)
     *     @type \Tinkoff\Invest\V1\Quotation $dlong_min
     *          Ставка риска начальной маржи в лонг. Подробнее: [ставка риска в лонг](https://help.tinkoff.ru/margin-trade/long/risk-rate/)
     *     @type \Tinkoff\Invest\V1\Quotation $dshort_min
     *          Ставка риска начальной маржи в шорт. Подробнее: [ставка риска в шорт](https://help.tinkoff.ru/margin-trade/short/risk-rate/)
     *     @type bool $short_enabled_flag
     *          Признак доступности для операций в шорт.
     *     @type string $name
     *          Название инструмента.
     *     @type string $exchange
     *          Торговая площадка.
     *     @type string $country_of_risk
     *          Код страны риска, т.е. страны, в которой компания ведёт основной бизнес.
     *     @type string $country_of_risk_name
     *          Наименование страны риска, т.е. страны, в которой компания ведёт основной бизнес.
     *     @type string $instrument_type
     *          Тип инструмента.
     *     @type int $trading_status
     *          Текущий режим торгов инструмента.
     *     @type bool $otc_flag
     *          Признак внебиржевой ценной бумаги.
     *     @type bool $buy_available_flag
     *          Признак доступности для покупки.
     *     @type bool $sell_available_flag
     *          Признак доступности для продажи.
     *     @type \Tinkoff\Invest\V1\Quotation $min_price_increment
     *          Шаг цены.
     *     @type bool $api_trade_available_flag
     *          Признак доступности торгов через API.
     *     @type string $uid
     *          Уникальный идентификатор инструмента.
     *     @type int $real_exchange
     *          Реальная площадка исполнения расчётов.
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
     *Тикер инструмента.
     *
     * Generated from protobuf field <code>string ticker = 2;</code>
     * @return string
     */
    public function getTicker()
    {
        return $this->ticker;
    }

    /**
     *Тикер инструмента.
     *
     * Generated from protobuf field <code>string ticker = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTicker($var)
    {
        GPBUtil::checkString($var, True);
        $this->ticker = $var;

        return $this;
    }

    /**
     *Класс-код инструмента.
     *
     * Generated from protobuf field <code>string class_code = 3;</code>
     * @return string
     */
    public function getClassCode()
    {
        return $this->class_code;
    }

    /**
     *Класс-код инструмента.
     *
     * Generated from protobuf field <code>string class_code = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setClassCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->class_code = $var;

        return $this;
    }

    /**
     *Isin-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string isin = 4;</code>
     * @return string
     */
    public function getIsin()
    {
        return $this->isin;
    }

    /**
     *Isin-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string isin = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setIsin($var)
    {
        GPBUtil::checkString($var, True);
        $this->isin = $var;

        return $this;
    }

    /**
     *Лотность инструмента. Возможно совершение операций только на количества ценной бумаги, кратные параметру *lot*. Подробнее: [лот](https://tinkoff.github.io/investAPI/glossary#lot)
     *
     * Generated from protobuf field <code>int32 lot = 5;</code>
     * @return int
     */
    public function getLot()
    {
        return $this->lot;
    }

    /**
     *Лотность инструмента. Возможно совершение операций только на количества ценной бумаги, кратные параметру *lot*. Подробнее: [лот](https://tinkoff.github.io/investAPI/glossary#lot)
     *
     * Generated from protobuf field <code>int32 lot = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setLot($var)
    {
        GPBUtil::checkInt32($var);
        $this->lot = $var;

        return $this;
    }

    /**
     *Валюта расчётов.
     *
     * Generated from protobuf field <code>string currency = 6;</code>
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     *Валюта расчётов.
     *
     * Generated from protobuf field <code>string currency = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setCurrency($var)
    {
        GPBUtil::checkString($var, True);
        $this->currency = $var;

        return $this;
    }

    /**
     *Коэффициент ставки риска длинной позиции по инструменту.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation klong = 7;</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getKlong()
    {
        return $this->klong;
    }

    public function hasKlong()
    {
        return isset($this->klong);
    }

    public function clearKlong()
    {
        unset($this->klong);
    }

    /**
     *Коэффициент ставки риска длинной позиции по инструменту.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation klong = 7;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setKlong($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->klong = $var;

        return $this;
    }

    /**
     *Коэффициент ставки риска короткой позиции по инструменту.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation kshort = 8;</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getKshort()
    {
        return $this->kshort;
    }

    public function hasKshort()
    {
        return isset($this->kshort);
    }

    public function clearKshort()
    {
        unset($this->kshort);
    }

    /**
     *Коэффициент ставки риска короткой позиции по инструменту.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation kshort = 8;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setKshort($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->kshort = $var;

        return $this;
    }

    /**
     *Ставка риска минимальной маржи в лонг. Подробнее: [ставка риска в лонг](https://help.tinkoff.ru/margin-trade/long/risk-rate/)
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation dlong = 9;</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getDlong()
    {
        return $this->dlong;
    }

    public function hasDlong()
    {
        return isset($this->dlong);
    }

    public function clearDlong()
    {
        unset($this->dlong);
    }

    /**
     *Ставка риска минимальной маржи в лонг. Подробнее: [ставка риска в лонг](https://help.tinkoff.ru/margin-trade/long/risk-rate/)
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation dlong = 9;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setDlong($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->dlong = $var;

        return $this;
    }

    /**
     *Ставка риска минимальной маржи в шорт. Подробнее: [ставка риска в шорт](https://help.tinkoff.ru/margin-trade/short/risk-rate/)
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation dshort = 10;</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getDshort()
    {
        return $this->dshort;
    }

    public function hasDshort()
    {
        return isset($this->dshort);
    }

    public function clearDshort()
    {
        unset($this->dshort);
    }

    /**
     *Ставка риска минимальной маржи в шорт. Подробнее: [ставка риска в шорт](https://help.tinkoff.ru/margin-trade/short/risk-rate/)
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation dshort = 10;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setDshort($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->dshort = $var;

        return $this;
    }

    /**
     *Ставка риска начальной маржи в лонг. Подробнее: [ставка риска в лонг](https://help.tinkoff.ru/margin-trade/long/risk-rate/)
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation dlong_min = 11;</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getDlongMin()
    {
        return $this->dlong_min;
    }

    public function hasDlongMin()
    {
        return isset($this->dlong_min);
    }

    public function clearDlongMin()
    {
        unset($this->dlong_min);
    }

    /**
     *Ставка риска начальной маржи в лонг. Подробнее: [ставка риска в лонг](https://help.tinkoff.ru/margin-trade/long/risk-rate/)
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation dlong_min = 11;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setDlongMin($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->dlong_min = $var;

        return $this;
    }

    /**
     *Ставка риска начальной маржи в шорт. Подробнее: [ставка риска в шорт](https://help.tinkoff.ru/margin-trade/short/risk-rate/)
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation dshort_min = 12;</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getDshortMin()
    {
        return $this->dshort_min;
    }

    public function hasDshortMin()
    {
        return isset($this->dshort_min);
    }

    public function clearDshortMin()
    {
        unset($this->dshort_min);
    }

    /**
     *Ставка риска начальной маржи в шорт. Подробнее: [ставка риска в шорт](https://help.tinkoff.ru/margin-trade/short/risk-rate/)
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation dshort_min = 12;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setDshortMin($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->dshort_min = $var;

        return $this;
    }

    /**
     *Признак доступности для операций в шорт.
     *
     * Generated from protobuf field <code>bool short_enabled_flag = 13;</code>
     * @return bool
     */
    public function getShortEnabledFlag()
    {
        return $this->short_enabled_flag;
    }

    /**
     *Признак доступности для операций в шорт.
     *
     * Generated from protobuf field <code>bool short_enabled_flag = 13;</code>
     * @param bool $var
     * @return $this
     */
    public function setShortEnabledFlag($var)
    {
        GPBUtil::checkBool($var);
        $this->short_enabled_flag = $var;

        return $this;
    }

    /**
     *Название инструмента.
     *
     * Generated from protobuf field <code>string name = 14;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     *Название инструмента.
     *
     * Generated from protobuf field <code>string name = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     *Торговая площадка.
     *
     * Generated from protobuf field <code>string exchange = 15;</code>
     * @return string
     */
    public function getExchange()
    {
        return $this->exchange;
    }

    /**
     *Торговая площадка.
     *
     * Generated from protobuf field <code>string exchange = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setExchange($var)
    {
        GPBUtil::checkString($var, True);
        $this->exchange = $var;

        return $this;
    }

    /**
     *Код страны риска, т.е. страны, в которой компания ведёт основной бизнес.
     *
     * Generated from protobuf field <code>string country_of_risk = 16;</code>
     * @return string
     */
    public function getCountryOfRisk()
    {
        return $this->country_of_risk;
    }

    /**
     *Код страны риска, т.е. страны, в которой компания ведёт основной бизнес.
     *
     * Generated from protobuf field <code>string country_of_risk = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setCountryOfRisk($var)
    {
        GPBUtil::checkString($var, True);
        $this->country_of_risk = $var;

        return $this;
    }

    /**
     *Наименование страны риска, т.е. страны, в которой компания ведёт основной бизнес.
     *
     * Generated from protobuf field <code>string country_of_risk_name = 17;</code>
     * @return string
     */
    public function getCountryOfRiskName()
    {
        return $this->country_of_risk_name;
    }

    /**
     *Наименование страны риска, т.е. страны, в которой компания ведёт основной бизнес.
     *
     * Generated from protobuf field <code>string country_of_risk_name = 17;</code>
     * @param string $var
     * @return $this
     */
    public function setCountryOfRiskName($var)
    {
        GPBUtil::checkString($var, True);
        $this->country_of_risk_name = $var;

        return $this;
    }

    /**
     *Тип инструмента.
     *
     * Generated from protobuf field <code>string instrument_type = 18;</code>
     * @return string
     */
    public function getInstrumentType()
    {
        return $this->instrument_type;
    }

    /**
     *Тип инструмента.
     *
     * Generated from protobuf field <code>string instrument_type = 18;</code>
     * @param string $var
     * @return $this
     */
    public function setInstrumentType($var)
    {
        GPBUtil::checkString($var, True);
        $this->instrument_type = $var;

        return $this;
    }

    /**
     *Текущий режим торгов инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SecurityTradingStatus trading_status = 19;</code>
     * @return int
     */
    public function getTradingStatus()
    {
        return $this->trading_status;
    }

    /**
     *Текущий режим торгов инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SecurityTradingStatus trading_status = 19;</code>
     * @param int $var
     * @return $this
     */
    public function setTradingStatus($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\SecurityTradingStatus::class);
        $this->trading_status = $var;

        return $this;
    }

    /**
     *Признак внебиржевой ценной бумаги.
     *
     * Generated from protobuf field <code>bool otc_flag = 20;</code>
     * @return bool
     */
    public function getOtcFlag()
    {
        return $this->otc_flag;
    }

    /**
     *Признак внебиржевой ценной бумаги.
     *
     * Generated from protobuf field <code>bool otc_flag = 20;</code>
     * @param bool $var
     * @return $this
     */
    public function setOtcFlag($var)
    {
        GPBUtil::checkBool($var);
        $this->otc_flag = $var;

        return $this;
    }

    /**
     *Признак доступности для покупки.
     *
     * Generated from protobuf field <code>bool buy_available_flag = 21;</code>
     * @return bool
     */
    public function getBuyAvailableFlag()
    {
        return $this->buy_available_flag;
    }

    /**
     *Признак доступности для покупки.
     *
     * Generated from protobuf field <code>bool buy_available_flag = 21;</code>
     * @param bool $var
     * @return $this
     */
    public function setBuyAvailableFlag($var)
    {
        GPBUtil::checkBool($var);
        $this->buy_available_flag = $var;

        return $this;
    }

    /**
     *Признак доступности для продажи.
     *
     * Generated from protobuf field <code>bool sell_available_flag = 22;</code>
     * @return bool
     */
    public function getSellAvailableFlag()
    {
        return $this->sell_available_flag;
    }

    /**
     *Признак доступности для продажи.
     *
     * Generated from protobuf field <code>bool sell_available_flag = 22;</code>
     * @param bool $var
     * @return $this
     */
    public function setSellAvailableFlag($var)
    {
        GPBUtil::checkBool($var);
        $this->sell_available_flag = $var;

        return $this;
    }

    /**
     *Шаг цены.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation min_price_increment = 23;</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getMinPriceIncrement()
    {
        return $this->min_price_increment;
    }

    public function hasMinPriceIncrement()
    {
        return isset($this->min_price_increment);
    }

    public function clearMinPriceIncrement()
    {
        unset($this->min_price_increment);
    }

    /**
     *Шаг цены.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation min_price_increment = 23;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setMinPriceIncrement($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->min_price_increment = $var;

        return $this;
    }

    /**
     *Признак доступности торгов через API.
     *
     * Generated from protobuf field <code>bool api_trade_available_flag = 24;</code>
     * @return bool
     */
    public function getApiTradeAvailableFlag()
    {
        return $this->api_trade_available_flag;
    }

    /**
     *Признак доступности торгов через API.
     *
     * Generated from protobuf field <code>bool api_trade_available_flag = 24;</code>
     * @param bool $var
     * @return $this
     */
    public function setApiTradeAvailableFlag($var)
    {
        GPBUtil::checkBool($var);
        $this->api_trade_available_flag = $var;

        return $this;
    }

    /**
     *Уникальный идентификатор инструмента.
     *
     * Generated from protobuf field <code>string uid = 25;</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     *Уникальный идентификатор инструмента.
     *
     * Generated from protobuf field <code>string uid = 25;</code>
     * @param string $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uid = $var;

        return $this;
    }

    /**
     *Реальная площадка исполнения расчётов.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.RealExchange real_exchange = 26;</code>
     * @return int
     */
    public function getRealExchange()
    {
        return $this->real_exchange;
    }

    /**
     *Реальная площадка исполнения расчётов.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.RealExchange real_exchange = 26;</code>
     * @param int $var
     * @return $this
     */
    public function setRealExchange($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\RealExchange::class);
        $this->real_exchange = $var;

        return $this;
    }

}

