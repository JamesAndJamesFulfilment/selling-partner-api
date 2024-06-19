<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\ResponseGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\EasyShipV20220323\Responses;

use SellingPartnerApi\Response;

final class Packages extends Response
{
    protected static array $complexArrayTypes = ['packages' => [Package::class]];

    /**
     * @param  Package[]  $packages  A list of packages.
     */
    public function __construct(
        public readonly array $packages,
    ) {}
}
