<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\ResponseGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\DataKioskV20231115\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\DataKioskV20231115\Dto\Pagination2;

final class GetQueriesResponse extends Response
{
    protected static array $complexArrayTypes = ['queries' => [Query::class]];

    /**
     * @param  Query[]  $queries  A list of queries.
     * @param  ?Pagination2  $pagination  When a request has results that are not included in this response, pagination occurs. This means the results are divided into pages. To retrieve the next page, you must pass the `nextToken` as the `paginationToken` query parameter in the subsequent `getQueries` request. All other parameters must be provided with the same values that were provided with the request that generated this token, with the exception of `pageSize` which can be modified between calls to `getQueries`. When there are no more pages to fetch, the `nextToken` field will be absent.
     */
    public function __construct(
        public readonly array $queries,
        public readonly ?Pagination2 $pagination = null,
    ) {}
}
