<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Model;

class Transport
{
    protected ?string $transporterCode = null;
    protected ?string $trackAndTrace = null;

    public function getTransporterCode(): ?string
    {
        return $this->transporterCode;
    }

    public function setTransporterCode(?string $transporterCode): self
    {
        $this->transporterCode = $transporterCode;

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
