<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Model;

class ProcessStatusListRequest
{
    /** @var int[] */
    protected array $ids = [];

    /**
     * @return int[]
     */
    public function getIds(): array
    {
        return $this->ids;
    }

    /**
     * @param int[] $ids
     */
    public function setIds(array $ids): self
    {
        $this->ids = $ids;

        return $this;
    }

    public function getQueries(): array
    {
        return array_map(function (int $id): array {
            return ['id' => $id];
        }, $this->ids);
    }
}
