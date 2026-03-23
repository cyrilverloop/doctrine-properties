<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineProperties\String\Firstname;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait that adds a 'firstname' field to an entity.
 */
trait Firstname
{
    // Properties :

    /**
     * @var string the firstname.
     */
    #[ORM\Column]
    public protected(set) string $firstname;
}
