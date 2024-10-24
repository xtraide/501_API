<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\CondferenceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CondferenceRepository::class)]
#[ApiResource]
class Condference
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $master = null;

    #[ORM\Column(length: 255)]
    private ?string $room = null;

    #[ORM\Column(length: 255)]
    private ?string $t_start = null;

    #[ORM\Column(length: 255)]
    private ?string $t_end = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMaster(): ?string
    {
        return $this->master;
    }

    public function setMaster(string $master): static
    {
        $this->master = $master;

        return $this;
    }

    public function getRoom(): ?string
    {
        return $this->room;
    }

    public function setRoom(string $room): static
    {
        $this->room = $room;

        return $this;
    }

    public function getTStart(): ?string
    {
        return $this->t_start;
    }

    public function setTStart(string $t_start): static
    {
        $this->t_start = $t_start;

        return $this;
    }

    public function getTEnd(): ?string
    {
        return $this->t_end;
    }

    public function setTEnd(string $t_end): static
    {
        $this->t_end = $t_end;

        return $this;
    }
}
