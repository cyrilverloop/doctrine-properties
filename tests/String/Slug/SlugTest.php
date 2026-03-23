<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineProperties\Tests\String\Slug;

use CyrilVerloop\DoctrineProperties\String\Slug\Slug;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests the Slug trait.
 */
#[
    PA\CoversTrait(Slug::class),
    PA\Group('slug'),
    PA\Group('required'),
    PA\Group('slugs')
]
final class SlugTest extends TestCase
{
    // Methods :

    /**
     * Tests that a slug can be accessed.
     */
    public function testCanSetAndGetASlug(): void
    {
        $slugTrait = new class {
            use Slug;

            public function __construct()
            {
                $this->slug = 'test-slug';
            }
        };

        self::assertSame(
            'test-slug',
            $slugTrait->slug
        );
    }
}
