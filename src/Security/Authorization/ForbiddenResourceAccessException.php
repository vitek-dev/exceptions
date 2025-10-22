<?php

namespace VitekDev\Exceptions\Security\Authorization;

use VitekDev\Exceptions\Security\SecurityException;

/**
 * User is not authorized to access the requested resource.
 */
class ForbiddenResourceAccessException extends SecurityException
{
    public static function withUserAndResource(string $userId, string $resourceId): self
    {
        return new self(
            sprintf('User ("%s") is not authorized to access requested resource ("%s")', $userId, $resourceId)
        );
    }
}