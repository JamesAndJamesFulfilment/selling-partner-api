<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use SellingPartnerApi\Dto;

final class ImportDetails extends Dto
{
    /**
     * @param  ?string  $methodOfPayment  This is used for import purchase orders only. If the recipient requests, this field will contain the shipment method of payment.
     * @param  ?string  $sealNumber  The container's seal number.
     * @param  ?Route  $route  This is used only for direct import shipment confirmations.
     * @param  ?string  $importContainers  Types and numbers of container(s) for import purchase orders. Can be a comma-separated list if shipment has multiple containers.
     * @param  ?Weight  $billableWeight  The weight of the shipment.
     * @param  ?\DateTimeInterface  $estimatedShipByDate  Date on which the shipment is expected to be shipped. This value should not be in the past and not more than 60 days out in the future.
     * @param  ?string  $handlingInstructions  Identification of the instructions on how specified item/carton/pallet should be handled.
     */
    public function __construct(
        public readonly ?string $methodOfPayment = null,
        public readonly ?string $sealNumber = null,
        public readonly ?Route $route = null,
        public readonly ?string $importContainers = null,
        public readonly ?Weight $billableWeight = null,
        public readonly ?\DateTimeInterface $estimatedShipByDate = null,
        public readonly ?string $handlingInstructions = null,
    ) {}
}
