<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineProperties\String\Name;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait that adds a 'name' field to an entity.
 */
trait Name
{
    // Properties :

    /**
     * @var string the name.
     */
    #[ORM\Column]
    public protected(set) string $name;
}
