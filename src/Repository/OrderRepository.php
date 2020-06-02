<?php declare(strict_types = 1);

namespace Webspire\Module\Order\Repository;

use Project\Module\Order\Entity\OrderEntity;

final class OrderRepository
{
    /**
     * @return array|OrderEntity[]
     */
    public function findAll(): array
    {
        return [
            1 => new OrderEntity(1, '201900001', 500),
            2 => new OrderEntity(2, '202000001', 100),
            3 => new OrderEntity(3, '202000002', 1500),
        ];
    }
}