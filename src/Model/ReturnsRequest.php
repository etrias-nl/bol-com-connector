<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Model;

class ReturnsRequest
{
    use CollectionRequestTrait;

    protected ?string $fulfilmentMethod = null;
    protected ?bool $handled = null;

    public function getFulfilmentMethod(): ?string
    {
        return $this->fulfilmentMethod;
    }

    public function setFulfilmentMethod(?string $fulfilmentMethod): self
    {
        $this->fulfilmentMethod = $fulfilmentMethod;

        return $this;
    }

    public function isHandled(): ?bool
    {
        return $this->handled;
    }

    public function setHandled(?bool $handled): self
    {
        $this->handled = $handled;

        return $this;
    }
}
