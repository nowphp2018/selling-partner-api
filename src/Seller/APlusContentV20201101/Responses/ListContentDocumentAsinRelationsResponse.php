<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\ResponseGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\APlusContentV20201101\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\APlusContentV20201101\Dto\AsinMetadata;
use SellingPartnerApi\Seller\APlusContentV20201101\Dto\Error;

final class ListContentDocumentAsinRelationsResponse extends Response
{
    protected static array $complexArrayTypes = ['asinMetadataSet' => AsinMetadata::class, 'warnings' => Error::class];

    /**
     * @param  AsinMetadata[]  $asinMetadataSet  The set of ASIN metadata.
     * @param  Error[]|null  $warnings  A set of messages to the user, such as warnings or comments.
     * @param  ?string  $nextPageToken  A token that you use to fetch a specific page when there are multiple pages of results.
     */
    public function __construct(
        public readonly array $asinMetadataSet,
        public readonly ?array $warnings = null,
        public readonly ?string $nextPageToken = null,
    ) {}
}
