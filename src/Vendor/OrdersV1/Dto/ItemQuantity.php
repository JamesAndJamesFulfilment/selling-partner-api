<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\OrdersV1\Dto;

use SellingPartnerApi\Dto;

final class ItemQuantity extends Dto
{
    /**
     * @param  ?int  $amount  Acknowledged quantity. This value should not be zero.
     * @param  ?string  $unitOfMeasure  Unit of measure for the acknowledged quantity.
     * @param  ?int  $unitSize  The case size, in the event that we ordered using cases.
     */
    public function __construct(
        public readonly ?int $amount = null,
        public readonly ?string $unitOfMeasure = null,
        public readonly ?int $unitSize = null,
    ) {}
}
