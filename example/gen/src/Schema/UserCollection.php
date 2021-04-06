<?php declare(strict_types=1);

/*
 * This file was generated by docler-labs/api-client-generator.
 *
 * Do not edit it manually.
 */

namespace OpenApi\PetStoreClient\Schema;

use ArrayIterator;
use Countable;
use IteratorAggregate;
use JsonSerializable;

class UserCollection implements IteratorAggregate, SerializableInterface, Countable, JsonSerializable
{
    private array $items;

    /**
     * @param User[] $items
     */
    public function __construct(User ...$items)
    {
        $this->items = $items;
    }

    public function toArray(): array
    {
        $return = [];
        foreach ($this->items as $item) {
            $return[] = $item->toArray();
        }

        return $return;
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }

    /**
     * @return User[]
     */
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->items);
    }

    public function count(): int
    {
        return \count($this->items);
    }

    public function first(): ?User
    {
        $first = \reset($this->items);
        if ($first === false) {
            return null;
        }

        return $first;
    }
}
