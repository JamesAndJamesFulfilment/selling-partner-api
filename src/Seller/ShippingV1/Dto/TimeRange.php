<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use SellingPartnerApi\Dto;

final class TimeRange extends Dto
{
    /**
     * @param  ?\DateTimeInterface  $start  The start date and time. This defaults to the current date and time.
     * @param  ?\DateTimeInterface  $end  The end date and time. This must come after the value of start. This defaults to the next business day from the start.
     */
    public function __construct(
        public readonly ?\DateTimeInterface $start = null,
        public readonly ?\DateTimeInterface $end = null,
    ) {}
}
