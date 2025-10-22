<?php

declare(strict_types=1);

namespace VitekDev\Exceptions\Resource;

/** @internal */
trait TWithEntity
{
    public static function withEntity(string $type, mixed $identifier, ?\Throwable $previous = null): self
    {
        return new self(
            sprintf(static::MSG_WITH_ENTITY, $type, $identifier),
            previous: $previous,
        );
    }
}