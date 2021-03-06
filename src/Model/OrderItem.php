<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Model;

class OrderItem
{
    use OrderItemTrait;

    protected ?string $ean = null;

    public function getEan(): ?string
    {
        return $this->ean;
    }

    public function setEan(?string $ean): self
    {
        $this->ean = $ean;

        return $this;
    }
}
