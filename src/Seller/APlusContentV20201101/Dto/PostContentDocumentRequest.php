<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use SellingPartnerApi\Dto;

final class PostContentDocumentRequest extends Dto
{
    /**
     * @param  ContentDocument  $contentDocument  The A+ Content document. This is the enhanced content that is published to product detail pages.
     */
    public function __construct(
        public readonly ContentDocument $contentDocument,
    ) {}
}
