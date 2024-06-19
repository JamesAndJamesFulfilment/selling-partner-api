<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\SupplySourcesV20200701\Dto;

use SellingPartnerApi\Dto;

final class ParkingConfiguration extends Dto
{
    /**
     * @param  ?string  $parkingCostType  The parking cost type.
     * @param  ?string  $parkingSpotIdentificationType  The type of parking spot identification.
     * @param  ?int  $numberOfParkingSpots  An unsigned integer that can be only positive or zero.
     */
    public function __construct(
        public readonly ?string $parkingCostType = null,
        public readonly ?string $parkingSpotIdentificationType = null,
        public readonly ?int $numberOfParkingSpots = null,
    ) {}
}
