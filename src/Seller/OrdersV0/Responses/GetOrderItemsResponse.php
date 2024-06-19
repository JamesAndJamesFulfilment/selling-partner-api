<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\ResponseGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\OrdersV0\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\OrdersV0\Dto\Error;
use SellingPartnerApi\Seller\OrdersV0\Dto\OrderItemsList;

final class GetOrderItemsResponse extends Response
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?OrderItemsList  $payload  The order items list along with the order ID.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?OrderItemsList $payload = null,
        public readonly ?array $errors = null,
    ) {}
}
