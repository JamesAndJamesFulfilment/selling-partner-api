<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class ShipmentTransportationConfiguration extends Dto
{
    protected static array $complexArrayTypes = ['pallets' => [PalletInput::class]];

    /**
     * @param  WindowInput  $readyToShipWindow  Contains only a starting DateTime.
     * @param  string  $shipmentId  Identifier of a shipment. A shipment contains the boxes and units being inbounded.
     * @param  ?ContactInformation  $contactInformation  The seller's contact information.
     * @param  ?FreightInformation  $freightInformation  Freight information describes the skus being transported. Freight carrier options and quotes will only be returned if the freight information is provided.
     * @param  PalletInput[]|null  $pallets  List of pallet configuration inputs.
     */
    public function __construct(
        public readonly WindowInput $readyToShipWindow,
        public readonly string $shipmentId,
        public readonly ?ContactInformation $contactInformation = null,
        public readonly ?FreightInformation $freightInformation = null,
        public readonly ?array $pallets = null,
    ) {}
}
