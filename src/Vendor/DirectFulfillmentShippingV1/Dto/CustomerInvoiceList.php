<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Dto;

use SellingPartnerApi\Dto;

final class CustomerInvoiceList extends Dto
{
    protected static array $complexArrayTypes = ['customerInvoices' => CustomerInvoice::class];

    /**
     * @param  ?Pagination  $pagination  The pagination elements required to retrieve the remaining data.
     * @param  CustomerInvoice[]|null  $customerInvoices  Represents a customer invoice within the CustomerInvoiceList.
     */
    public function __construct(
        public ?Pagination $pagination = null,
        public ?array $customerInvoices = null,
    ) {}
}
