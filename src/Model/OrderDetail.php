<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Model;

class OrderDetail
{
    use OrderTrait;

    protected ?ShipmentDetails $shipmentDetails = null;
    protected ?BillingDetails $billingDetails = null;
    /** @var OrderItemDetail[] */
    protected array $items = [];

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

    /**
     * @return OrderItemDetail[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param OrderItemDetail[] $items
     */
    public function setItems(array $items): self
    {
        $this->items = $items;

        return $this;
    }
}
