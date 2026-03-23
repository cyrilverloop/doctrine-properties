<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineProperties\Tests\String\Lastname;

use CyrilVerloop\DoctrineProperties\String\Lastname\NullableLastname;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests the NullableLastname trait.
 */
#[
    PA\CoversTrait(NullableLastname::class),
    PA\Group('nullableLastname'),
    PA\Group('nullable'),
    PA\Group('lastnames')
]
final class NullableLastnameTest extends TestCase
{
    // Methods :

    /**
     * Tests that a lastname can be accessed.
     */
    public function testCanSetAndGetALastname(): void
    {
        $nullableLastnameTrait = new class {
            use NullableLastname;

            public function __construct()
            {
                $this->lastname = 'test-lastname';
            }
        };

        self::assertSame(
            'test-lastname',
            $nullableLastnameTrait->lastname
        );
    }


    /**
     * Tests that a null lastname can be accessed.
     */
    public function testCanSetAndGetANullLastname(): void
    {
        $nullableLastlastnameTrait = new class {
            use NullableLastname;

            public function __construct()
            {
                $this->lastname = null;
            }
        };

        self::assertNull($nullableLastlastnameTrait->lastname);
    }
}
