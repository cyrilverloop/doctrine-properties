<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineProperties\Tests\String\Lastname;

use CyrilVerloop\DoctrineProperties\String\Lastname\Lastname;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests the Lastname trait.
 */
#[
    PA\CoversTrait(Lastname::class),
    PA\Group('lastname'),
    PA\Group('required'),
    PA\Group('lastnames')
]
final class LastnameTest extends TestCase
{
    // Methods :

    /**
     * Tests that a name can access.
     */
    public function testCanSetAndGetALastname(): void
    {
        $lastnameTrait = new class {
            use Lastname;

            public function __construct()
            {
                $this->lastname = 'test-lastname';
            }
        };

        self::assertSame(
            'test-lastname',
            $lastnameTrait->lastname
        );
    }
}
