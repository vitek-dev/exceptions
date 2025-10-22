<?php

declare(strict_types=1);

namespace VitekDev\Exceptions\Resources;

/** @internal */
trait TWithId
{
    public static function withId(mixed $identifier, ?\Throwable $previous): static
    {
        return new static(
            sprintf(static::MSG_WITH_ID, $identifier),
            previous: $previous,
        );
    }
}