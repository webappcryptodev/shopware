<?php

namespace Kiener\MolliePayments\Handler\Method;

use Kiener\MolliePayments\Handler\PaymentHandler;
use Mollie\Api\Types\PaymentMethod;
use Shopware\Core\Checkout\Customer\CustomerEntity;
use Shopware\Core\Checkout\Order\OrderEntity;
use Shopware\Core\System\Locale\LocaleEntity;
use Shopware\Core\System\SalesChannel\SalesChannelContext;

class IngHomePayPayment extends PaymentHandler
{
    public const PAYMENT_METHOD_NAME = PaymentMethod::INGHOMEPAY;
    public const PAYMENT_METHOD_DESCRIPTION = 'ING Home\'Pay';

    /** @var string */
    protected $paymentMethod = self::PAYMENT_METHOD_NAME;

    public function processPaymentMethodSpecificParameters(
        array $orderData,
        OrderEntity $orderEntity,
        SalesChannelContext $salesChannelContext,
        CustomerEntity $customer
    ): array
    {
        return $orderData;
    }
}
