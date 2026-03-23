<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineProperties\Tests\String\Name;

use CyrilVerloop\DoctrineProperties\String\Name\NullableName;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests the NullableName trait.
 */
#[
    PA\CoversTrait(NullableName::class),
    PA\Group('nullableName'),
    PA\Group('nullable'),
    PA\Group('names')
]
final class NullableNameTest extends TestCase
{
    // Methods :

    /**
     * Tests that a name can be accessed.
     */
    public function testCanSetAndGetAName(): void
    {
        $nullableNameTrait = new class {
            use NullableName;

            public function __construct()
            {
                $this->name = 'test-name';
            }
        };

        self::assertSame(
            'test-name',
            $nullableNameTrait->name
        );
    }


    /**
     * Tests that a null name can be accessed.
     */
    public function testCanSetAndGetANullName(): void
    {
        $nullableNameTrait = new class {
            use NullableName;

            public function __construct()
            {
                $this->name = null;
            }
        };

        self::assertNull($nullableNameTrait->name);
    }
}
