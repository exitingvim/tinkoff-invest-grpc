<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: instruments.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Объект передачи информации о фьючерсе.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.Future</code>
 */
class Future extends \Google\Protobuf\Internal\Message
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
     *Класс-код (секция торгов).
     *
     * Generated from protobuf field <code>string class_code = 3;</code>
     */
    protected $class_code = '';
    /**
     *Лотность инструмента. Возможно совершение операций только на количества ценной бумаги, кратные параметру *lot*. Подробнее: [лот](https://tinkoff.github.io/investAPI/glossary#lot)
     *
     * Generated from protobuf field <code>int32 lot = 4;</code>
     */
    protected $lot = 0;
    /**
     *Валюта расчётов.
     *
     * Generated from protobuf field <code>string currency = 5;</code>
     */
    protected $currency = '';
    /**
     *Коэффициент ставки риска длинной позиции по клиенту.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation klong = 6;</code>
     */
    protected $klong = null;
    /**
     *Коэффициент ставки риска короткой позиции по клиенту.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation kshort = 7;</code>
     */
    protected $kshort = null;
    /**
     *Ставка риска минимальной маржи в лонг. Подробнее: [ставка риска в лонг](https://help.tinkoff.ru/margin-trade/long/risk-rate/)
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation dlong = 8;</code>
     */
    protected $dlong = null;
    /**
     *Ставка риска минимальной маржи в шорт. Подробнее: [ставка риска в шорт](https://help.tinkoff.ru/margin-trade/short/risk-rate/)
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation dshort = 9;</code>
     */
    protected $dshort = null;
    /**
     *Ставка риска начальной маржи в лонг. Подробнее: [ставка риска в лонг](https://help.tinkoff.ru/margin-trade/long/risk-rate/)
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation dlong_min = 10;</code>
     */
    protected $dlong_min = null;
    /**
     *Ставка риска начальной маржи в шорт. Подробнее: [ставка риска в шорт](https://help.tinkoff.ru/margin-trade/short/risk-rate/)
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation dshort_min = 11;</code>
     */
    protected $dshort_min = null;
    /**
     *Признак доступности для операций шорт.
     *
     * Generated from protobuf field <code>bool short_enabled_flag = 12;</code>
     */
    protected $short_enabled_flag = false;
    /**
     *Название инструмента.
     *
     * Generated from protobuf field <code>string name = 13;</code>
     */
    protected $name = '';
    /**
     *Торговая площадка.
     *
     * Generated from protobuf field <code>string exchange = 14;</code>
     */
    protected $exchange = '';
    /**
     *Дата начала обращения контракта в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp first_trade_date = 15;</code>
     */
    protected $first_trade_date = null;
    /**
     *Дата в часовом поясе UTC, до которой возможно проведение операций с фьючерсом.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_trade_date = 16;</code>
     */
    protected $last_trade_date = null;
    /**
     *Тип фьючерса. Возможные значения: </br>**physical_delivery** — физические поставки; </br>**cash_settlement** — денежный эквивалент.
     *
     * Generated from protobuf field <code>string futures_type = 17;</code>
     */
    protected $futures_type = '';
    /**
     *Тип актива. Возможные значения: </br>**commodity** — товар; </br>**currency** — валюта; </br>**security** — ценная бумага; </br>**index** — индекс.
     *
     * Generated from protobuf field <code>string asset_type = 18;</code>
     */
    protected $asset_type = '';
    /**
     *Основной актив.
     *
     * Generated from protobuf field <code>string basic_asset = 19;</code>
     */
    protected $basic_asset = '';
    /**
     *Размер основного актива.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation basic_asset_size = 20;</code>
     */
    protected $basic_asset_size = null;
    /**
     *Код страны риска, т.е. страны, в которой компания ведёт основной бизнес.
     *
     * Generated from protobuf field <code>string country_of_risk = 21;</code>
     */
    protected $country_of_risk = '';
    /**
     *Наименование страны риска, т.е. страны, в которой компания ведёт основной бизнес.
     *
     * Generated from protobuf field <code>string country_of_risk_name = 22;</code>
     */
    protected $country_of_risk_name = '';
    /**
     *Сектор экономики.
     *
     * Generated from protobuf field <code>string sector = 23;</code>
     */
    protected $sector = '';
    /**
     *Дата истечения срока в часов поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiration_date = 24;</code>
     */
    protected $expiration_date = null;
    /**
     *Текущий режим торгов инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SecurityTradingStatus trading_status = 25;</code>
     */
    protected $trading_status = 0;
    /**
     *Признак внебиржевой ценной бумаги.
     *
     * Generated from protobuf field <code>bool otc_flag = 26;</code>
     */
    protected $otc_flag = false;
    /**
     *Признак доступности для покупки.
     *
     * Generated from protobuf field <code>bool buy_available_flag = 27;</code>
     */
    protected $buy_available_flag = false;
    /**
     *Признак доступности для продажи.
     *
     * Generated from protobuf field <code>bool sell_available_flag = 28;</code>
     */
    protected $sell_available_flag = false;
    /**
     *Шаг цены.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation min_price_increment = 29;</code>
     */
    protected $min_price_increment = null;
    /**
     *Признак доступности торгов через API.
     *
     * Generated from protobuf field <code>bool api_trade_available_flag = 30;</code>
     */
    protected $api_trade_available_flag = false;
    /**
     *Уникальный идентификатор инструмента.
     *
     * Generated from protobuf field <code>string uid = 31;</code>
     */
    protected $uid = '';
    /**
     *Реальная площадка исполнения расчётов.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.RealExchange real_exchange = 32;</code>
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
     *          Класс-код (секция торгов).
     *     @type int $lot
     *          Лотность инструмента. Возможно совершение операций только на количества ценной бумаги, кратные параметру *lot*. Подробнее: [лот](https://tinkoff.github.io/investAPI/glossary#lot)
     *     @type string $currency
     *          Валюта расчётов.
     *     @type \Tinkoff\Invest\V1\Quotation $klong
     *          Коэффициент ставки риска длинной позиции по клиенту.
     *     @type \Tinkoff\Invest\V1\Quotation $kshort
     *          Коэффициент ставки риска короткой позиции по клиенту.
     *     @type \Tinkoff\Invest\V1\Quotation $dlong
     *          Ставка риска минимальной маржи в лонг. Подробнее: [ставка риска в лонг](https://help.tinkoff.ru/margin-trade/long/risk-rate/)
     *     @type \Tinkoff\Invest\V1\Quotation $dshort
     *          Ставка риска минимальной маржи в шорт. Подробнее: [ставка риска в шорт](https://help.tinkoff.ru/margin-trade/short/risk-rate/)
     *     @type \Tinkoff\Invest\V1\Quotation $dlong_min
     *          Ставка риска начальной маржи в лонг. Подробнее: [ставка риска в лонг](https://help.tinkoff.ru/margin-trade/long/risk-rate/)
     *     @type \Tinkoff\Invest\V1\Quotation $dshort_min
     *          Ставка риска начальной маржи в шорт. Подробнее: [ставка риска в шорт](https://help.tinkoff.ru/margin-trade/short/risk-rate/)
     *     @type bool $short_enabled_flag
     *          Признак доступности для операций шорт.
     *     @type string $name
     *          Название инструмента.
     *     @type string $exchange
     *          Торговая площадка.
     *     @type \Google\Protobuf\Timestamp $first_trade_date
     *          Дата начала обращения контракта в часовом поясе UTC.
     *     @type \Google\Protobuf\Timestamp $last_trade_date
     *          Дата в часовом поясе UTC, до которой возможно проведение операций с фьючерсом.
     *     @type string $futures_type
     *          Тип фьючерса. Возможные значения: </br>**physical_delivery** — физические поставки; </br>**cash_settlement** — денежный эквивалент.
     *     @type string $asset_type
     *          Тип актива. Возможные значения: </br>**commodity** — товар; </br>**currency** — валюта; </br>**security** — ценная бумага; </br>**index** — индекс.
     *     @type string $basic_asset
     *          Основной актив.
     *     @type \Tinkoff\Invest\V1\Quotation $basic_asset_size
     *          Размер основного актива.
     *     @type string $country_of_risk
     *          Код страны риска, т.е. страны, в которой компания ведёт основной бизнес.
     *     @type string $country_of_risk_name
     *          Наименование страны риска, т.е. страны, в которой компания ведёт основной бизнес.
     *     @type string $sector
     *          Сектор экономики.
     *     @type \Google\Protobuf\Timestamp $expiration_date
     *          Дата истечения срока в часов поясе UTC.
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
     *Класс-код (секция торгов).
     *
     * Generated from protobuf field <code>string class_code = 3;</code>
     * @return string
     */
    public function getClassCode()
    {
        return $this->class_code;
    }

    /**
     *Класс-код (секция торгов).
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
     *Лотность инструмента. Возможно совершение операций только на количества ценной бумаги, кратные параметру *lot*. Подробнее: [лот](https://tinkoff.github.io/investAPI/glossary#lot)
     *
     * Generated from protobuf field <code>int32 lot = 4;</code>
     * @return int
     */
    public function getLot()
    {
        return $this->lot;
    }

    /**
     *Лотность инструмента. Возможно совершение операций только на количества ценной бумаги, кратные параметру *lot*. Подробнее: [лот](https://tinkoff.github.io/investAPI/glossary#lot)
     *
     * Generated from protobuf field <code>int32 lot = 4;</code>
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
     * Generated from protobuf field <code>string currency = 5;</code>
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     *Валюта расчётов.
     *
     * Generated from protobuf field <code>string currency = 5;</code>
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
     *Коэффициент ставки риска длинной позиции по клиенту.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation klong = 6;</code>
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
     *Коэффициент ставки риска длинной позиции по клиенту.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation klong = 6;</code>
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
     *Коэффициент ставки риска короткой позиции по клиенту.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation kshort = 7;</code>
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
     *Коэффициент ставки риска короткой позиции по клиенту.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation kshort = 7;</code>
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
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation dlong = 8;</code>
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
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation dlong = 8;</code>
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
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation dshort = 9;</code>
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
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation dshort = 9;</code>
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
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation dlong_min = 10;</code>
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
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation dlong_min = 10;</code>
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
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation dshort_min = 11;</code>
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
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation dshort_min = 11;</code>
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
     *Признак доступности для операций шорт.
     *
     * Generated from protobuf field <code>bool short_enabled_flag = 12;</code>
     * @return bool
     */
    public function getShortEnabledFlag()
    {
        return $this->short_enabled_flag;
    }

    /**
     *Признак доступности для операций шорт.
     *
     * Generated from protobuf field <code>bool short_enabled_flag = 12;</code>
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
     * Generated from protobuf field <code>string name = 13;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     *Название инструмента.
     *
     * Generated from protobuf field <code>string name = 13;</code>
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
     * Generated from protobuf field <code>string exchange = 14;</code>
     * @return string
     */
    public function getExchange()
    {
        return $this->exchange;
    }

    /**
     *Торговая площадка.
     *
     * Generated from protobuf field <code>string exchange = 14;</code>
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
     *Дата начала обращения контракта в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp first_trade_date = 15;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getFirstTradeDate()
    {
        return $this->first_trade_date;
    }

    public function hasFirstTradeDate()
    {
        return isset($this->first_trade_date);
    }

    public function clearFirstTradeDate()
    {
        unset($this->first_trade_date);
    }

    /**
     *Дата начала обращения контракта в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp first_trade_date = 15;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setFirstTradeDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->first_trade_date = $var;

        return $this;
    }

    /**
     *Дата в часовом поясе UTC, до которой возможно проведение операций с фьючерсом.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_trade_date = 16;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLastTradeDate()
    {
        return $this->last_trade_date;
    }

    public function hasLastTradeDate()
    {
        return isset($this->last_trade_date);
    }

    public function clearLastTradeDate()
    {
        unset($this->last_trade_date);
    }

    /**
     *Дата в часовом поясе UTC, до которой возможно проведение операций с фьючерсом.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_trade_date = 16;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastTradeDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_trade_date = $var;

        return $this;
    }

    /**
     *Тип фьючерса. Возможные значения: </br>**physical_delivery** — физические поставки; </br>**cash_settlement** — денежный эквивалент.
     *
     * Generated from protobuf field <code>string futures_type = 17;</code>
     * @return string
     */
    public function getFuturesType()
    {
        return $this->futures_type;
    }

    /**
     *Тип фьючерса. Возможные значения: </br>**physical_delivery** — физические поставки; </br>**cash_settlement** — денежный эквивалент.
     *
     * Generated from protobuf field <code>string futures_type = 17;</code>
     * @param string $var
     * @return $this
     */
    public function setFuturesType($var)
    {
        GPBUtil::checkString($var, True);
        $this->futures_type = $var;

        return $this;
    }

    /**
     *Тип актива. Возможные значения: </br>**commodity** — товар; </br>**currency** — валюта; </br>**security** — ценная бумага; </br>**index** — индекс.
     *
     * Generated from protobuf field <code>string asset_type = 18;</code>
     * @return string
     */
    public function getAssetType()
    {
        return $this->asset_type;
    }

    /**
     *Тип актива. Возможные значения: </br>**commodity** — товар; </br>**currency** — валюта; </br>**security** — ценная бумага; </br>**index** — индекс.
     *
     * Generated from protobuf field <code>string asset_type = 18;</code>
     * @param string $var
     * @return $this
     */
    public function setAssetType($var)
    {
        GPBUtil::checkString($var, True);
        $this->asset_type = $var;

        return $this;
    }

    /**
     *Основной актив.
     *
     * Generated from protobuf field <code>string basic_asset = 19;</code>
     * @return string
     */
    public function getBasicAsset()
    {
        return $this->basic_asset;
    }

    /**
     *Основной актив.
     *
     * Generated from protobuf field <code>string basic_asset = 19;</code>
     * @param string $var
     * @return $this
     */
    public function setBasicAsset($var)
    {
        GPBUtil::checkString($var, True);
        $this->basic_asset = $var;

        return $this;
    }

    /**
     *Размер основного актива.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation basic_asset_size = 20;</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getBasicAssetSize()
    {
        return $this->basic_asset_size;
    }

    public function hasBasicAssetSize()
    {
        return isset($this->basic_asset_size);
    }

    public function clearBasicAssetSize()
    {
        unset($this->basic_asset_size);
    }

    /**
     *Размер основного актива.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation basic_asset_size = 20;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setBasicAssetSize($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->basic_asset_size = $var;

        return $this;
    }

    /**
     *Код страны риска, т.е. страны, в которой компания ведёт основной бизнес.
     *
     * Generated from protobuf field <code>string country_of_risk = 21;</code>
     * @return string
     */
    public function getCountryOfRisk()
    {
        return $this->country_of_risk;
    }

    /**
     *Код страны риска, т.е. страны, в которой компания ведёт основной бизнес.
     *
     * Generated from protobuf field <code>string country_of_risk = 21;</code>
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
     * Generated from protobuf field <code>string country_of_risk_name = 22;</code>
     * @return string
     */
    public function getCountryOfRiskName()
    {
        return $this->country_of_risk_name;
    }

    /**
     *Наименование страны риска, т.е. страны, в которой компания ведёт основной бизнес.
     *
     * Generated from protobuf field <code>string country_of_risk_name = 22;</code>
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
     *Сектор экономики.
     *
     * Generated from protobuf field <code>string sector = 23;</code>
     * @return string
     */
    public function getSector()
    {
        return $this->sector;
    }

    /**
     *Сектор экономики.
     *
     * Generated from protobuf field <code>string sector = 23;</code>
     * @param string $var
     * @return $this
     */
    public function setSector($var)
    {
        GPBUtil::checkString($var, True);
        $this->sector = $var;

        return $this;
    }

    /**
     *Дата истечения срока в часов поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiration_date = 24;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExpirationDate()
    {
        return $this->expiration_date;
    }

    public function hasExpirationDate()
    {
        return isset($this->expiration_date);
    }

    public function clearExpirationDate()
    {
        unset($this->expiration_date);
    }

    /**
     *Дата истечения срока в часов поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiration_date = 24;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpirationDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expiration_date = $var;

        return $this;
    }

    /**
     *Текущий режим торгов инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SecurityTradingStatus trading_status = 25;</code>
     * @return int
     */
    public function getTradingStatus()
    {
        return $this->trading_status;
    }

    /**
     *Текущий режим торгов инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SecurityTradingStatus trading_status = 25;</code>
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
     * Generated from protobuf field <code>bool otc_flag = 26;</code>
     * @return bool
     */
    public function getOtcFlag()
    {
        return $this->otc_flag;
    }

    /**
     *Признак внебиржевой ценной бумаги.
     *
     * Generated from protobuf field <code>bool otc_flag = 26;</code>
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
     * Generated from protobuf field <code>bool buy_available_flag = 27;</code>
     * @return bool
     */
    public function getBuyAvailableFlag()
    {
        return $this->buy_available_flag;
    }

    /**
     *Признак доступности для покупки.
     *
     * Generated from protobuf field <code>bool buy_available_flag = 27;</code>
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
     * Generated from protobuf field <code>bool sell_available_flag = 28;</code>
     * @return bool
     */
    public function getSellAvailableFlag()
    {
        return $this->sell_available_flag;
    }

    /**
     *Признак доступности для продажи.
     *
     * Generated from protobuf field <code>bool sell_available_flag = 28;</code>
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
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation min_price_increment = 29;</code>
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
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation min_price_increment = 29;</code>
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
     * Generated from protobuf field <code>bool api_trade_available_flag = 30;</code>
     * @return bool
     */
    public function getApiTradeAvailableFlag()
    {
        return $this->api_trade_available_flag;
    }

    /**
     *Признак доступности торгов через API.
     *
     * Generated from protobuf field <code>bool api_trade_available_flag = 30;</code>
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
     * Generated from protobuf field <code>string uid = 31;</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     *Уникальный идентификатор инструмента.
     *
     * Generated from protobuf field <code>string uid = 31;</code>
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
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.RealExchange real_exchange = 32;</code>
     * @return int
     */
    public function getRealExchange()
    {
        return $this->real_exchange;
    }

    /**
     *Реальная площадка исполнения расчётов.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.RealExchange real_exchange = 32;</code>
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

