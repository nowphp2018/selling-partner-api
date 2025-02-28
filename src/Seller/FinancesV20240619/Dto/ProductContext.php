<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FinancesV20240619\Dto;

use SellingPartnerApi\Dto;

final class ProductContext extends Dto
{
    /**
     * @param  ?string  $asin  Amazon Standard Identification Number (ASIN) of the item.
     * @param  ?string  $sku  Stock keeping unit (SKU) of the item.
     * @param  ?int  $quantityShipped  Quantity of the item shipped.
     * @param  ?string  $fulfillmentNetwork  Fulfillment network of the item.
     */
    public function __construct(
        public ?string $asin = null,
        public ?string $sku = null,
        public ?int $quantityShipped = null,
        public ?string $fulfillmentNetwork = null,
    ) {}
}
