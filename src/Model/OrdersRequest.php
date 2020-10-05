<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Model;

class OrdersRequest
{
    use CollectionRequestTrait;

    protected ?string $fulfilmentMethod = null;

    public function getFulfilmentMethod(): ?string
    {
        return $this->fulfilmentMethod;
    }

    public function setFulfilmentMethod(?string $fulfilmentMethod): self
    {
        $this->fulfilmentMethod = $fulfilmentMethod;

        return $this;
    }
}
