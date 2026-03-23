<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineProperties\Int;

/**
 * An interface for integer id.
 *
 * @psalm-api
 */
interface IntIdInterface
{
    // Properties :

    public ?int $id { get; }
}
