<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Model;

class ReturnItemProcessingResult
{
    protected ?int $quantity = null;

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
