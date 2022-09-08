<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Model;

class Condition
{
    public const NEW = 'NEW';
    public const AS_NEW = 'AS_NEW';
    public const GOOD = 'GOOD';
    public const REASONABLE = 'REASONABLE';
    public const MODERATE = 'MODERATE';

    protected ?string $name = null;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
