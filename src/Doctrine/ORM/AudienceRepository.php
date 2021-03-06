<?php

declare(strict_types=1);

namespace Setono\SyliusMailchimpPlugin\Doctrine\ORM;

use Doctrine\ORM\NonUniqueResultException;
use Setono\SyliusMailchimpPlugin\Model\AudienceInterface;
use Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository;
use Sylius\Component\Channel\Model\ChannelInterface;

class AudienceRepository extends EntityRepository implements AudienceRepositoryInterface
{
    /**
     * @throws NonUniqueResultException
     */
    public function findOneByAudienceId(string $id): ?AudienceInterface
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.audienceId = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

    /**
     * @throws NonUniqueResultException
     */
    public function findOneByChannel(ChannelInterface $channel): ?AudienceInterface
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.channel = :channel')
            ->setParameter('channel', $channel)
            ->getQuery()
            ->getOneOrNullResult()
            ;
    }
}
