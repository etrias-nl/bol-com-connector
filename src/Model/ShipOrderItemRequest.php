<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Model;

class ShipOrderItemRequest
{
    protected ?string $itemId = null;
    protected ?Transport $transport = null;

    public function getItemId(): ?string
    {
        return $this->itemId;
    }

    public function setItemId(?string $itemId): self
    {
        $this->itemId = $itemId;

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
