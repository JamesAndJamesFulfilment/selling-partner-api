<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use SellingPartnerApi\Dto;

final class RetrieveShippingLabelRequest extends Dto
{
    /**
     * @param  LabelSpecification  $labelSpecification  The label specification info.
     */
    public function __construct(
        public readonly LabelSpecification $labelSpecification,
    ) {}
}
