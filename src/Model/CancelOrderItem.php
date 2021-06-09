<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Model;

class CancelOrderItem
{
    public const REASON_OUT_OF_STOCK = 'OUT_OF_STOCK';
    public const REASON_REQUESTED_BY_CUSTOMER = 'REQUESTED_BY_CUSTOMER';

    protected ?string $itemId = null;
    protected ?string $reasonCode = null;

    public function getItemId(): ?string
    {
        return $this->itemId;
    }

    public function setItemId(?string $itemId): self
    {
        $this->itemId = $itemId;

        return $this;
    }

    public function getReasonCode(): ?string
    {
        return $this->reasonCode;
    }

    public function setReasonCode(?string $reasonCode): self
    {
        $this->reasonCode = $reasonCode;

        return $this;
    }
}
