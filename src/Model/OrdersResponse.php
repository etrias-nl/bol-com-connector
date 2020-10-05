<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Model;

class OrdersResponse implements \IteratorAggregate
{
    /** @var Order[] */
    protected array $orders = [];

    /**
     * @return Order[]
     */
    public function getOrders(): array
    {
        return $this->orders;
    }

    /**
     * @param Order[] $orders
     */
    public function setOrders(array $orders): self
    {
        $this->orders = $orders;

        return $this;
    }

    /**
     * @return Order[]
     */
    public function getIterator(): \Traversable
    {
        return new \ArrayIterator($this->orders);
    }
}
