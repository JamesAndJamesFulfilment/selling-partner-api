<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\AmazonWarehousingAndDistributionV20240509\Dto;

use SellingPartnerApi\Dto;

final class DistributionPackageContents extends Dto
{
    protected static array $complexArrayTypes = [
        'packages' => [DistributionPackageQuantity::class],
        'products' => [ProductQuantity::class],
    ];

    /**
     * @param  DistributionPackageQuantity[]|null  $packages  This is required only when `DistributionPackageType=PALLET`.
     * @param  ProductQuantity[]|null  $products  This is required only when `DistributionPackageType=CASE`.
     */
    public function __construct(
        public readonly ?array $packages = null,
        public readonly ?array $products = null,
    ) {}
}
