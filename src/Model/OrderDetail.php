<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Model;

class OrderDetail
{
    use OrderTrait;

    protected ?CustomerDetails $customerDetails = null;
    /** @var OrderItemDetail[] */
    protected array $items = [];

    public function getCustomerDetails(): ?CustomerDetails
    {
        return $this->customerDetails;
    }

    public function setCustomerDetails(?CustomerDetails $customerDetails): self
    {
        $this->customerDetails = $customerDetails;

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
