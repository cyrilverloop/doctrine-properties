<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineProperties\String\Firstname;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait that adds a nullable 'firstname' field to an entity.
 */
trait NullableFirstname
{
    // Properties :

    /**
     * @var null|string the firstname.
     */
    #[ORM\Column(nullable: true)]
    public protected(set) ?string $firstname;
}
