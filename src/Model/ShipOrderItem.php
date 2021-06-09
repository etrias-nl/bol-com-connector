<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Model;

class ShipOrderItem
{
    protected ?string $itemId = null;

    public function getItemId(): ?string
    {
        return $this->itemId;
    }

    public function setItemId(?string $itemId): self
    {
        $this->itemId = $itemId;

        return $this;
    }
}
