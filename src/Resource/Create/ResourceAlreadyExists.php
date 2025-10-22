<?php

declare(strict_types=1);

namespace VitekDev\Exceptions\Resource\Create;

use VitekDev\Exceptions\Resource\ResourceException;
use VitekDev\Exceptions\Resource\TWithEntity;
use VitekDev\Exceptions\Resource\TWithId;

/**
 * Not possible to create resource because it already exists (e.g. unique constraint violation).
 */
class ResourceAlreadyExists extends ResourceException
{
    use TWithId;
    use TWithEntity;

    public const MSG_WITH_ID = 'Resource ("%s") already exists.';
    public const MSG_WITH_ENTITY = 'Entity ("%s", "%s") already exists.';
}