<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Model;

class ProcessStatusListRequest
{
    /** @var string[] */
    protected array $ids = [];

    /**
     * @return string[]
     */
    public function getIds(): array
    {
        return $this->ids;
    }

    /**
     * @param string[] $ids
     */
    public function setIds(array $ids): self
    {
        $this->ids = $ids;

        return $this;
    }

    public function getQueries(): array
    {
        return array_map(function (int $id): array {
            return ['processStatusId' => $id];
        }, $this->ids);
    }
}
