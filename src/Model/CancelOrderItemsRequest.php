<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Model;

class CancelOrderItemsRequest
{
    /** @var CancelOrderItem[] */
    protected array $items = [];

    /**
     * @return CancelOrderItem[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param CancelOrderItem[] $items
     */
    public function setItems(array $items): self
    {
        $this->items = $items;

        return $this;
    }
}
