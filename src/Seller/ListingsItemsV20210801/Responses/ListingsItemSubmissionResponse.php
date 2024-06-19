<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\ResponseGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ListingsItemsV20210801\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\ListingsItemsV20210801\Dto\Issue;
use SellingPartnerApi\Seller\ListingsItemsV20210801\Dto\ItemIdentifiersByMarketplace;

final class ListingsItemSubmissionResponse extends Response
{
    protected static array $complexArrayTypes = [
        'issues' => [Issue::class],
        'identifiers' => [ItemIdentifiersByMarketplace::class],
    ];

    /**
     * @param  string  $sku  A selling partner provided identifier for an Amazon listing.
     * @param  string  $status  The status of the listings item submission.
     * @param  string  $submissionId  The unique identifier of the listings item submission.
     * @param  Issue[]|null  $issues  Listings item issues related to the listings item submission.
     * @param  ItemIdentifiersByMarketplace[]|null  $identifiers  Identity attributes associated with the item in the Amazon catalog, such as the ASIN.
     */
    public function __construct(
        public readonly string $sku,
        public readonly string $status,
        public readonly string $submissionId,
        public readonly ?array $issues = null,
        public readonly ?array $identifiers = null,
    ) {}
}
