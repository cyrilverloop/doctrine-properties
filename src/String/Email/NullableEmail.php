<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineProperties\String\Email;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait that adds a nullable 'email' field to an entity.
 */
trait NullableEmail
{
    // Properties :

    /**
     * @var null|string the email.
     */
    #[ORM\Column(nullable: true)]
    public protected(set) ?string $email;
}
