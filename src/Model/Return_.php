<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Model;

class Return_
{
    protected ?string $rmaId = null;
    protected ?string $orderId = null;
    protected ?string $ean = null;
    protected ?int $quantity = null;
    protected ?\DateTimeInterface $registeredAt = null;
    protected ?string $reason = null;
    protected ?string $reasonComments = null;
    protected ?string $fulfilmentMethod = null;
    protected ?bool $handled = null;
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

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(?int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getRegisteredAt(): ?\DateTimeInterface
    {
        return $this->registeredAt;
    }

    public function setRegisteredAt(?\DateTimeInterface $registeredAt): self
    {
        $this->registeredAt = $registeredAt;

        return $this;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function setReason(?string $reason): self
    {
        $this->reason = $reason;

        return $this;
    }

    public function getReasonComments(): ?string
    {
        return $this->reasonComments;
    }

    public function setReasonComments(?string $reasonComments): self
    {
        $this->reasonComments = $reasonComments;

        return $this;
    }

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
