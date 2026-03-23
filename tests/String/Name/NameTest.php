<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineProperties\Tests\String\Name;

use CyrilVerloop\DoctrineProperties\String\Name\Name;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests the Name trait.
 */
#[
    PA\CoversTrait(Name::class),
    PA\Group('name'),
    PA\Group('required'),
    PA\Group('names')
]
final class NameTest extends TestCase
{
    // Methods :

    /**
     * Tests that a name can access.
     */
    public function testCanSetAndGetAName(): void
    {
        $nameTrait = new class {
            use Name;

            public function __construct()
            {
                $this->name = 'test-name';
            }
        };

        self::assertSame(
            'test-name',
            $nameTrait->name
        );
    }
}
