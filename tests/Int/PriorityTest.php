<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineProperties\Tests\Int;

use CyrilVerloop\DoctrineProperties\Int\Priority;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests the Priority trait.
 */
#[
    PA\CoversTrait(Priority::class),
    PA\Group('priority'),
    PA\Group('required')
]
final class PriorityTest extends TestCase
{
    // Methods :

    /**
     * Tests that a zero priority can be accessed.
     */
    public function testCanSetAndGetAZeroPriority(): void
    {
        $priorityTrait = new class {
            use Priority;

            public function __construct()
            {
                $this->priority = 0;
            }
        };

        self::assertSame(0, $priorityTrait->priority);
    }

    /**
     * Tests that a positive priority can be accessed.
     */
    public function testCanSetAndGetAPositivePriority(): void
    {
        $priorityTrait = new class {
            use Priority;

            public function __construct()
            {
                $this->priority = 5;
            }
        };

        self::assertSame(5, $priorityTrait->priority);
    }

    /**
     * Tests that a negative priority can be accessed.
     */
    public function testCanSetAndGetANegativePriority(): void
    {
        $priorityTrait = new class {
            use Priority;

            public function __construct()
            {
                $this->priority = -5;
            }
        };

        self::assertSame(-5, $priorityTrait->priority);
    }
}
