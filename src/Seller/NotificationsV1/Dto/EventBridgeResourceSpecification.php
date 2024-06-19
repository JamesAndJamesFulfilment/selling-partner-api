<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\NotificationsV1\Dto;

use SellingPartnerApi\Dto;

final class EventBridgeResourceSpecification extends Dto
{
    /**
     * @param  string  $region  The AWS region in which you will be receiving the notifications.
     * @param  string  $accountId  The identifier for the AWS account that is responsible for charges related to receiving notifications.
     */
    public function __construct(
        public readonly string $region,
        public readonly string $accountId,
    ) {}
}
