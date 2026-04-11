<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineProperties\Tests;

use CyrilVerloop\DoctrineProperties\AbstractIntId;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests the IntId abstract entity.
 */
#[
    PA\CoversClass(AbstractIntId::class),
    PA\Group('abstractIntId')
]
final class AbstractIntIdTest extends TestCase
{
    // Methods :

    /**
     * Test that the identifier/primary key
     * can be initialised to null.
     */
    public function testIdentifierCanBeInitialisedToNull(): void
    {
        $abstractIntId = new class extends AbstractIntId {};

        self::assertNull($abstractIntId->id);
    }

    /**
     * Throws a domain exception
     * if the identifier/primary key
     * is set to zero.
     */
    public function testThrowsADomainExceptionIfIdIsSetToZero(): void
    {
        $this->expectException(\DomainException::class);
        $this->expectExceptionMessage('The identifier must be null or an integer greater than 0.');

        $abstractIntId = new class extends AbstractIntId {};
        $abstractIntId->id = 0;
    }

    /**
     * Throws a domain exception
     * if the identifier/primary key
     * is set to a negative integer.
     */
    public function testThrowsADomainExceptionIfIdIsSetToANegativeInteger(): void
    {
        $this->expectException(\DomainException::class);
        $this->expectExceptionMessage('The identifier must be null or an integer greater than 0.');

        $abstractIntId = new class extends AbstractIntId {};
        $abstractIntId->id = -1;
    }

    /**
     * Test that the identifier
     * can be publicly set to a positive integer.
     */
    public function testIdentifierCanBePubliclySetToAPositiveInteger(): void
    {
        $abstractIntId = new class extends AbstractIntId {};

        self::assertNull($abstractIntId->id);

        $abstractIntId->id = 1;

        self::assertSame(1, $abstractIntId->id);
    }
}
