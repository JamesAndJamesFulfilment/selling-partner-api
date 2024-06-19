<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\SupplySourcesV20200701\Dto;

use SellingPartnerApi\Dto;

final class UpdateSupplySourceRequest extends Dto
{
    /**
     * @param  ?string  $alias  The custom alias for this supply source
     * @param  ?SupplySourceConfiguration  $configuration  Includes configuration and timezone of a supply source.
     * @param  ?SupplySourceCapabilities  $capabilities  The capabilities of a supply source.
     */
    public function __construct(
        public readonly ?string $alias = null,
        public readonly ?SupplySourceConfiguration $configuration = null,
        public readonly ?SupplySourceCapabilities $capabilities = null,
    ) {}
}
