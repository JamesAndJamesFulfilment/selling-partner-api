<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentPaymentV1\Dto;

use SellingPartnerApi\Dto;

final class SubmitInvoiceRequest extends Dto
{
    protected static array $complexArrayTypes = ['invoices' => [InvoiceDetail::class]];

    /**
     * @param  InvoiceDetail[]|null  $invoices
     */
    public function __construct(
        public readonly ?array $invoices = null,
    ) {}
}
