<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineProperties\Tests\String\Description;

use CyrilVerloop\DoctrineProperties\String\Description\NullableDescription;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests the NullableDescription trait.
 */
#[
    PA\CoversTrait(NullableDescription::class),
    PA\Group('nullableDescription'),
    PA\Group('nullable'),
    PA\Group('descriptions')
]
final class NullableDescriptionTest extends TestCase
{
    // Methods :

    /**
     * Tests that a description can be accessed.
     */
    public function testCanSetAndGetADescription(): void
    {
        $descriptionTrait = new class {
            use NullableDescription;

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


    /**
     * Tests that a null description can be accessed.
     */
    public function testCanSetAndGetANullDescription(): void
    {
        $descriptionTrait = new class {
            use NullableDescription;

            public function __construct()
            {
                $this->description = null;
            }
        };

        self::assertNull($descriptionTrait->description);
    }
}
