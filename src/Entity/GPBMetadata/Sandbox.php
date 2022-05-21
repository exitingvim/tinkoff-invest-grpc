<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sandbox.proto

namespace GPBMetadata;

class Sandbox
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Common::initOnce();
        \GPBMetadata\Orders::initOnce();
        \GPBMetadata\Operations::initOnce();
        \GPBMetadata\Users::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
sandbox.proto%tinkoff.public.invest.api.contract.v1orders.protooperations.protousers.proto"
OpenSandboxAccountRequest"0
OpenSandboxAccountResponse

account_id (	"0
CloseSandboxAccountRequest

account_id (	"
CloseSandboxAccountResponse"l
SandboxPayInRequest

account_id (	A
amount (21.tinkoff.public.invest.api.contract.v1.MoneyValue"Z
SandboxPayInResponseB
balance (21.tinkoff.public.invest.api.contract.v1.MoneyValue2�
SandboxService�
OpenSandboxAccount@.tinkoff.public.invest.api.contract.v1.OpenSandboxAccountRequestA.tinkoff.public.invest.api.contract.v1.OpenSandboxAccountResponse�
GetSandboxAccounts9.tinkoff.public.invest.api.contract.v1.GetAccountsRequest:.tinkoff.public.invest.api.contract.v1.GetAccountsResponse�
CloseSandboxAccountA.tinkoff.public.invest.api.contract.v1.CloseSandboxAccountRequestB.tinkoff.public.invest.api.contract.v1.CloseSandboxAccountResponse�
PostSandboxOrder7.tinkoff.public.invest.api.contract.v1.PostOrderRequest8.tinkoff.public.invest.api.contract.v1.PostOrderResponse�
GetSandboxOrders7.tinkoff.public.invest.api.contract.v1.GetOrdersRequest8.tinkoff.public.invest.api.contract.v1.GetOrdersResponse�
CancelSandboxOrder9.tinkoff.public.invest.api.contract.v1.CancelOrderRequest:.tinkoff.public.invest.api.contract.v1.CancelOrderResponse�
GetSandboxOrderState;.tinkoff.public.invest.api.contract.v1.GetOrderStateRequest1.tinkoff.public.invest.api.contract.v1.OrderState�
GetSandboxPositions7.tinkoff.public.invest.api.contract.v1.PositionsRequest8.tinkoff.public.invest.api.contract.v1.PositionsResponse�
GetSandboxOperations8.tinkoff.public.invest.api.contract.v1.OperationsRequest9.tinkoff.public.invest.api.contract.v1.OperationsResponse�
GetSandboxPortfolio7.tinkoff.public.invest.api.contract.v1.PortfolioRequest8.tinkoff.public.invest.api.contract.v1.PortfolioResponse�
SandboxPayIn:.tinkoff.public.invest.api.contract.v1.SandboxPayInRequest;.tinkoff.public.invest.api.contract.v1.SandboxPayInResponseBa
ru.tinkoff.piapi.contract.v1PZ./;investapi�TIAPI�Tinkoff.InvestApi.V1�Tinkoff\\Invest\\V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

