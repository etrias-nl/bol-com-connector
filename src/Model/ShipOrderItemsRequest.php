<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Model;

class ShipOrderItemsRequest
{
    /** @var ShipOrderItem[] */
    protected array $items = [];
    protected ?Transport $transport = null;

    /**
     * @return ShipOrderItem[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param ShipOrderItem[] $items
     */
    public function setItems(array $items): self
    {
        $this->items = $items;

        return $this;
    }

    public function getTransport(): ?Transport
    {
        return $this->transport;
    }

    public function setTransport(?Transport $transport): self
    {
        $this->transport = $transport;

        return $this;
    }
}
