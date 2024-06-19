<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use SellingPartnerApi\Dto;

final class FulfillmentTime extends Dto
{
    /**
     * @param  ?\DateTimeInterface  $startTime  The date, time in UTC of the fulfillment start time in ISO 8601 format.
     * @param  ?\DateTimeInterface  $endTime  The date, time in UTC of the fulfillment end time in ISO 8601 format.
     */
    public function __construct(
        public readonly ?\DateTimeInterface $startTime = null,
        public readonly ?\DateTimeInterface $endTime = null,
    ) {}
}
