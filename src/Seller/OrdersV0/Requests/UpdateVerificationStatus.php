<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\RequestGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\OrdersV0\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\EmptyResponse;
use SellingPartnerApi\Request;
use SellingPartnerApi\Seller\OrdersV0\Dto\UpdateVerificationStatusRequest;
use SellingPartnerApi\Seller\OrdersV0\Responses\UpdateVerificationStatusErrorResponse;

/**
 * updateVerificationStatus
 */
class UpdateVerificationStatus extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    /**
     * @param  string  $orderId  An Amazon-defined order identifier, in 3-7-7 format.
     * @param  UpdateVerificationStatusRequest  $updateVerificationStatusRequest  The request body for the `updateVerificationStatus` operation.
     */
    public function __construct(
        protected string $orderId,
        public UpdateVerificationStatusRequest $updateVerificationStatusRequest,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/orders/v0/orders/{$this->orderId}/regulatedInfo";
    }

    public function createDtoFromResponse(Response $response): EmptyResponse|UpdateVerificationStatusErrorResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            204 => EmptyResponse::class,
            400, 403, 404, 413, 415, 429, 500, 503 => UpdateVerificationStatusErrorResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->updateVerificationStatusRequest->toArray();
    }
}
