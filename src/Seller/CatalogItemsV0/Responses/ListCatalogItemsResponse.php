<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\ResponseGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\CatalogItemsV0\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\CatalogItemsV0\Dto\Error;
use SellingPartnerApi\Seller\CatalogItemsV0\Dto\ListMatchingItemsResponse;

final class ListCatalogItemsResponse extends Response
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?ListMatchingItemsResponse  $payload
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?ListMatchingItemsResponse $payload = null,
        public readonly ?array $errors = null,
    ) {}
}
