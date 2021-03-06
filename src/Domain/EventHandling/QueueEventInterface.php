<?php

declare(strict_types=1);

namespace AdgoalCommon\EventQueue\Domain\EventHandling;

use Broadway\Serializer\Serializable;

/**
 * Simple synchronous publishing of events.
 */
interface QueueEventInterface
{
    /**
     * Publish event to queue.
     *
     * @param Serializable $event
     */
    public function publishEventToQueue(Serializable $event): void;
}
