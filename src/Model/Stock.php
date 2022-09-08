<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Model;

class Stock
{
    protected ?int $amount = null;
    protected ?bool $managedByRetailer = null;

    public function getAmount(): ?int
    {
        return $this->amount;
    }

    public function setAmount(?int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getManagedByRetailer(): ?bool
    {
        return $this->managedByRetailer;
    }

    public function setManagedByRetailer(?bool $managedByRetailer): self
    {
        $this->managedByRetailer = $managedByRetailer;

        return $this;
    }
}
