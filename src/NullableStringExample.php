<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineProperties;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Example class to add nullable string fields to an entity.
 *
 * @psalm-api
 */
class NullableStringExample
{
    // Magic methods :

    /**
     * The constructor.
     * @param string|null $description the description.
     * @param string|null $email the email.
     * @param string|null $firstname the firstname.
     * @param string|null $lastname the lastname.
     * @param string|null $name the name.
     * @param string|null $slug the slug.
     * @param string|null $surname the surname.
     */
    public function __construct(
        /** @infection-ignore-all */
        #[ORM\Column(type: Types::TEXT, nullable: true)]
        public ?string $description = null,

        /** @infection-ignore-all */
        #[ORM\Column(nullable: true)]
        public ?string $email = null,

        /** @infection-ignore-all */
        #[ORM\Column(nullable: true)]
        public ?string $firstname = null,

        /** @infection-ignore-all */
        #[ORM\Column(nullable: true)]
        public ?string $lastname = null,

        /** @infection-ignore-all */
        #[ORM\Column(nullable: true)]
        public ?string $name = null,

        /** @infection-ignore-all */
        #[ORM\Column(nullable: true)]
        public ?string $slug = null,

        /** @infection-ignore-all */
        #[ORM\Column(nullable: true)]
        public ?string $surname = null
    ) {
    }
}
