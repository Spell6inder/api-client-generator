<?php declare(strict_types=1);

/*
 * This file was generated by docler-labs/api-client-generator.
 *
 * Do not edit it manually.
 */

namespace OpenApi\PetStoreClient\Request;

use OpenApi\PetStoreClient\Schema\User;

class CreateUserRequest implements RequestInterface
{
    private User $user;

    private string $contentType;

    public function __construct(User $user, string $contentType)
    {
        $this->user        = $user;
        $this->contentType = $contentType;
    }

    public function getContentType(): string
    {
        return $this->contentType;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getRoute(): string
    {
        return 'user';
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
     * @return User
     */
    public function getBody()
    {
        return $this->user;
    }
}
