<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Tinkoff\Public\Invest\Api\Contract\V1;

/**
 */
class UsersServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Метод получения счетов пользователя.
     * @param \Tinkoff\Public\Invest\Api\Contract\V1\GetAccountsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetAccounts(\Tinkoff\Public\Invest\Api\Contract\V1\GetAccountsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/tinkoff.public.invest.api.contract.v1.UsersService/GetAccounts',
        $argument,
        ['\Tinkoff\Public\Invest\Api\Contract\V1\GetAccountsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Расчёт маржинальных показателей по счёту.
     * @param \Tinkoff\Public\Invest\Api\Contract\V1\GetMarginAttributesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetMarginAttributes(\Tinkoff\Public\Invest\Api\Contract\V1\GetMarginAttributesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/tinkoff.public.invest.api.contract.v1.UsersService/GetMarginAttributes',
        $argument,
        ['\Tinkoff\Public\Invest\Api\Contract\V1\GetMarginAttributesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Запрос тарифа пользователя.
     * @param \Tinkoff\Public\Invest\Api\Contract\V1\GetUserTariffRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetUserTariff(\Tinkoff\Public\Invest\Api\Contract\V1\GetUserTariffRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/tinkoff.public.invest.api.contract.v1.UsersService/GetUserTariff',
        $argument,
        ['\Tinkoff\Public\Invest\Api\Contract\V1\GetUserTariffResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Метод получения информации о пользователе.
     * @param \Tinkoff\Public\Invest\Api\Contract\V1\GetInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetInfo(\Tinkoff\Public\Invest\Api\Contract\V1\GetInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/tinkoff.public.invest.api.contract.v1.UsersService/GetInfo',
        $argument,
        ['\Tinkoff\Public\Invest\Api\Contract\V1\GetInfoResponse', 'decode'],
        $metadata, $options);
    }

}
