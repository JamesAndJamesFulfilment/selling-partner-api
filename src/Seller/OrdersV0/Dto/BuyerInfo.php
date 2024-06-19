<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use SellingPartnerApi\Dto;

final class BuyerInfo extends Dto
{
    protected static array $attributeMap = [
        'buyerEmail' => 'BuyerEmail',
        'buyerName' => 'BuyerName',
        'buyerCounty' => 'BuyerCounty',
        'buyerTaxInfo' => 'BuyerTaxInfo',
        'purchaseOrderNumber' => 'PurchaseOrderNumber',
    ];

    /**
     * @param  ?string  $buyerEmail  The anonymized email address of the buyer.
     * @param  ?string  $buyerName  The buyer name or the recipient name.
     * @param  ?string  $buyerCounty  The county of the buyer.
     *
     * **Note**: This attribute is only available in the Brazil marketplace.
     * @param  ?BuyerTaxInfo  $buyerTaxInfo  Tax information about the buyer.
     * @param  ?string  $purchaseOrderNumber  The purchase order (PO) number entered by the buyer at checkout. Returned only for orders where the buyer entered a PO number at checkout.
     */
    public function __construct(
        public readonly ?string $buyerEmail = null,
        public readonly ?string $buyerName = null,
        public readonly ?string $buyerCounty = null,
        public readonly ?BuyerTaxInfo $buyerTaxInfo = null,
        public readonly ?string $purchaseOrderNumber = null,
    ) {}
}
