<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineProperties;

/**
 * An interface for integer id.
 *
 * @psalm-api
 */
interface IntIdInterface
{
    // Properties :

    public ?int $id { set; }
}
