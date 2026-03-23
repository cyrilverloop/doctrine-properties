<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineProperties\Int;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Trait that adds a 'priority' field to an entity.
 */
trait Priority
{
    // Properties :

    /**
     * @var int the priority.
     */
    #[ORM\Column(
        type: Types::SMALLINT,
        options: [
            "default" => 0
        ]
    )]
    public protected(set) int $priority;
}
