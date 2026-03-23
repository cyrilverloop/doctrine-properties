<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineProperties\Tests\String\Slug;

use CyrilVerloop\DoctrineProperties\String\Slug\NullableSlug;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests the NullableSlug trait.
 */
#[
    PA\CoversTrait(NullableSlug::class),
    PA\Group('nullableSlug'),
    PA\Group('nullable'),
    PA\Group('slugs')
]
final class NullableSlugTest extends TestCase
{
    // Methods :

    /**
     * Tests that a slug can be accessed.
     */
    public function testCanSetAndGetASlug(): void
    {
        $nullableSlugTrait = new class {
            use NullableSlug;

            public function __construct()
            {
                $this->slug = 'test-slug';
            }
        };

        self::assertSame(
            'test-slug',
            $nullableSlugTrait->slug
        );
    }


    /**
     * Tests that a null slug can be accessed.
     */
    public function testCanSetAndGetANullSlug(): void
    {
        $nullableSlugTrait = new class {
            use NullableSlug;

            public function __construct()
            {
                $this->slug = null;
            }
        };

        self::assertNull($nullableSlugTrait->slug);
    }
}
