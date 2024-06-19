<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Dto;

use SellingPartnerApi\Dto;

final class FeaturedOffer extends Dto
{
    /**
     * @param  OfferIdentifier  $offerIdentifier  Identifies an offer from a particular seller on an ASIN.
     * @param  ?string  $condition  The condition of the item.
     * @param  ?Price  $price  Schema for item's price information, including listing price, shipping price, and Amazon points.
     */
    public function __construct(
        public readonly OfferIdentifier $offerIdentifier,
        public readonly ?string $condition = null,
        public readonly ?Price $price = null,
    ) {}
}
