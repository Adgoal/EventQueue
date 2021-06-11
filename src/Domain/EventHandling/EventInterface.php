<?php

declare(strict_types=1);

namespace AdgoalCommon\EventQueue\Domain\EventHandling;

use AdgoalCommon\ValueObject\Identity\UUID;
use Ramsey\Uuid\UuidInterface;

/**
 * EventInterface.
 */
interface EventInterface
{
    /**
     * Return UUID ValueObject.
     *
     * @return UuidInterface
     */
    public function getUuid(): UuidInterface;
}
