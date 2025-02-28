<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use SellingPartnerApi\Dto;

final class OfferType extends Dto
{
    protected static array $attributeMap = [
        'buyingPrice' => 'BuyingPrice',
        'regularPrice' => 'RegularPrice',
        'fulfillmentChannel' => 'FulfillmentChannel',
        'itemCondition' => 'ItemCondition',
        'itemSubCondition' => 'ItemSubCondition',
        'sellerSku' => 'SellerSKU',
    ];

    protected static array $complexArrayTypes = ['quantityDiscountPrices' => QuantityDiscountPriceType::class];

    /**
     * @param  PriceType  $buyingPrice  Schema for item's price information, including listing price, shipping price, and Amazon points.
     * @param  MoneyType  $regularPrice  Currency type and monetary value. Schema for demonstrating pricing info.
     * @param  string  $fulfillmentChannel  The fulfillment channel for the offer listing. Possible values:
     *
     * * Amazon - Fulfilled by Amazon.
     * * Merchant - Fulfilled by the seller.
     * @param  string  $itemCondition  The item condition for the offer listing. Possible values: New, Used, Collectible, Refurbished, or Club.
     * @param  string  $itemSubCondition  The item subcondition for the offer listing. Possible values: New, Mint, Very Good, Good, Acceptable, Poor, Club, OEM, Warranty, Refurbished Warranty, Refurbished, Open Box, or Other.
     * @param  string  $sellerSku  The seller stock keeping unit (SKU) of the item.
     * @param  ?string  $offerType  Indicates whether the offer is a B2B or B2C offer
     * @param  ?MoneyType  $businessPrice  Currency type and monetary value. Schema for demonstrating pricing info.
     * @param  QuantityDiscountPriceType[]|null  $quantityDiscountPrices  List of `QuantityDiscountPrice` that contains item's pricing information when buy in bulk.
     */
    public function __construct(
        public PriceType $buyingPrice,
        public MoneyType $regularPrice,
        public string $fulfillmentChannel,
        public string $itemCondition,
        public string $itemSubCondition,
        public string $sellerSku,
        public ?string $offerType = null,
        public ?MoneyType $businessPrice = null,
        public ?array $quantityDiscountPrices = null,
    ) {}
}
