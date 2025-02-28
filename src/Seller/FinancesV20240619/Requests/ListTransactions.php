<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\RequestGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FinancesV20240619\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use SellingPartnerApi\Request;
use SellingPartnerApi\Seller\FinancesV20240619\Responses\ErrorList;
use SellingPartnerApi\Seller\FinancesV20240619\Responses\ListTransactionsResponse;

/**
 * listTransactions
 */
class ListTransactions extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  \DateTimeInterface  $postedAfter  A date used for selecting transactions posted after (or at) a specified time. The date-time must be no later than two minutes before the request was submitted, in ISO 8601 date time format.
     * @param  ?\DateTimeInterface  $postedBefore  A date used for selecting transactions posted before (but not at) a specified time. The date-time must be later than PostedAfter and no later than two minutes before the request was submitted, in ISO 8601 date time format. If PostedAfter and PostedBefore are more than 180 days apart, no transactions are returned. You must specify the PostedAfter parameter if you specify the PostedBefore parameter. Default: Now minus two minutes.
     * @param  ?string  $marketplaceId  A string token used to select Marketplace ID.
     * @param  ?string  $nextToken  A string token returned in the response of your previous request.
     */
    public function __construct(
        protected \DateTimeInterface $postedAfter,
        protected ?\DateTimeInterface $postedBefore = null,
        protected ?string $marketplaceId = null,
        protected ?string $nextToken = null,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/finances/2024-06-19/transactions';
    }

    public function createDtoFromResponse(Response $response): ListTransactionsResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => ListTransactionsResponse::class,
            400, 403, 404, 415, 413, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json());
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'postedAfter' => $this->postedAfter?->format('Y-m-d\TH:i:s\Z'),
            'postedBefore' => $this->postedBefore?->format('Y-m-d\TH:i:s\Z'),
            'marketplaceId' => $this->marketplaceId,
            'nextToken' => $this->nextToken,
        ]);
    }
}
