<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: instruments.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Данные по акции.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.ShareResponse</code>
 */
class ShareResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Информация об акции.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Share instrument = 1;</code>
     */
    protected $instrument = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Tinkoff\Invest\V1\Share $instrument
     *           Информация об акции.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Instruments::initOnce();
        parent::__construct($data);
    }

    /**
     * Информация об акции.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Share instrument = 1;</code>
     * @return \Tinkoff\Invest\V1\Share|null
     */
    public function getInstrument()
    {
        return $this->instrument;
    }

    public function hasInstrument()
    {
        return isset($this->instrument);
    }

    public function clearInstrument()
    {
        unset($this->instrument);
    }

    /**
     * Информация об акции.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Share instrument = 1;</code>
     * @param \Tinkoff\Invest\V1\Share $var
     * @return $this
     */
    public function setInstrument($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Share::class);
        $this->instrument = $var;

        return $this;
    }

}

