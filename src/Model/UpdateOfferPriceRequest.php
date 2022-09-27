<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Model;

class UpdateOfferPriceRequest
{
    protected ?Pricing $pricing = null;

    public function getPricing(): ?Pricing
    {
        return $this->pricing;
    }

    public function setPricing(?Pricing $pricing): self
    {
        $this->pricing = $pricing;

        return $this;
    }
}
