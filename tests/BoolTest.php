<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineProperties\Tests;

use CyrilVerloop\DoctrineProperties\BoolExample;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests bool example.
 */
#[
    PA\CoversClass(BoolExample::class),
    PA\Group('bool'),
    PA\Group('nonNullable')
]
final class BoolTest extends TestCase
{
    // Methods :


    // Active :

    /**
     * Test that the active state
     * can be initialised to true.
     */
    #[PA\Group('active')]
    public function testActiveStateCanBeInitialisedToTrue(): void
    {
        $boolExample = new BoolExample(active: true);

        self::assertTrue($boolExample->active);
    }

    /**
     * Test that the active state
     * can be initialised to true
     * by default.
     */
    #[PA\Group('active')]
    public function testActiveStateCanBeInitialisedToTrueByDefault(): void
    {
        $boolExample = new BoolExample();

        self::assertTrue($boolExample->active);
    }

    /**
     * Test that the active state
     * can be initialised to false.
     */
    #[PA\Group('active')]
    public function testActiveStateCanBeInitialisedToFalse(): void
    {
        $boolExample = new BoolExample(active: false);

        self::assertFalse($boolExample->active);
    }

    /**
     * Test that the active state
     * can be publicly deactivated.
     */
    #[PA\Group('active')]
    public function testActiveStateCanBePubliclyDeactived(): void
    {
        $boolExample = new BoolExample();

        self::assertTrue($boolExample->active);

        $boolExample->active = false;

        self::assertFalse($boolExample->active);
    }

    /**
     * Test that the active state
     * can be publicly activated.
     */
    #[PA\Group('active')]
    public function testActiveStateCanBePubliclyActived(): void
    {
        $boolExample = new BoolExample(active: false);

        self::assertFalse($boolExample->active);

        $boolExample->active = true;

        self::assertTrue($boolExample->active);
    }


    // Available :

    /**
     * Test that the availability
     * can be initialised to true.
     */
    #[PA\Group('available')]
    public function testAvailabilityCanBeInitialisedToTrue(): void
    {
        $boolExample = new BoolExample(available: true);

        self::assertTrue($boolExample->available);
    }

    /**
     * Test that the availability
     * can be initialised to true
     * by default.
     */
    #[PA\Group('available')]
    public function testAvailabilityCanBeInitialisedToTrueByDefault(): void
    {
        $boolExample = new BoolExample();

        self::assertTrue($boolExample->available);
    }

    /**
     * Test that the availability
     * can be initialised to false.
     */
    #[PA\Group('available')]
    public function testAvailabilityCanBeInitialisedToFalse(): void
    {
        $boolExample = new BoolExample(available: false);

        self::assertFalse($boolExample->available);
    }

    /**
     * Test that the availability
     * can be publicly deactivated.
     */
    #[PA\Group('available')]
    public function testAvailabilityCanBePubliclyDeactived(): void
    {
        $boolExample = new BoolExample();

        self::assertTrue($boolExample->available);

        $boolExample->available = false;

        self::assertFalse($boolExample->available);
    }

    /**
     * Test that the availability
     * can be publicly activated.
     */
    #[PA\Group('available')]
    public function testAvailabilityCanBePubliclyActived(): void
    {
        $boolExample = new BoolExample(available: false);

        self::assertFalse($boolExample->available);

        $boolExample->available = true;

        self::assertTrue($boolExample->available);
    }
}
