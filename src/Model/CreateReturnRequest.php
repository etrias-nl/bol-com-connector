<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Model;

class CreateReturnRequest
{
    public const HANDLING_RESULT_RECEIVED = 'RETURN_RECEIVED';
    public const HANDLING_RESULT_EXCHANGE = 'EXCHANGE_PRODUCT';
    public const HANDLING_RESULT_INVALID = 'RETURN_DOES_NOT_MEET_CONDITIONS';
    public const HANDLING_RESULT_REPAIR = 'REPAIR_PRODUCT';
    public const HANDLING_RESULT_CUSTOMER_KEEPS = 'CUSTOMER_KEEPS_PRODUCT_PAID';

    protected ?string $orderItemId = null;
    protected ?int $quantityReturned = null;
    protected ?string $handlingResult = null;

    public function getOrderItemId(): ?string
    {
        return $this->orderItemId;
    }

    public function setOrderItemId(?string $orderItemId): self
    {
        $this->orderItemId = $orderItemId;

        return $this;
    }

    public function getQuantityReturned(): ?int
    {
        return $this->quantityReturned;
    }

    public function setQuantityReturned(?int $quantityReturned): self
    {
        $this->quantityReturned = $quantityReturned;

        return $this;
    }

    public function getHandlingResult(): ?string
    {
        return $this->handlingResult;
    }

    public function setHandlingResult(?string $handlingResult): self
    {
        $this->handlingResult = $handlingResult;

        return $this;
    }
}
