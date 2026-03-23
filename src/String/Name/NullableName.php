<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineProperties\String\Name;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait that adds a nullable 'name' field to an entity.
 */
trait NullableName
{
    // Properties :

    /**
     * @var null|string the name.
     */
    #[ORM\Column(nullable: true)]
    public protected(set) ?string $name;
}
