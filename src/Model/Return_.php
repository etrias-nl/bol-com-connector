<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Model;

class Return_
{
    protected ?string $id = null;
    /** @var ReturnItem[] */
    protected array $items = [];
    protected ?\DateTimeInterface $registeredAt = null;
    protected ?string $fulfilmentMethod = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return ReturnItem[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param ReturnItem[] $items
     */
    public function setItems(array $items): self
    {
        $this->items = $items;

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

    public function getFulfilmentMethod(): ?string
    {
        return $this->fulfilmentMethod;
    }

    public function setFulfilmentMethod(?string $fulfilmentMethod): self
    {
        $this->fulfilmentMethod = $fulfilmentMethod;

        return $this;
    }
}
