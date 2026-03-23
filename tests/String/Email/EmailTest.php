<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineProperties\Tests\String\Email;

use CyrilVerloop\DoctrineProperties\String\Email\Email;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests the Email trait.
 */
#[
    PA\CoversTrait(Email::class),
    PA\Group('email'),
    PA\Group('required'),
    PA\Group('emails')
]
final class EmailTest extends TestCase
{
    // Methods :

    /**
     * Tests that an email can be accessed.
     */
    public function testCanSetAndGetAEmail(): void
    {
        $emailTrait = new class {
            use Email;

            public function __construct()
            {
                $this->email = 'test-email';
            }
        };

        self::assertSame(
            'test-email',
            $emailTrait->email
        );
    }
}
