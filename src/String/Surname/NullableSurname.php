<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineProperties\String\Surname;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait that adds a nullable 'surname' field to an entity.
 */
trait NullableSurname
{
    // Properties :

    /**
     * @var null|string the surname.
     */
    #[ORM\Column(nullable: true)]
    public protected(set) ?string $surname;
}
