<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ListingsItemsV20200901\Dto;

use SellingPartnerApi\Dto;

final class ListingsItemPutRequest extends Dto
{
    /**
     * @param  string  $productType  The Amazon product type of the listings item.
     * @param  mixed[]  $attributes  JSON object containing structured listings item attribute data keyed by attribute name.
     * @param  ?string  $requirements  The name of the requirements set for the provided data.
     */
    public function __construct(
        public readonly string $productType,
        public readonly array $attributes,
        public readonly ?string $requirements = null,
    ) {}
}
