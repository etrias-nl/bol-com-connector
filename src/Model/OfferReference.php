<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Model;

class OfferReference
{
    protected ?string $reference = null;

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(?string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }
}
