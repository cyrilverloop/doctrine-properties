<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineProperties;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Example class to add string fields to an entity.
 */
class StringExample
{
    // Magic methods :

    /**
     * The constructor.
     * @param string $description the description.
     * @param string $email the email.
     * @param string $firstname the firstname.
     * @param string $lastname the lastname.
     * @param string $name the name.
     * @param string $slug the slug.
     * @param string $surname the surname.
     */
    public function __construct(
        #[ORM\Column(type: Types::TEXT)]
        public string $description = '',

        #[ORM\Column]
        public string $email = '',

        #[ORM\Column]
        public string $firstname = '',

        #[ORM\Column]
        public string $lastname = '',

        #[ORM\Column]
        public string $name = '',

        #[ORM\Column]
        public string $slug = '',

        #[ORM\Column]
        public string $surname = ''
    ) {
    }
}
