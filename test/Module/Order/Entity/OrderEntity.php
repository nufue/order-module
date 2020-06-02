<?php declare(strict_types = 1);

namespace Project\Module\Order\Entity;

use Webspire\Module\Order\Entity\BaseOrderEntity;

final class OrderEntity extends BaseOrderEntity
{
    public function __construct($id, $vs, $totalPrice)
    {
        $this->id = $id;
        $this->vs = $vs;
        $this->totalPrice = $totalPrice;
    }
}