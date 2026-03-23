<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineProperties\Tests\Bool;

use CyrilVerloop\DoctrineProperties\Bool\Active;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests the Active trait.
 */
#[
    PA\CoversTrait(Active::class),
    PA\Group('active'),
    PA\Group('required')
]
final class ActiveTest extends TestCase
{
    // Methods :

    /**
     * Test that the active state can be accessed.
     */
    public function testCanSetAndGetAnActiveState(): void
    {
        $activeTrait = new class {
            use Active;

            public function __construct()
            {
                $this->active = true;
            }
        };

        self::assertTrue($activeTrait->active);
    }


    /**
     * Test that the inactive state can be accessed.
     */
    public function testCanSetAndGetAnInactiveState(): void
    {
        $activeTrait = new class {
            use Active;

            public function __construct()
            {
                $this->active = false;
            }
        };

        self::assertFalse($activeTrait->active);
    }
}
