<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Model;

class ReturnsResponse implements \IteratorAggregate
{
    /** @var Return_[] */
    protected array $returns = [];

    /**
     * @return Return_[]
     */
    public function getReturns(): array
    {
        return $this->returns;
    }

    /**
     * @param Return_[] $returns
     */
    public function setReturns(array $returns): self
    {
        $this->returns = $returns;

        return $this;
    }

    /**
     * @return Return_[]
     */
    public function getIterator(): \Traversable
    {
        return new \ArrayIterator($this->returns);
    }
}
