<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineProperties\String\Email;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait that adds an 'email' field to an entity.
 */
trait Email
{
    // Properties :

    /**
     * @var string the email.
     */
    #[ORM\Column]
    public protected(set) string $email;
}
