<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Model;

class UpdateOfferRequest
{
    protected ?string $reference = null;
    protected ?bool $onHoldByRetailer = null;
    protected ?string $unknownProductTitle = null;
    protected ?Fulfilment $fulfilment = null;

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
