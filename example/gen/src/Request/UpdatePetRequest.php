<?php declare(strict_types=1);

/*
 * This file was generated by docler-labs/api-client-generator.
 *
 * Do not edit it manually.
 */

namespace OpenApi\PetStoreClient\Request;

use OpenApi\PetStoreClient\Schema\Pet;

class UpdatePetRequest implements RequestInterface
{
    private Pet $pet;

    private string $contentType;

    public function __construct(Pet $pet, string $contentType)
    {
        $this->pet         = $pet;
        $this->contentType = $contentType;
    }

    public function getContentType(): string
    {
        return $this->contentType;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getRoute(): string
    {
        return 'pet';
    }

    public function getQueryParameters(): array
    {
        return [];
    }

    public function getRawQueryParameters(): array
    {
        return [];
    }

    public function getCookies(): array
    {
        return [];
    }

    public function getHeaders(): array
    {
        return ['Content-Type' => $this->contentType];
    }

    /**
     * @return Pet
     */
    public function getBody()
    {
        return $this->pet;
    }
}
