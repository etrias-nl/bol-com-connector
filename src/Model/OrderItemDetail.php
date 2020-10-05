<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Model;

class OrderItemDetail
{
    use OrderItemTrait;

    protected ?string $title = null;
    protected ?string $offerReference = null;
    protected ?float $offerPrice = null;
    protected ?float $transactionFee = null;

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getOfferReference(): ?string
    {
        return $this->offerReference;
    }

    public function setOfferReference(?string $offerReference): self
    {
        $this->offerReference = $offerReference;

        return $this;
    }

    public function getOfferPrice(): ?float
    {
        return $this->offerPrice;
    }

    public function setOfferPrice(?float $offerPrice): self
    {
        $this->offerPrice = $offerPrice;

        return $this;
    }

    public function getTransactionFee(): ?float
    {
        return $this->transactionFee;
    }

    public function setTransactionFee(?float $transactionFee): self
    {
        $this->transactionFee = $transactionFee;

        return $this;
    }
}
