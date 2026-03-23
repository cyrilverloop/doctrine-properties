<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineProperties\String\Description;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Trait that adds a 'description' field to an entity.
 */
trait Description
{
    // Properties :

    /**
     * @var string the description.
     */
    #[ORM\Column(type: Types::TEXT)]
    public protected(set) string $description;
}
