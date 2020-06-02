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
}