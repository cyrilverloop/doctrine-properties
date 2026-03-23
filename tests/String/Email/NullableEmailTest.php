<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineProperties\Tests\String\Email;

use CyrilVerloop\DoctrineProperties\String\Email\NullableEmail;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests the NullableEmail trait.
 */
#[
    PA\CoversTrait(NullableEmail::class),
    PA\Group('nullableEmail'),
    PA\Group('nullable'),
    PA\Group('emails')
]
final class NullableEmailTest extends TestCase
{
    // Methods :

    /**
     * Tests that an email can be accessed.
     */
    public function testCanSetAndGetAEmail(): void
    {
        $nullableEmailTrait = new class {
            use NullableEmail;

            public function __construct()
            {
                $this->email = 'test-email';
            }
        };

        self::assertSame(
            'test-email',
            $nullableEmailTrait->email
        );
    }


    /**
     * Tests that a null email can be accessed.
     */
    public function testCanSetAndGetANullEmail(): void
    {
        $nullableEmailTrait = new class {
            use NullableEmail;

            public function __construct()
            {
                $this->email = null;
            }
        };

        self::assertNull($nullableEmailTrait->email);
    }
}
