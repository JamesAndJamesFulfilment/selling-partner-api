<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\ResponseGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\AmazonWarehousingAndDistributionV20240509\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\AmazonWarehousingAndDistributionV20240509\Dto\InboundShipmentSummary;

final class ShipmentListing extends Response
{
    protected static array $complexArrayTypes = ['shipments' => [InboundShipmentSummary::class]];

    /**
     * @param  ?string  $nextToken  Token to retrieve the next set of paginated results.
     * @param  InboundShipmentSummary[]|null  $shipments  List of inbound shipment summaries.
     */
    public function __construct(
        public readonly ?string $nextToken = null,
        public readonly ?array $shipments = null,
    ) {}
}
