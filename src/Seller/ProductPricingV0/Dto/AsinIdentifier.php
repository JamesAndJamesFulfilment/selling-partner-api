<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use SellingPartnerApi\Dto;

final class AsinIdentifier extends Dto
{
    protected static array $attributeMap = ['marketplaceId' => 'MarketplaceId', 'asin' => 'ASIN'];

    /**
     * @param  string  $marketplaceId  A marketplace identifier.
     * @param  string  $asin  The Amazon Standard Identification Number (ASIN) of the item.
     */
    public function __construct(
        public readonly string $marketplaceId,
        public readonly string $asin,
    ) {}
}
