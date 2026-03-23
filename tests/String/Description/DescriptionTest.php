<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineProperties\Tests\String\Description;

use CyrilVerloop\DoctrineProperties\String\Description\Description;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests the Description trait.
 */
#[
    PA\CoversTrait(Description::class),
    PA\Group('description'),
    PA\Group('required'),
    PA\Group('descriptions')
]
final class DescriptionTest extends TestCase
{
    // Methods :

    /**
     * Tests that a description can access.
     */
    public function testCanSetAndGetADescription(): void
    {
        $descriptionTrait = new class {
            use Description;

            public function __construct()
            {
                $this->description = 'test-description';
            }
        };

        self::assertSame(
            'test-description',
            $descriptionTrait->description
        );
    }
}
