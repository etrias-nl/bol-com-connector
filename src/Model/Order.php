<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Model;

class Order
{
    use OrderTrait;

    /** @var OrderItem[] */
    protected array $items = [];

    /**
     * @return OrderItem[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param OrderItem[] $items
     */
    public function setItems(array $items): self
    {
        $this->items = $items;

        return $this;
    }
}
