<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Model;

class ShipOrderItem
{
    protected ?string $itemId = null;
    protected ?int $quantity = null;

    public function getItemId(): ?string
    {
        return $this->itemId;
    }

    public function setItemId(?string $itemId): self
    {
        $this->itemId = $itemId;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(?int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }
}
