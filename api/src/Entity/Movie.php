<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ApiResource(mercure: true)]
#[ORM\Entity]
class Movie
{
    #[ORM\Id]
    #[ORM\Column]
    #[ORM\GeneratedValue]
    private ?int $id = null;

    #[ORM\Column]
    public string $title = '';

    #[ORM\Column]
    public int $year = 0;

    #[ORM\Column(nullable: true)]
    public ?int $duration = null;

    public function getId(): ?int
    {
        return $this->id;
    }

}
