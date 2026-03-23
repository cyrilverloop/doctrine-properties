<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineProperties\String\Surname;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait that adds a 'surname' field to an entity.
 */
trait Surname
{
    // Properties :

    /**
     * @var string the surname.
     */
    #[ORM\Column]
    public protected(set) string $surname;
}
