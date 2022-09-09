<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Model;

class ExportOffersRequest
{
    protected string $format = 'CSV';

    public function getFormat(): string
    {
        return $this->format;
    }

    public function setFormat(string $format): self
    {
        $this->format = $format;

        return $this;
    }
}
