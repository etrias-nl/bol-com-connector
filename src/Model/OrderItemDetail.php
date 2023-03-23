<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Model;

class OrderItemDetail
{
    use OrderItemTrait;

    protected ?OfferReference $offer = null;
    protected ?Product $product = null;
    protected ?float $unitPrice = null;
    protected ?float $commission = null;

    public function getOffer(): ?OfferReference
    {
        return $this->offer;
    }

    public function setOffer(?OfferReference $offer): self
    {
        $this->offer = $offer;

        return $this;
    }

    public function getProduct(): ?Product
    {
        return $this->product;
    }

    public function setProduct(?Product $product): self
    {
        $this->product = $product;

        return $this;
    }

    public function getUnitPrice(): ?float
    {
        return $this->unitPrice;
    }

    public function setUnitPrice(?float $unitPrice): self
    {
        $this->unitPrice = $unitPrice;

        return $this;
    }

    public function getCommission(): ?float
    {
        return $this->commission;
    }

    public function setCommission(?float $commission): self
    {
        $this->commission = $commission;

        return $this;
    }
}
