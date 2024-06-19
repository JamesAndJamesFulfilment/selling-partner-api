<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use SellingPartnerApi\Dto;

final class ChargeRefundEvent extends Dto
{
    protected static array $attributeMap = [
        'postedDate' => 'PostedDate',
        'reasonCode' => 'ReasonCode',
        'reasonCodeDescription' => 'ReasonCodeDescription',
        'chargeRefundTransactions' => 'ChargeRefundTransactions',
    ];

    protected static array $complexArrayTypes = ['chargeRefundTransactions' => [ChargeRefundTransaction::class]];

    /**
     * @param  ?\DateTimeInterface  $postedDate
     * @param  ?string  $reasonCode  The reason given for a charge refund.
     *
     * Example: `SubscriptionFeeCorrection`
     * @param  ?string  $reasonCodeDescription  A description of the Reason Code.
     *
     * Example: `SubscriptionFeeCorrection`
     * @param  ChargeRefundTransaction[]|null  $chargeRefundTransactions  A list of `ChargeRefund` transactions
     */
    public function __construct(
        public readonly ?\DateTimeInterface $postedDate = null,
        public readonly ?string $reasonCode = null,
        public readonly ?string $reasonCodeDescription = null,
        public readonly ?array $chargeRefundTransactions = null,
    ) {}
}
