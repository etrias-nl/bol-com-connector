<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Model;

class ShipmentDetails
{
    use AddresseeTrait;

    protected ?string $deliveryPhoneNumber = null;

    public function getDeliveryPhoneNumber(): ?string
    {
        return $this->deliveryPhoneNumber;
    }

    public function setDeliveryPhoneNumber(?string $deliveryPhoneNumber): self
    {
        $this->deliveryPhoneNumber = $deliveryPhoneNumber;

        return $this;
    }
}
