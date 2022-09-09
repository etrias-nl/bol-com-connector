<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Model;

class ProcessStatus
{
    public const STATUS_PENDING = 'PENDING';
    public const STATUS_SUCCESS = 'SUCCESS';
    public const STATUS_TIMEOUT = 'TIMEOUT';
    public const STATUS_FAILURE = 'FAILURE';

    protected ?string $id = null;
    protected ?string $entityId = null;
    protected ?string $status = null;
    protected ?string $eventType = null;
    protected ?string $description = null;
    protected ?string $errorMessage = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getEntityId(): ?string
    {
        return $this->entityId;
    }

    public function setEntityId(?string $entityId): self
    {

        $this->entityId = $entityId;

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

    public function getEventType(): ?string
    {
        return $this->eventType;
    }

    public function setEventType(?string $eventType): ProcessStatus
    {
        $this->eventType = $eventType;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): ProcessStatus
    {
        $this->description = $description;

        return $this;
    }

    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    public function setErrorMessage(?string $errorMessage): ProcessStatus
    {
        $this->errorMessage = $errorMessage;

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
