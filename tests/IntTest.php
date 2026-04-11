<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineProperties\Tests;

use CyrilVerloop\DoctrineProperties\IntExample;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests int example.
 */
#[
    PA\CoversClass(IntExample::class),
    PA\Group('int'),
    PA\Group('nonNullable')
]
final class IntTest extends TestCase
{
    // Methods :


    // Priority :

    /**
     * Test that the priority
     * can be initialised to zero.
     */
    #[PA\Group('priority')]
    public function testPriorityCanBeInitialisedToZero(): void
    {
        $intExample = new IntExample(priority: 0);

        self::assertSame(0, $intExample->priority);
    }

    /**
     * Test that the priority
     * can be initialised to zero
     * by default.
     */
    #[PA\Group('priority')]
    public function testPriorityCanBeInitialisedToZeroByDefault(): void
    {
        $intExample = new IntExample();

        self::assertSame(0, $intExample->priority);
    }

    /**
     * Test that the priority
     * can be initialised to a positive integer.
     */
    #[PA\Group('priority')]
    public function testPriorityCanBeInitialisedToAPositiveInteger(): void
    {
        $intExample = new IntExample(priority: 5);

        self::assertSame(5, $intExample->priority);
    }

    /**
     * Test that the priority
     * can be initialised to a negative integer.
     */
    #[PA\Group('priority')]
    public function testPriorityCanBeInitialisedToANegativeInteger(): void
    {
        $intExample = new IntExample(priority: -5);

        self::assertSame(-5, $intExample->priority);
    }

    /**
     * Test that the priority
     * can be publicly set to zero.
     */
    #[PA\Group('priority')]
    public function testPriorityCanBePubliclySetToZero(): void
    {
        $intExample = new IntExample(priority: 1);

        self::assertNotSame(0, $intExample->priority);

        $intExample->priority = 0;

        self::assertSame(0, $intExample->priority);
    }

    /**
     * Test that the priority
     * can be publicly set to a positive integer.
     */
    #[PA\Group('priority')]
    public function testPriorityCanBePubliclySetToAPositiveInteger(): void
    {
        $intExample = new IntExample();

        self::assertLessThan(1, $intExample->priority);

        $intExample->priority = 5;

        self::assertSame(5, $intExample->priority);
    }

    /**
     * Test that the priority
     * can be publicly set to a negative integer.
     */
    #[PA\Group('priority')]
    public function testPriorityCanBePubliclySetToANegativeInteger(): void
    {
        $intExample = new IntExample();

        self::assertGreaterThan(-1, $intExample->priority);

        $intExample->priority = -5;

        self::assertSame(-5, $intExample->priority);
    }
}
