<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use SellingPartnerApi\Dto;

final class GetFulfillmentPreviewRequest extends Dto
{
    protected static array $attributeMap = ['includeCodFulfillmentPreview' => 'includeCODFulfillmentPreview'];

    protected static array $complexArrayTypes = [
        'items' => GetFulfillmentPreviewItem::class,
        'featureConstraints' => FeatureSettings::class,
    ];

    /**
     * @param  Address  $address  A physical address.
     * @param  GetFulfillmentPreviewItem[]  $items  An array of fulfillment preview item information.
     * @param  ?string  $marketplaceId  The marketplace the fulfillment order is placed against.
     * @param  ?string[]  $shippingSpeedCategories  ShippingSpeedCategory List
     * @param  ?bool  $includeCodFulfillmentPreview  When true, returns all fulfillment order previews both for COD and not for COD. Otherwise, returns only fulfillment order previews that are not for COD.
     * @param  ?bool  $includeDeliveryWindows  When true, returns the `ScheduledDeliveryInfo` response object, which contains the available delivery windows for a Scheduled Delivery. The `ScheduledDeliveryInfo` response object can only be returned for fulfillment order previews with `ShippingSpeedCategories` = `ScheduledDelivery`.
     * @param  FeatureSettings[]|null  $featureConstraints  A list of features and their fulfillment policies to apply to the order.
     */
    public function __construct(
        public Address $address,
        public array $items,
        public ?string $marketplaceId = null,
        public ?array $shippingSpeedCategories = null,
        public ?bool $includeCodFulfillmentPreview = null,
        public ?bool $includeDeliveryWindows = null,
        public ?array $featureConstraints = null,
    ) {}
}
