<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Model;

class ReturnItem
{
    protected ?string $rmaId = null;
    protected ?string $orderId = null;
    protected ?string $ean = null;
    protected ?int $expectedQuantity = null;
    protected ?ReturnReason $reason = null;
    protected ?bool $handled = null;
    /** @var ReturnItemProcessingResult[] */
    protected array $processingResults = [];
    protected ?string $trackAndTrace = null;

    public function getRmaId(): ?string
    {
        return $this->rmaId;
    }

    public function setRmaId(?string $rmaId): self
    {
        $this->rmaId = $rmaId;

        return $this;
    }

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function setOrderId(?string $orderId): self
    {
        $this->orderId = $orderId;

        return $this;
    }

    public function getEan(): ?string
    {
        return $this->ean;
    }

    public function setEan(?string $ean): self
    {
        $this->ean = $ean;

        return $this;
    }

    public function getExpectedQuantity(): ?int
    {
        return $this->expectedQuantity;
    }

    public function setExpectedQuantity(?int $expectedQuantity): self
    {
        $this->expectedQuantity = $expectedQuantity;

        return $this;
    }

    public function getReason(): ?ReturnReason
    {
        return $this->reason;
    }

    public function setReason(?ReturnReason $reason): self
    {
        $this->reason = $reason;

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

    /**
     * @return ReturnItemProcessingResult[]
     */
    public function getProcessingResults(): array
    {
        return $this->processingResults;
    }

    /**
     * @param ReturnItemProcessingResult[] $processingResults
     */
    public function setProcessingResults(array $processingResults): self
    {
        $this->processingResults = $processingResults;

        return $this;
    }

    public function getTrackAndTrace(): ?string
    {
        return $this->trackAndTrace;
    }

    public function setTrackAndTrace(?string $trackAndTrace): self
    {
        $this->trackAndTrace = $trackAndTrace;

        return $this;
    }
}
