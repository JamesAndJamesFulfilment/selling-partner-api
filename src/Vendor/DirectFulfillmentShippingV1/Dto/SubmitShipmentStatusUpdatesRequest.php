<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Dto;

use SellingPartnerApi\Dto;

final class SubmitShipmentStatusUpdatesRequest extends Dto
{
    protected static array $complexArrayTypes = ['shipmentStatusUpdates' => [ShipmentStatusUpdate::class]];

    /**
     * @param  ShipmentStatusUpdate[]|null  $shipmentStatusUpdates
     */
    public function __construct(
        public readonly ?array $shipmentStatusUpdates = null,
    ) {}
}
