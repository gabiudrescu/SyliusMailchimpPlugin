<?php

declare(strict_types=1);

namespace Setono\SyliusMailchimpPlugin\DataGenerator;

use Setono\SyliusMailchimpPlugin\Model\OrderInterface;

interface OrderDataGeneratorInterface extends DataGeneratorInterface
{
    public function generate(OrderInterface $order): array;
}
