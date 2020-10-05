<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Model;

trait OrderTrait
{
    protected ?string $id = null;
    protected ?\DateTimeInterface $placedAt = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getPlacedAt(): ?\DateTimeInterface
    {
        return $this->placedAt;
    }

    public function setPlacedAt(?\DateTimeInterface $placedAt): self
    {
        $this->placedAt = $placedAt;

        return $this;
    }
}
