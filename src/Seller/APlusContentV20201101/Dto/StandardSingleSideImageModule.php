<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use SellingPartnerApi\Dto;

final class StandardSingleSideImageModule extends Dto
{
    /**
     * @param  string  $imagePositionType  The relative positioning of content.
     * @param  ?StandardImageTextBlock  $block  The A+ Content standard image and text box block.
     */
    public function __construct(
        public readonly string $imagePositionType,
        public readonly ?StandardImageTextBlock $block = null,
    ) {}
}
