<?php

declare(strict_types=1);

namespace VitekDev\Exceptions\Resources\Create;

use VitekDev\Exceptions\Traits\TWithEntity;
use VitekDev\Exceptions\Traits\TWithId;

class ResourceAlreadyExists extends \Exception
{

    use TWithId;
    use TWithEntity;

    public const MSG_WITH_ID = 'Resource with identifier %s already exists.';
    public const MSG_WITH_ENTITY = 'Entity of type "%s" (identifier "%s") already exists.';
}