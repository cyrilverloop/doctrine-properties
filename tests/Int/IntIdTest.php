<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineProperties\Tests\Int;

use CyrilVerloop\DoctrineProperties\Int\IntId;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests the IntId trait.
 */
#[
    PA\CoversTrait(IntId::class),
    PA\Group('intId'),
    PA\Group('required')
]
final class IntIdTest extends TestCase
{
    // Methods :

    /**
     * Tests that an integer id can be accessed.
     */
    public function testCanGetAnIntegerId(): void
    {
        $intIdTrait = new class {
            use IntId;

            public function __construct()
            {
                $this->id = 5;
            }
        };

        self::assertSame(5, $intIdTrait->id);
    }

    /**
     * Tests that a null integer id can be accessed.
     */
    public function testCanGetANullIntegerId(): void
    {
        $intIdTrait = new class {
            use IntId;

            public function __construct()
            {
                $this->id = null;
            }
        };

        self::assertNull($intIdTrait->id);
    }
}
