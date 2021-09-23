<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Model;

trait OrderItemTrait
{
    protected ?string $id = null;
    protected ?int $quantity = null;
    protected ?int $quantityShipped = null;
    protected ?int $quantityCancelled = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

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

    public function getQuantityShipped(): ?int
    {
        return $this->quantityShipped;
    }

    public function setQuantityShipped(?int $quantityShipped): self
    {
        $this->quantityShipped = $quantityShipped;

        return $this;
    }

    public function getQuantityCancelled(): ?int
    {
        return $this->quantityCancelled;
    }

    public function setQuantityCancelled(?int $quantityCancelled): self
    {
        $this->quantityCancelled = $quantityCancelled;

        return $this;
    }
}
