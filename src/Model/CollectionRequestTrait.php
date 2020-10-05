<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Model;

trait CollectionRequestTrait
{
    protected int $page = 1;

    public function getPage(): int
    {
        return $this->page;
    }

    public function setPage(int $page): self
    {
        $this->page = $page;

        return $this;
    }
}
