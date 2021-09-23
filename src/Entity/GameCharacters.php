<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\GameCharactersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=GameCharactersRepository::class)
 */
class GameCharacters
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity=Families::class, inversedBy="gameCharacters")
     */
    private $family;

    /**
     * @ORM\Column(type="integer")
     */
    private $experience;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="gameCharacters")
     */
    private $player;

    /**
     * @ORM\ManyToOne(targetEntity=GameTables::class, inversedBy="gameCharacters")
     * @ORM\JoinColumn(nullable=false)
     */
    private $gameTable;

    /**
     * @ORM\Column(type="boolean")
     */
    private $npc;

    /**
     * @ORM\Column(type="integer")
     */
    private $wound;

    /**
     * @ORM\Column(type="integer")
     */
    private $strengh;

    /**
     * @ORM\Column(type="integer")
     */
    private $fight;

    /**
     * @ORM\Column(type="integer")
     */
    private $handiwork;

    /**
     * @ORM\Column(type="integer")
     */
    private $sport;

    /**
     * @ORM\Column(type="integer")
     */
    private $dexterity;

    /**
     * @ORM\Column(type="integer")
     */
    private $guns;

    /**
     * @ORM\Column(type="integer")
     */
    private $throwable;

    /**
     * @ORM\Column(type="integer")
     */
    private $furtivity;

    /**
     * @ORM\Column(type="integer")
     */
    private $piloting;

    /**
     * @ORM\Column(type="integer")
     */
    private $stress;

    /**
     * @ORM\Column(type="integer")
     */
    private $manipulation;

    /**
     * @ORM\Column(type="integer")
     */
    private $corruption;

    /**
     * @ORM\Column(type="integer")
     */
    private $games;

    /**
     * @ORM\Column(type="integer")
     */
    private $subterfuge;

    /**
     * @ORM\Column(type="integer")
     */
    private $appearance;

    /**
     * @ORM\Column(type="integer")
     */
    private $charisma;

    /**
     * @ORM\Column(type="integer")
     */
    private $commanding;

    /**
     * @ORM\Column(type="integer")
     */
    private $protocol;

    /**
     * @ORM\Column(type="integer")
     */
    private $empathy;

    /**
     * @ORM\Column(type="integer")
     */
    private $animals;

    /**
     * @ORM\Column(type="integer")
     */
    private $diplomaty;

    /**
     * @ORM\Column(type="integer")
     */
    private $psychology;

    /**
     * @ORM\Column(type="integer")
     */
    private $trauma;

    /**
     * @ORM\Column(type="integer")
     */
    private $perception;

    /**
     * @ORM\Column(type="integer")
     */
    private $information;

    /**
     * @ORM\Column(type="integer")
     */
    private $investigation;

    /**
     * @ORM\Column(type="integer")
     */
    private $vigilance;

    /**
     * @ORM\Column(type="integer")
     */
    private $intelligence;

    /**
     * @ORM\Column(type="integer")
     */
    private $informatic;

    /**
     * @ORM\Column(type="integer")
     */
    private $medicine;

    /**
     * @ORM\Column(type="integer")
     */
    private $knowledge;

    /**
     * @ORM\Column(type="integer")
     */
    private $ingenuity;

    /**
     * @ORM\Column(type="integer")
     */
    private $engineering;

    /**
     * @ORM\Column(type="integer")
     */
    private $street;

    /**
     * @ORM\Column(type="integer")
     */
    private $survive;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private $created_at;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getFamily(): ?Families
    {
        return $this->family;
    }

    public function setFamily(?Families $family): self
    {
        $this->family = $family;

        return $this;
    }

    public function getExperience(): ?int
    {
        return $this->experience;
    }

    public function setExperience(int $experience): self
    {
        $this->experience = $experience;

        return $this;
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
        return $this->gameTable;
    }

    public function setGameTable(?GameTables $gameTable): self
    {
        $this->gameTable = $gameTable;

        return $this;
    }

    public function getNpc(): ?bool
    {
        return $this->npc;
    }

    public function setNpc(bool $npc): self
    {
        $this->npc = $npc;

        return $this;
    }

    public function getWound(): ?int
    {
        return $this->wound;
    }

    public function setWound(int $wound): self
    {
        $this->wound = $wound;

        return $this;
    }

    public function getStrengh(): ?int
    {
        return $this->strengh;
    }

    public function setStrengh(int $strengh): self
    {
        $this->strengh = $strengh;

        return $this;
    }

    public function getFight(): ?int
    {
        return $this->fight;
    }

    public function setFight(int $fight): self
    {
        $this->fight = $fight;

        return $this;
    }

    public function getHandiwork(): ?int
    {
        return $this->handiwork;
    }

    public function setHandiwork(int $handiwork): self
    {
        $this->handiwork = $handiwork;

        return $this;
    }

    public function getSport(): ?int
    {
        return $this->sport;
    }

    public function setSport(int $sport): self
    {
        $this->sport = $sport;

        return $this;
    }

    public function getDexterity(): ?int
    {
        return $this->dexterity;
    }

    public function setDexterity(int $dexterity): self
    {
        $this->dexterity = $dexterity;

        return $this;
    }

    public function getGuns(): ?int
    {
        return $this->guns;
    }

    public function setGuns(int $guns): self
    {
        $this->guns = $guns;

        return $this;
    }

    public function getThrowable(): ?int
    {
        return $this->throwable;
    }

    public function setThrowable(int $throwable): self
    {
        $this->throwable = $throwable;

        return $this;
    }

    public function getFurtivity(): ?int
    {
        return $this->furtivity;
    }

    public function setFurtivity(int $furtivity): self
    {
        $this->furtivity = $furtivity;

        return $this;
    }

    public function getPiloting(): ?int
    {
        return $this->piloting;
    }

    public function setPiloting(int $piloting): self
    {
        $this->piloting = $piloting;

        return $this;
    }

    public function getStress(): ?int
    {
        return $this->stress;
    }

    public function setStress(int $stress): self
    {
        $this->stress = $stress;

        return $this;
    }

    public function getManipulation(): ?int
    {
        return $this->manipulation;
    }

    public function setManipulation(int $manipulation): self
    {
        $this->manipulation = $manipulation;

        return $this;
    }

    public function getCorruption(): ?int
    {
        return $this->corruption;
    }

    public function setCorruption(int $corruption): self
    {
        $this->corruption = $corruption;

        return $this;
    }

    public function getGames(): ?int
    {
        return $this->games;
    }

    public function setGames(int $games): self
    {
        $this->games = $games;

        return $this;
    }

    public function getSubterfuge(): ?int
    {
        return $this->subterfuge;
    }

    public function setSubterfuge(int $subterfuge): self
    {
        $this->subterfuge = $subterfuge;

        return $this;
    }

    public function getAppearance(): ?int
    {
        return $this->appearance;
    }

    public function setAppearance(int $appearance): self
    {
        $this->appearance = $appearance;

        return $this;
    }

    public function getCharisma(): ?int
    {
        return $this->charisma;
    }

    public function setCharisma(int $charisma): self
    {
        $this->charisma = $charisma;

        return $this;
    }

    public function getCommanding(): ?int
    {
        return $this->commanding;
    }

    public function setCommanding(int $commanding): self
    {
        $this->commanding = $commanding;

        return $this;
    }

    public function getProtocol(): ?int
    {
        return $this->protocol;
    }

    public function setProtocol(int $protocol): self
    {
        $this->protocol = $protocol;

        return $this;
    }

    public function getEmpathy(): ?int
    {
        return $this->empathy;
    }

    public function setEmpathy(int $empathy): self
    {
        $this->empathy = $empathy;

        return $this;
    }

    public function getAnimals(): ?int
    {
        return $this->animals;
    }

    public function setAnimals(int $animals): self
    {
        $this->animals = $animals;

        return $this;
    }

    public function getDiplomaty(): ?int
    {
        return $this->diplomaty;
    }

    public function setDiplomaty(int $diplomaty): self
    {
        $this->diplomaty = $diplomaty;

        return $this;
    }

    public function getPsychology(): ?int
    {
        return $this->psychology;
    }

    public function setPsychology(int $psychology): self
    {
        $this->psychology = $psychology;

        return $this;
    }

    public function getTrauma(): ?int
    {
        return $this->trauma;
    }

    public function setTrauma(int $trauma): self
    {
        $this->trauma = $trauma;

        return $this;
    }

    public function getPerception(): ?int
    {
        return $this->perception;
    }

    public function setPerception(int $perception): self
    {
        $this->perception = $perception;

        return $this;
    }

    public function getInformation(): ?int
    {
        return $this->information;
    }

    public function setInformation(int $information): self
    {
        $this->information = $information;

        return $this;
    }

    public function getInvestigation(): ?int
    {
        return $this->investigation;
    }

    public function setInvestigation(int $investigation): self
    {
        $this->investigation = $investigation;

        return $this;
    }

    public function getVigilance(): ?int
    {
        return $this->vigilance;
    }

    public function setVigilance(int $vigilance): self
    {
        $this->vigilance = $vigilance;

        return $this;
    }

    public function getIntelligence(): ?int
    {
        return $this->intelligence;
    }

    public function setIntelligence(int $intelligence): self
    {
        $this->intelligence = $intelligence;

        return $this;
    }

    public function getInformatic(): ?int
    {
        return $this->informatic;
    }

    public function setInformatic(int $informatic): self
    {
        $this->informatic = $informatic;

        return $this;
    }

    public function getMedicine(): ?int
    {
        return $this->medicine;
    }

    public function setMedicine(int $medicine): self
    {
        $this->medicine = $medicine;

        return $this;
    }

    public function getKnowledge(): ?int
    {
        return $this->knowledge;
    }

    public function setKnowledge(int $knowledge): self
    {
        $this->knowledge = $knowledge;

        return $this;
    }

    public function getIngenuity(): ?int
    {
        return $this->ingenuity;
    }

    public function setIngenuity(int $ingenuity): self
    {
        $this->ingenuity = $ingenuity;

        return $this;
    }

    public function getEngineering(): ?int
    {
        return $this->engineering;
    }

    public function setEngineering(int $engineering): self
    {
        $this->engineering = $engineering;

        return $this;
    }

    public function getStreet(): ?int
    {
        return $this->street;
    }

    public function setStreet(int $street): self
    {
        $this->street = $street;

        return $this;
    }

    public function getSurvive(): ?int
    {
        return $this->survive;
    }

    public function setSurvive(int $survive): self
    {
        $this->survive = $survive;

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
}
