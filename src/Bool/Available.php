<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineProperties\Bool;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait that adds an 'available' field to an entity.
 */
trait Available
{
    // Properties :

    /**
     * @var bool true if available, else false.
     */
    #[ORM\Column]
    public protected(set) bool $available;
}
