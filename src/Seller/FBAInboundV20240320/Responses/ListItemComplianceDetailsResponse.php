<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\ResponseGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\ComplianceDetail;

final class ListItemComplianceDetailsResponse extends Response
{
    protected static array $complexArrayTypes = ['complianceDetails' => [ComplianceDetail::class]];

    /**
     * @param  ComplianceDetail[]|null  $complianceDetails  List of compliance details.
     */
    public function __construct(
        public readonly ?array $complianceDetails = null,
    ) {}
}
