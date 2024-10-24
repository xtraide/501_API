<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\ConferenceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ConferenceRepository::class)]
#[ApiResource]
class Conference
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $master = null;

    #[ORM\Column(length: 255)]
    private ?string $t_start = null;

    #[ORM\Column(length: 255)]
    private ?string $t_end = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 255)]
    private ?string $content = null;

    #[ORM\Column(length: 255)]
    private ?string $room = null;

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

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): static
    {
        $this->content = $content;

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
}
