<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineProperties\Tests\String\Firstname;

use CyrilVerloop\DoctrineProperties\String\Firstname\NullableFirstname;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests the NullableFirstname trait.
 */
#[
    PA\CoversTrait(NullableFirstname::class),
    PA\Group('nullableFirstname'),
    PA\Group('nullable'),
    PA\Group('firstnames')
]
final class NullableFirstnameTest extends TestCase
{
    // Methods :

    /**
     * Tests that a firstname can be accessed.
     */
    public function testCanSetAndGetAFirstname(): void
    {
        $nullableFirstnameTrait = new class {
            use NullableFirstname;

            public function __construct()
            {
                $this->firstname = 'test-firstname';
            }
        };

        self::assertSame(
            'test-firstname',
            $nullableFirstnameTrait->firstname
        );
    }


    /**
     * Tests that a null firstname can be accessed.
     */
    public function testCanSetAndGetANullFirstname(): void
    {
        $nullableLastfirstnameTrait = new class {
            use NullableFirstname;

            public function __construct()
            {
                $this->firstname = null;
            }
        };

        self::assertNull($nullableLastfirstnameTrait->firstname);
    }
}
