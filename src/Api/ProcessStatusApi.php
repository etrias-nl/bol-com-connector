<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Api;

use Etrias\BolComConnector\Model\ProcessStatus;
use Etrias\BolComConnector\Model\ProcessStatusListRequest;
use Etrias\BolComConnector\Model\ProcessStatusListResponse;

class ProcessStatusApi extends AbstractApi
{
    /**
     * @return ProcessStatus[]
     */
    public function list(ProcessStatusListRequest $request): iterable
    {
        $uri = $this->createUri('/process-status');
        /** @var ProcessStatusListResponse $result */
        $result = $this->deserialize($this->postJson($uri, $request), ProcessStatusListResponse::class);

        yield from $result->getStatuses();
    }

    public function get(int $id): ProcessStatus
    {
        $uri = $this->createUri('/process-status/{id}', [
            'id' => $id,
        ]);

        return $this->deserialize($this->getJson($uri), ProcessStatus::class);
    }
}
