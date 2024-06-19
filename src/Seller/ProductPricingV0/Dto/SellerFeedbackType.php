<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use SellingPartnerApi\Dto;

final class SellerFeedbackType extends Dto
{
    protected static array $attributeMap = [
        'feedbackCount' => 'FeedbackCount',
        'sellerPositiveFeedbackRating' => 'SellerPositiveFeedbackRating',
    ];

    /**
     * @param  int  $feedbackCount  The number of ratings received about the seller.
     * @param  ?float  $sellerPositiveFeedbackRating  The percentage of positive feedback for the seller in the past 365 days.
     */
    public function __construct(
        public readonly int $feedbackCount,
        public readonly ?float $sellerPositiveFeedbackRating = null,
    ) {}
}
