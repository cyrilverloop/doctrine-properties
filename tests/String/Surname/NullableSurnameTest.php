<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineProperties\Tests\String\Surname;

use CyrilVerloop\DoctrineProperties\String\Surname\NullableSurname;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests the NullableSurname trait.
 */
#[
    PA\CoversTrait(NullableSurname::class),
    PA\Group('nullableSurname'),
    PA\Group('nullable'),
    PA\Group('surnames')
]
final class NullableSurnameTest extends TestCase
{
    // Methods :

    /**
     * Tests that a surname can be accessed.
     */
    public function testCanSetAndGetASurname(): void
    {
        $nullableSurnameTrait = new class {
            use NullableSurname;

            public function __construct()
            {
                $this->surname = 'test-surname';
            }
        };

        self::assertSame(
            'test-surname',
            $nullableSurnameTrait->surname
        );
    }


    /**
     * Tests that a null surname can be accessed.
     */
    public function testCanSetAndGetANullSurname(): void
    {
        $nullableLastsurnameTrait = new class {
            use NullableSurname;

            public function __construct()
            {
                $this->surname = null;
            }
        };

        self::assertNull($nullableLastsurnameTrait->surname);
    }
}
