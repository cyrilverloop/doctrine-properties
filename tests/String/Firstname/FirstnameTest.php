<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineProperties\Tests\String\Firstname;

use CyrilVerloop\DoctrineProperties\String\Firstname\Firstname;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests the Firstname trait.
 */
#[
    PA\CoversTrait(Firstname::class),
    PA\Group('firstname'),
    PA\Group('required'),
    PA\Group('firstnames')
]
final class FirstnameTest extends TestCase
{
    // Methods :

    /**
     * Tests that a name can access.
     */
    public function testCanSetAndGetAFirstname(): void
    {
        $firstnameTrait = new class {
            use Firstname;

            public function __construct()
            {
                $this->firstname = 'test-firstname';
            }
        };

        self::assertSame(
            'test-firstname',
            $firstnameTrait->firstname
        );
    }
}
