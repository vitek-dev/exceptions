<?php

declare(strict_types=1);

namespace VitekDev\Exceptions\Resource\Search;

use VitekDev\Exceptions\Resource\ResourceException;
use VitekDev\Exceptions\Resource\TWithEntity;
use VitekDev\Exceptions\Resource\TWithId;

/**
 * Resource was not found.
 */
class ResourceNotFound extends ResourceException
{

    use TWithId;
    use TWithEntity;

    public const MSG_WITH_ID = 'Resource ("%s") was not found.';
    public const MSG_WITH_ENTITY = 'Entity ("%s", "%s") was not found.';
}