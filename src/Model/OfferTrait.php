<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Model;

trait OfferTrait
{
    protected ?string $ean = null;
    protected ?Condition $condition = null;
    protected ?string $reference = null;
    protected ?bool $onHoldByRetailer = null;
    protected ?string $unknownProductTitle = null;
    protected ?Pricing $pricing = null;
    protected ?Stock $stock = null;
    protected ?Fulfilment $fulfilment = null;

    public function getEan(): ?string
    {
        return $this->ean;
    }

    public function setEan(?string $ean): self
    {
        $this->ean = $ean;

        return $this;
    }

    public function getCondition(): ?Condition
    {
        return $this->condition;
    }

    public function setCondition(?Condition $condition): self
    {
        $this->condition = $condition;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(?string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getOnHoldByRetailer(): ?bool
    {
        return $this->onHoldByRetailer;
    }

    public function setOnHoldByRetailer(?bool $onHoldByRetailer): self
    {
        $this->onHoldByRetailer = $onHoldByRetailer;

        return $this;
    }

    public function getUnknownProductTitle(): ?string
    {
        return $this->unknownProductTitle;
    }

    public function setUnknownProductTitle(?string $unknownProductTitle): self
    {
        $this->unknownProductTitle = $unknownProductTitle;

        return $this;
    }

    public function getPricing(): ?Pricing
    {
        return $this->pricing;
    }

    public function setPricing(?Pricing $pricing): self
    {
        $this->pricing = $pricing;

        return $this;
    }

    public function getStock(): ?Stock
    {
        return $this->stock;
    }

    public function setStock(?Stock $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    public function getFulfilment(): ?Fulfilment
    {
        return $this->fulfilment;
    }

    public function setFulfilment(?Fulfilment $fulfilment): self
    {
        $this->fulfilment = $fulfilment;

        return $this;
    }
}
