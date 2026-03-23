<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineProperties\String\Lastname;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait that adds a 'lastname' field to an entity.
 */
trait Lastname
{
    // Properties :

    /**
     * @var string the lastname.
     */
    #[ORM\Column]
    public protected(set) string $lastname;
}
