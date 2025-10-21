<?php

declare(strict_types=1);

namespace VitekDev\Exceptions\Resources\Search;

use VitekDev\Exceptions\Traits\TWithEntity;
use VitekDev\Exceptions\Traits\TWithId;

class ResourceNotFound extends \Exception
{

    use TWithId;
    use TWithEntity;

    public const MSG_WITH_ID = 'Resource with identifier %s was not found.';
    public const MSG_WITH_ENTITY = 'Entity of type "%s" (identifier "%s") was not found.';
}