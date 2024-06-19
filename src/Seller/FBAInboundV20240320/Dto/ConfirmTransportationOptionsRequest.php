<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class ConfirmTransportationOptionsRequest extends Dto
{
    protected static array $complexArrayTypes = ['transportationSelections' => [TransportationSelection::class]];

    /**
     * @param  TransportationSelection[]  $transportationSelections  Information needed to confirm one of the available transportation options.
     */
    public function __construct(
        public readonly array $transportationSelections,
    ) {}
}
