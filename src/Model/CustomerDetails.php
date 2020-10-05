<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Model;

class CustomerDetails
{
    protected ?ShipmentDetails $shipmentDetails = null;
    protected ?BillingDetails $billingDetails = null;

    public function getShipmentDetails(): ?ShipmentDetails
    {
        return $this->shipmentDetails;
    }

    public function setShipmentDetails(?ShipmentDetails $shipmentDetails): self
    {
        $this->shipmentDetails = $shipmentDetails;

        return $this;
    }

    public function getBillingDetails(): ?BillingDetails
    {
        return $this->billingDetails;
    }

    public function setBillingDetails(?BillingDetails $billingDetails): self
    {
        $this->billingDetails = $billingDetails;

        return $this;
    }
}
