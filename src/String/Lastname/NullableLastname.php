<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineProperties\String\Lastname;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait that adds a nullable 'lastname' field to an entity.
 */
trait NullableLastname
{
    // Properties :

    /**
     * @var null|string the lastname.
     */
    #[ORM\Column(nullable: true)]
    public protected(set) ?string $lastname;
}
