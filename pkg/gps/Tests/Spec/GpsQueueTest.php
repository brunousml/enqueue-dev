<?php

namespace Enqueue\Gps\Tests\Spec;

use Enqueue\Gps\GpsQueue;
use Interop\Queue\Spec\QueueSpec;

class GpsQueueTest extends QueueSpec
{
    protected function createQueue()
    {
        return new GpsQueue(self::EXPECTED_QUEUE_NAME);
    }
}
