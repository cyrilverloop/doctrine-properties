<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineProperties\String\Description;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Trait that adds a nullable 'description' field to an entity.
 */
trait NullableDescription
{
    // Properties :

    /**
     * @var null|string the description.
     */
    #[ORM\Column(type: Types::TEXT, nullable: true)]
    public protected(set) ?string $description;
}
