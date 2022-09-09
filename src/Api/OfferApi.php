<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Api;

use Etrias\BolComConnector\Model\CreateOfferRequest;
use Etrias\BolComConnector\Model\ExportOffersRequest;
use Etrias\BolComConnector\Model\Offer;
use Etrias\BolComConnector\Model\ProcessStatus;

class OfferApi extends AbstractApi
{
    public function export(?ExportOffersRequest $request = null): ProcessStatus
    {
        $request ??= new ExportOffersRequest();
        $uri = $this->createUri('/offers/export');

        return $this->deserialize($this->postJson($uri, $request), ProcessStatus::class);
    }

    public function create(CreateOfferRequest $request): ProcessStatus
    {
        $uri = $this->createUri('/offers');

        return $this->deserialize($this->postJson($uri, $request), ProcessStatus::class);
    }

    public function delete(string $id): ProcessStatus
    {
        $uri = $this->createUri('/offers/{id}', [
            'id' => $id,
        ]);

        return $this->deserialize($this->deleteJson($uri), ProcessStatus::class);
    }

    public function get(string $id): Offer
    {
        $uri = $this->createUri('/offers/{id}', [
            'id' => $id,
        ]);

        return $this->deserialize($this->getJson($uri), Offer::class);
    }
}
