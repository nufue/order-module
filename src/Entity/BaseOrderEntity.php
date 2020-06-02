<?php declare(strict_types = 1);

namespace Webspire\Module\Order\Entity;

abstract class BaseOrderEntity
{
    /** @var string */
    protected $id;

    /** @var string */
    protected $vs;

    /** @var float */
    protected $totalPrice;

    public function __construct($id, $vs, $totalPrice)
    {
        $this->id = $id;
        $this->vs = $vs;
        $this->totalPrice = $totalPrice;
    }
}