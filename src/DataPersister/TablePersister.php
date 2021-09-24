<?php

namespace App\DataPersister;

use ApiPlatform\Core\DataPersister\DataPersisterInterface;
use App\Entity\GameTables;
use App\Entity\TableHasPlayers;
use App\Repository\UserRepository;
use DateTimeImmutable;
use Doctrine\ORM\EntityManagerInterface;

class TablePersister implements DataPersisterInterface {

    protected $em;
    protected $userRepo;

    public function __construct(EntityManagerInterface $em, UserRepository $userRepo) {
        $this->em = $em;
        $this->userRepo = $userRepo;
    }
    public function supports($data): bool
    {
        return $data instanceof GameTables;
    }

    public function persist($data)
    {
        $data->setCreatedAt(new DateTimeImmutable());

        $link = new TableHasPlayers();
        $link->setGameTable($data);
        $link->setPlayer($this->userRepo->find(1));
        $link->setGm(1);
        $this->em->persist($link);
        $this->em->persist($data);
        $this->em->flush();
    }

    public function remove($data)
    {
        $this->em->remove($data);
        $this->em->flush();
    }
}