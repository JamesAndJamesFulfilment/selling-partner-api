<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\ResponseGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\Item;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\Pagination;

final class ListPackingGroupItemsResponse extends Response
{
    protected static array $complexArrayTypes = ['items' => [Item::class]];

    /**
     * @param  Item[]  $items  Provides the information about the list of items in the packing group.
     * @param  ?Pagination  $pagination  Contains tokens to fetch from a certain page.
     */
    public function __construct(
        public readonly array $items,
        public readonly ?Pagination $pagination = null,
    ) {}
}
