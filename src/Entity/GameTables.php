<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\GameTablesRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(normalizationContext = {"groups" = {"table:read"}})
 * @ORM\Entity(repositoryClass=GameTablesRepository::class)
 */
class GameTables
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"table:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"table:read"})
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity=TableHasPlayers::class, mappedBy="game_table", orphanRemoval=true)
     * @Groups({"table:read"})
     */
    private $tableHasPlayers;

    /**
     * @ORM\Column(type="datetime_immutable")
     * @Groups({"table:read"})
     */
    private $created_at;

    /**
     * @ORM\OneToMany(targetEntity=GameCharacters::class, mappedBy="gameTable", orphanRemoval=true)
     */
    private $gameCharacters;

    public function __construct()
    {
        $this->tableHasPlayers = new ArrayCollection();
        $this->gameCharacters = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection|TableHasPlayers[]
     */
    public function getTableHasPlayers(): Collection
    {
        return $this->tableHasPlayers;
    }

    public function addTableHasPlayer(TableHasPlayers $tableHasPlayer): self
    {
        if (!$this->tableHasPlayers->contains($tableHasPlayer)) {
            $this->tableHasPlayers[] = $tableHasPlayer;
            $tableHasPlayer->setGameTable($this);
        }

        return $this;
    }

    public function removeTableHasPlayer(TableHasPlayers $tableHasPlayer): self
    {
        if ($this->tableHasPlayers->removeElement($tableHasPlayer)) {
            // set the owning side to null (unless already changed)
            if ($tableHasPlayer->getGameTable() === $this) {
                $tableHasPlayer->setGameTable(null);
            }
        }

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * @return Collection|GameCharacters[]
     */
    public function getGameCharacters(): Collection
    {
        return $this->gameCharacters;
    }

    public function addGameCharacter(GameCharacters $gameCharacter): self
    {
        if (!$this->gameCharacters->contains($gameCharacter)) {
            $this->gameCharacters[] = $gameCharacter;
            $gameCharacter->setGameTable($this);
        }

        return $this;
    }

    public function removeGameCharacter(GameCharacters $gameCharacter): self
    {
        if ($this->gameCharacters->removeElement($gameCharacter)) {
            // set the owning side to null (unless already changed)
            if ($gameCharacter->getGameTable() === $this) {
                $gameCharacter->setGameTable(null);
            }
        }

        return $this;
    }
}
