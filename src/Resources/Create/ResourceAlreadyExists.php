<?php

declare(strict_types=1);

namespace VitekDev\Exceptions\Resources\Create;

use VitekDev\Exceptions\Resources\TWithEntity;
use VitekDev\Exceptions\Resources\TWithId;

class ResourceAlreadyExists extends \Exception
{

    use TWithId;
    use TWithEntity;

    public const MSG_WITH_ID = 'Resource with identifier %s already exists.';
    public const MSG_WITH_ENTITY = 'Entity of type "%s" (identifier "%s") already exists.';
}