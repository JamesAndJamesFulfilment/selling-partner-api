<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\CatalogItemsV20220401\Dto;

use SellingPartnerApi\Dto;

final class ItemBrowseClassificationsByMarketplace extends Dto
{
    protected static array $complexArrayTypes = ['classifications' => [ItemBrowseClassification::class]];

    /**
     * @param  string  $marketplaceId  Amazon marketplace identifier.
     * @param  ItemBrowseClassification[]|null  $classifications  Classifications (browse nodes) associated with the item in the Amazon catalog for the indicated Amazon marketplace.
     */
    public function __construct(
        public readonly string $marketplaceId,
        public readonly ?array $classifications = null,
    ) {}
}
