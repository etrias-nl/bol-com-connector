<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Model;

class OrdersRequest
{
    use CollectionRequestTrait;

    public const STATUS_OPEN = 'OPEN';
    public const STATUS_ALL = 'ALL';

    protected ?string $fulfilmentMethod = null;
    protected ?string $status = null;

    public function getFulfilmentMethod(): ?string
    {
        return $this->fulfilmentMethod;
    }

    public function setFulfilmentMethod(?string $fulfilmentMethod): self
    {
        $this->fulfilmentMethod = $fulfilmentMethod;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }
}
