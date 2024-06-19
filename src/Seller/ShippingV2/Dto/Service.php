<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class Service extends Dto
{
    /**
     * @param  string  $id  An identifier for the shipping service.
     * @param  string  $name  The name of the shipping service.
     */
    public function __construct(
        public readonly string $id,
        public readonly string $name,
    ) {}
}
