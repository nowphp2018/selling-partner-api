<?php

namespace SellingPartnerApi\Seller\MessagingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CreateDigitalAccessKeyRequest extends BaseDto
{
    protected static array $complexArrayTypes = ['attachments' => [Attachment::class]];

    /**
     * @param  ?string  $text The text to be sent to the buyer. Only links related to the digital access key are allowed. Do not include HTML or email addresses. The text must be written in the buyer's language of preference, which can be retrieved from the GetAttributes operation.
     * @param  Attachment[]  $attachments Attachments to include in the message to the buyer.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly ?string $text = null,
        public readonly ?array $attachments = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
