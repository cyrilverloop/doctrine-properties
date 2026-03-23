<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineProperties\String\Slug;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait that adds a 'slug' field to an entity.
 */
trait Slug
{
    // Properties :

    /**
     * @var string the slug.
     */
    #[ORM\Column]
    public protected(set) string $slug;
}
