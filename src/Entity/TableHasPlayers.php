<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\TableHasPlayersRepository;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=TableHasPlayersRepository::class)
 */
class TableHasPlayers
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="tableHasPlayers")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"table:read"})
     */
    private $player;

    /**
     * @ORM\ManyToOne(targetEntity=GameTables::class, inversedBy="tableHasPlayers")
     * @ORM\JoinColumn(nullable=false)
     */
    private $game_table;

    /**
     * @ORM\Column(type="boolean")
     */
    private $gm;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPlayer(): ?User
    {
        return $this->player;
    }

    public function setPlayer(?User $player): self
    {
        $this->player = $player;

        return $this;
    }

    public function getGameTable(): ?GameTables
    {
        return $this->game_table;
    }

    public function setGameTable(?GameTables $game_table): self
    {
        $this->game_table = $game_table;

        return $this;
    }

    public function getGm(): ?bool
    {
        return $this->gm;
    }

    public function setGm(bool $gm): self
    {
        $this->gm = $gm;

        return $this;
    }
}
