<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Model;

class ReturnReason
{
    protected ?string $mainReason = null;
    protected ?string $detailedReason = null;
    protected ?string $customerComments = null;

    public function getMainReason(): ?string
    {
        return $this->mainReason;
    }

    public function setMainReason(?string $mainReason): self
    {
        $this->mainReason = $mainReason;

        return $this;
    }

    public function getDetailedReason(): ?string
    {
        return $this->detailedReason;
    }

    public function setDetailedReason(?string $detailedReason): self
    {
        $this->detailedReason = $detailedReason;

        return $this;
    }

    public function getCustomerComments(): ?string
    {
        return $this->customerComments;
    }

    public function setCustomerComments(?string $customerComments): self
    {
        $this->customerComments = $customerComments;

        return $this;
    }
}
