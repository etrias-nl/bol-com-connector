<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Model;

class HandleReturnRequest
{
    public const RESULT_RETURN_RECEIVED = 'RETURN_RECEIVED';

    protected ?string $rmaId = null;
    protected ?string $handlingResult = null;
    protected ?int $quantityReturned = null;

    public function getRmaId(): ?string
    {
        return $this->rmaId;
    }

    public function setRmaId(?string $rmaId): self
    {
        $this->rmaId = $rmaId;

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

    public function getQuantityReturned(): ?int
    {
        return $this->quantityReturned;
    }

    public function setQuantityReturned(?int $quantityReturned): self
    {
        $this->quantityReturned = $quantityReturned;

        return $this;
    }
}
