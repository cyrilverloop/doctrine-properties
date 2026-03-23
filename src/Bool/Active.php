<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineProperties\Bool;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait that adds an 'active' field to an entity.
 */
trait Active
{
    // Properties :

    /**
     * @var bool true if active, else false.
     */
    #[ORM\Column]
    public protected(set) bool $active;
}
