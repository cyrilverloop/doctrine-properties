<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineProperties\String\Slug;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait that adds a nullable 'slug' field to an entity.
 */
trait NullableSlug
{
    // Properties :

    /**
     * @var null|string the slug.
     */
    #[ORM\Column(nullable: true)]
    public protected(set) ?string $slug;
}
