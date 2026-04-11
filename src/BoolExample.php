<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineProperties;

use Doctrine\ORM\Mapping as ORM;

/**
 * Example class to add bool fields to an entity.
 */
class BoolExample
{
    // Magic methods :

    /**
     * The constructor.
     * @param bool $active true if active, else false.
     * @param bool $available true if available, else false.
     */
    public function __construct(
        #[ORM\Column(
            options: [
                "default" => true
            ]
        )]
        public bool $active = true,

        #[ORM\Column(
            options: [
                "default" => true
            ]
        )]
        public bool $available = true
    ) {
    }
}
