<?php

declare(strict_types=1);

namespace Sbooker\PersistentPointer;

use Doctrine\DBAL\LockMode;
use Doctrine\ORM\EntityRepository;

class PersistentPointerDoctrineRepository extends EntityRepository implements PointerStorage
{
    public function add(Pointer $pointer): void
    {
        $this->getEntityManager()->persist($pointer);
    }

    public function getAndLock(string $name): ?Pointer
    {
        return $this->find($name, LockMode::PESSIMISTIC_WRITE);
    }
}