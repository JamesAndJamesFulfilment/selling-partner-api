<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\SupplySourcesV20200701\Dto;

use SellingPartnerApi\Dto;

final class PickupChannel extends Dto
{
    /**
     * @param  ?Duration  $inventoryHoldPeriod  The duration of time.
     * @param  ?bool  $isSupported
     * @param  ?OperationalConfiguration  $operationalConfiguration  The operational configuration of `supplySources`.
     * @param  ?InStorePickupConfiguration  $inStorePickupConfiguration  The in-store pickup configuration of a supply source.
     * @param  ?CurbsidePickupConfiguration  $curbsidePickupConfiguration  The curbside pickup configuration of a supply source.
     */
    public function __construct(
        public readonly ?Duration $inventoryHoldPeriod = null,
        public readonly ?bool $isSupported = null,
        public readonly ?OperationalConfiguration $operationalConfiguration = null,
        public readonly ?InStorePickupConfiguration $inStorePickupConfiguration = null,
        public readonly ?CurbsidePickupConfiguration $curbsidePickupConfiguration = null,
    ) {}
}
