<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use SellingPartnerApi\Dto;

final class GetFulfillmentPreviewResult extends Dto
{
    protected static array $complexArrayTypes = ['fulfillmentPreviews' => [FulfillmentPreview::class]];

    /**
     * @param  FulfillmentPreview[]|null  $fulfillmentPreviews  An array of fulfillment preview information.
     */
    public function __construct(
        public readonly ?array $fulfillmentPreviews = null,
    ) {}
}
