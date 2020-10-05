<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Model;

class ProcessStatus
{
    public const STATUS_PENDING = 'PENDING';
    public const STATUS_SUCCESS = 'SUCCESS';
    public const STATUS_TIMEOUT = 'TIMEOUT';
    public const STATUS_FAILURE = 'FAILURE';

    protected ?int $id = null;
    protected ?string $status = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

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

    /**
     * @param string|string[] $status
     */
    public function isStatus($status): bool
    {
        return isset(array_flip((array) $status)[$this->status]);
    }
}
