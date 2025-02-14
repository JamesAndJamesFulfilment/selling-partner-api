<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\EasyShipV20220323\Dto;

use SellingPartnerApi\Dto;

final class ListHandoverSlotsRequest extends Dto
{
    /**
     * @param  string  $marketplaceId  A string of up to 255 characters.
     * @param  string  $amazonOrderId  An Amazon-defined order identifier. Identifies the order that the seller wants to deliver using Amazon Easy Ship.
     * @param  Dimensions  $packageDimensions  The dimensions of the scheduled package.
     * @param  Weight  $packageWeight  The weight of the scheduled package
     */
    public function __construct(
        public string $marketplaceId,
        public string $amazonOrderId,
        public Dimensions $packageDimensions,
        public Weight $packageWeight,
    ) {}
}
