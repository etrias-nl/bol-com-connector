<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Model;

class ProcessStatusListResponse implements \IteratorAggregate
{
    /** @var ProcessStatus[] */
    protected array $statuses = [];

    /**
     * @return ProcessStatus[]
     */
    public function getStatuses(): array
    {
        return $this->statuses;
    }

    /**
     * @param ProcessStatus[] $statuses
     */
    public function setStatuses(array $statuses): self
    {
        $this->statuses = $statuses;

        return $this;
    }

    /**
     * @return ProcessStatus[]
     */
    public function getIterator(): \Traversable
    {
        return new \ArrayIterator($this->statuses);
    }
}
