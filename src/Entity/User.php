<?php

namespace App\Entity;

use App\Controller\MeController;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\UserRepository;
use ApiPlatform\Core\Action\NotFoundAction;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     * @Groups({"table:read"})
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\OneToMany(targetEntity=TableHasPlayers::class, mappedBy="player", orphanRemoval=true)
     */
    private $tableHasPlayers;

    /**
     * @ORM\OneToMany(targetEntity=GameCharacters::class, mappedBy="player")
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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
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
            $tableHasPlayer->setPlayer($this);
        }

        return $this;
    }

    public function removeTableHasPlayer(TableHasPlayers $tableHasPlayer): self
    {
        if ($this->tableHasPlayers->removeElement($tableHasPlayer)) {
            // set the owning side to null (unless already changed)
            if ($tableHasPlayer->getPlayer() === $this) {
                $tableHasPlayer->setPlayer(null);
            }
        }

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
            $gameCharacter->setPlayer($this);
        }

        return $this;
    }

    public function removeGameCharacter(GameCharacters $gameCharacter): self
    {
        if ($this->gameCharacters->removeElement($gameCharacter)) {
            // set the owning side to null (unless already changed)
            if ($gameCharacter->getPlayer() === $this) {
                $gameCharacter->setPlayer(null);
            }
        }

        return $this;
    }
}
