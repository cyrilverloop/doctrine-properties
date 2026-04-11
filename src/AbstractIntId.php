<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineProperties;

use Doctrine\ORM\Mapping as ORM;

/**
 * A mapped superclass with an integer
 * as identifier/primary key.
 *
 * @psalm-api
 */
#[ORM\MappedSuperclass]
abstract class AbstractIntId implements IntIdInterface
{
    // Properties :

    /**
     * @var int|null the identifier/primary key.
     */
    #[ORM\Id]
    #[ORM\Column(
        options: ["unsigned" => true]
    )]
    #[ORM\GeneratedValue(strategy: "AUTO")]
    public ?int $id {
        set {
            if(
                $value !== null
                && $value < 1
            ) {
                throw new \DomainException('The identifier must be null or an integer greater than 0.');
            }

            $this->id = $value;
        }
    }


    // Magic methods :

    /**
     * The constructor.
     */
    public function __construct()
    {
        $this->id = null;
    }
}
