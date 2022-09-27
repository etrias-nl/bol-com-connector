<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Model;

class BundlePrice
{
    protected ?int $quantity = null;
    /** @var numeric|null */
    protected $unitPrice = null;

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(?int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return numeric|null
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * @param numeric|null $unitPrice
     */
    public function setUnitPrice($unitPrice): self
    {
        $this->unitPrice = $unitPrice;

        return $this;
    }
}
