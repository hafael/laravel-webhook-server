<?php

namespace Spatie\WebhookServer\Events;

use GuzzleHttp\Psr7\Response;

abstract class WebhookCallEvent
{
    /** @var string */
    public $httpVerb;

    /** @var string */
    public $webhookUrl;

    /** @var array */
    public $payload;

    /** @var array */
    public $headers;

    /** @var array */
    public $meta;

    /** @var array */
    public $tags;

    /** @var int */
    public $attempt;

    /** @var Response */
    public $response;

    /** @var string */
    public $errorType;

    /** @var string */
    public $errorMessage;

    /** @var string */
    public $uuid;

    public function __construct(
        string $httpVerb,
        string $webhookUrl,
        array $payload,
        array $headers,
        array $meta,
        array $tags,
        int $attempt,
        ?Response $response,
        ?string $errorType,
        ?string $errorMessage,
        string $uuid
    ) {
        $this->httpVerb = $httpVerb;
        $this->webhookUrl = $webhookUrl;
        $this->payload = $payload;
        $this->headers = $headers;
        $this->meta = $meta;
        $this->tags = $tags;
        $this->attempt = $attempt;
        $this->response = $response;
        $this->errorType = $errorType;
        $this->errorMessage = $errorMessage;
        $this->uuid = $uuid;
    }
}
