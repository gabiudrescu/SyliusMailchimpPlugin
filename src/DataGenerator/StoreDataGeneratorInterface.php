<?php

declare(strict_types=1);

namespace Setono\SyliusMailchimpPlugin\DataGenerator;

use Setono\SyliusMailchimpPlugin\Model\AudienceInterface;

interface StoreDataGeneratorInterface extends DataGeneratorInterface
{
    public function generate(AudienceInterface $audience): array;
}
