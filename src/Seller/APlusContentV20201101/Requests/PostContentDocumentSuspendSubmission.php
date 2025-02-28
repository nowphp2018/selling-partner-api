<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\RequestGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\APlusContentV20201101\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use SellingPartnerApi\Request;
use SellingPartnerApi\Seller\APlusContentV20201101\Responses\ErrorList;
use SellingPartnerApi\Seller\APlusContentV20201101\Responses\PostContentDocumentSuspendSubmissionResponse;

/**
 * postContentDocumentSuspendSubmission
 */
class PostContentDocumentSuspendSubmission extends Request
{
    protected Method $method = Method::POST;

    /**
     * @param  string  $contentReferenceKey  The unique reference key for the A+ Content document. A content reference key cannot form a permalink and might change in the future. A content reference key is not guaranteed to match any A+ content identifier.
     * @param  string  $marketplaceId  The marketplace ID is the globally unique identifier of a marketplace. To find the ID for your marketplace, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     */
    public function __construct(
        protected string $contentReferenceKey,
        protected string $marketplaceId,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/aplus/2020-11-01/contentDocuments/{$this->contentReferenceKey}/suspendSubmissions";
    }

    public function createDtoFromResponse(Response $response): PostContentDocumentSuspendSubmissionResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => PostContentDocumentSuspendSubmissionResponse::class,
            400, 401, 403, 404, 410, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json());
    }

    public function defaultQuery(): array
    {
        return array_filter(['marketplaceId' => $this->marketplaceId]);
    }
}
