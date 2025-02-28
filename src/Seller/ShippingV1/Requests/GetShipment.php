<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\RequestGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV1\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use SellingPartnerApi\Middleware\RestrictedDataToken;
use SellingPartnerApi\Request;
use SellingPartnerApi\Seller\ShippingV1\Responses\GetShipmentResponse;

/**
 * getShipment
 */
class GetShipment extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $shipmentId  Shipment id to return the entire shipment object
     */
    public function __construct(
        protected string $shipmentId,
    ) {
        $rdtMiddleware = new RestrictedDataToken('/shipping/v1/shipments/{shipmentId}', 'GET', []);
        $this->middleware()->onRequest($rdtMiddleware);
    }

    public function resolveEndpoint(): string
    {
        return "/shipping/v1/shipments/{$this->shipmentId}";
    }

    public function createDtoFromResponse(Response $response): GetShipmentResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 401, 403, 404, 429, 500, 503 => GetShipmentResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json());
    }
}
