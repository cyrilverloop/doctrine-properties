<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineProperties\Tests\String\Surname;

use CyrilVerloop\DoctrineProperties\String\Surname\Surname;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests the Surname trait.
 */
#[
    PA\CoversTrait(Surname::class),
    PA\Group('surname'),
    PA\Group('required'),
    PA\Group('surnames')
]
final class SurnameTest extends TestCase
{
    // Methods :

    /**
     * Tests that a name can access.
     */
    public function testCanSetAndGetASurname(): void
    {
        $surnameTrait = new class {
            use Surname;

            public function __construct()
            {
                $this->surname = 'test-surname';
            }
        };

        self::assertSame(
            'test-surname',
            $surnameTrait->surname
        );
    }
}
