<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineProperties\Int;

use Doctrine\ORM\Mapping as ORM;

/**
 * A trait that adds an integer 'id'
 * as identifier/primary key.
 */
trait IntId
{
    // Properties :

    /**
     * @var null|int the identifier/primary key.
     */
    #[ORM\Id]
    #[ORM\Column(
        options: ["unsigned" => true]
    )]
    #[ORM\GeneratedValue(strategy: "AUTO")]
    public protected(set) ?int $id;
}
