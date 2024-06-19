<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\AmazonWarehousingAndDistributionV20240509\Dto;

use SellingPartnerApi\Dto;

final class MeasurementData extends Dto
{
    /**
     * @param  PackageWeight  $weight  Represents the weight of the package with a unit of measurement.
     * @param  ?PackageDimensions  $dimensions  Dimensions of the package.
     * @param  ?PackageVolume  $volume  Represents the volume of the package with a unit of measurement.
     */
    public function __construct(
        public readonly PackageWeight $weight,
        public readonly ?PackageDimensions $dimensions = null,
        public readonly ?PackageVolume $volume = null,
    ) {}
}
