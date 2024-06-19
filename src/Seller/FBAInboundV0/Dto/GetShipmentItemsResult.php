<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use SellingPartnerApi\Dto;

final class GetShipmentItemsResult extends Dto
{
    protected static array $attributeMap = ['itemData' => 'ItemData', 'nextToken' => 'NextToken'];

    protected static array $complexArrayTypes = ['itemData' => [InboundShipmentItem::class]];

    /**
     * @param  InboundShipmentItem[]|null  $itemData  A list of inbound shipment item information.
     * @param  ?string  $nextToken  When present and not empty, pass this string token in the next request to return the next response page.
     */
    public function __construct(
        public readonly ?array $itemData = null,
        public readonly ?string $nextToken = null,
    ) {}
}
