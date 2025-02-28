<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\SellersV1\Dto;

use SellingPartnerApi\Dto;

final class Account extends Dto
{
    protected static array $complexArrayTypes = ['marketplaceParticipationList' => MarketplaceParticipation::class];

    /**
     * @param  MarketplaceParticipation[]  $marketplaceParticipationList  List of marketplace participations.
     * @param  string  $businessType  The type of business registered for the seller account.
     * @param  string  $sellingPlan  The selling plan details.
     * @param  ?Business  $business  Information about the seller's business. Certain fields may be omitted depending on the seller's `businessType`.
     * @param  ?PrimaryContact  $primaryContact  Information about the seller's primary contact.
     */
    public function __construct(
        public array $marketplaceParticipationList,
        public string $businessType,
        public string $sellingPlan,
        public ?Business $business = null,
        public ?PrimaryContact $primaryContact = null,
    ) {}
}
