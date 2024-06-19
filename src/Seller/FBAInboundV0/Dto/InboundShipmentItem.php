<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use SellingPartnerApi\Dto;

final class InboundShipmentItem extends Dto
{
    protected static array $attributeMap = [
        'sellerSku' => 'SellerSKU',
        'quantityShipped' => 'QuantityShipped',
        'shipmentId' => 'ShipmentId',
        'fulfillmentNetworkSku' => 'FulfillmentNetworkSKU',
        'quantityReceived' => 'QuantityReceived',
        'quantityInCase' => 'QuantityInCase',
        'releaseDate' => 'ReleaseDate',
        'prepDetailsList' => 'PrepDetailsList',
    ];

    protected static array $complexArrayTypes = ['prepDetailsList' => [PrepDetails::class]];

    /**
     * @param  string  $sellerSku  The seller SKU of the item.
     * @param  int  $quantityShipped  The item quantity.
     * @param  ?string  $shipmentId  A shipment identifier originally returned by the createInboundShipmentPlan operation.
     * @param  ?string  $fulfillmentNetworkSku  Amazon's fulfillment network SKU of the item.
     * @param  ?int  $quantityReceived  The item quantity.
     * @param  ?int  $quantityInCase  The item quantity.
     * @param  ?\DateTimeInterface  $releaseDate  Type containing date in string format
     * @param  PrepDetails[]|null  $prepDetailsList  A list of preparation instructions and who is responsible for that preparation.
     */
    public function __construct(
        public readonly string $sellerSku,
        public readonly int $quantityShipped,
        public readonly ?string $shipmentId = null,
        public readonly ?string $fulfillmentNetworkSku = null,
        public readonly ?int $quantityReceived = null,
        public readonly ?int $quantityInCase = null,
        public readonly ?\DateTimeInterface $releaseDate = null,
        public readonly ?array $prepDetailsList = null,
    ) {}
}
