<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Model;

trait OrderItemTrait
{
    protected ?string $id = null;
    protected ?string $ean = null;
    protected ?bool $cancelRequest = null;
    protected ?int $quantity = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getEan(): ?string
    {
        return $this->ean;
    }

    public function setEan(?string $ean): self
    {
        $this->ean = $ean;

        return $this;
    }

    public function isCancelRequest(): ?bool
    {
        return $this->cancelRequest;
    }

    public function setCancelRequest(?bool $cancelRequest): self
    {
        $this->cancelRequest = $cancelRequest;

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
