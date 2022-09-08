<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Model;

class Offer
{
    use OfferTrait;

    protected ?string $offerId = null;

    public function getOfferId(): ?string
    {
        return $this->offerId;
    }

    public function setOfferId(?string $offerId): self
    {
        $this->offerId = $offerId;

        return $this;
    }
}
