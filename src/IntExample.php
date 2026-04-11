<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineProperties;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Example class to add int fields to an entity.
 *
 * @psalm-api
 */
class IntExample
{
    // Magic methods :

    /**
     * The constructor.
     * @param int $priority the priority.
     */
    public function __construct(
        #[ORM\Column(
            type: Types::SMALLINT,
            options: [
                "default" => 0
            ]
        )]
        public int $priority = 0
    ) {
    }
}
