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
            1 => $this->createEntity(1, '201900001', 300),
            2 => $this->createEntity(2, '202000001', 100),
            3 => $this->createEntity(3, '202000002', 1500),
        ];
    }

    protected function createEntity($id, $vs, $totalPrice): OrderEntity
    {
        return new OrderEntity($id, $vs, $totalPrice);
    }
}