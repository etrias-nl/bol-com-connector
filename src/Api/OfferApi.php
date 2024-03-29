<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Api;

use Etrias\BolComConnector\Model\CreateOfferRequest;
use Etrias\BolComConnector\Model\ExportOffersRequest;
use Etrias\BolComConnector\Model\Offer;
use Etrias\BolComConnector\Model\ProcessStatus;
use Etrias\BolComConnector\Model\UpdateOfferPriceRequest;
use Etrias\BolComConnector\Model\UpdateOfferRequest;
use Etrias\BolComConnector\Model\UpdateOfferStockRequest;

class OfferApi extends AbstractApi
{
    public function export(?ExportOffersRequest $request = null): ProcessStatus
    {
        $request ??= new ExportOffersRequest();
        $uri = $this->createUri('/offers/export');

        return $this->deserialize($this->postJson($uri, $request), ProcessStatus::class);
    }

    /**
     * @return array[]
     */
    public function getExport(string $id): array
    {
        $uri = $this->createUri('/offers/export/{id}', [
            'id' => $id,
        ]);
        $response = $this->client->get($uri, [
            'Content-Type' => 'application/vnd.retailer.v8+csv',
            'Accept' => 'application/vnd.retailer.v8+csv',
        ]);

        $lines = explode("\r\n", trim((string) $response->getBody()));
        $columns = str_getcsv(array_shift($lines));
        $defaults = array_fill(0, count($columns), null);

        return array_map(function (string $line) use ($columns, $defaults): array {
            return array_combine($columns, str_getcsv($line) + $defaults);
        }, $lines);
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

    public function update(string $id, UpdateOfferRequest $request): ProcessStatus
    {
        $uri = $this->createUri('/offers/{id}', [
            'id' => $id,
        ]);

        return $this->deserialize($this->putJson($uri, $request), ProcessStatus::class);
    }

    public function updatePrice(string $id, UpdateOfferPriceRequest $request): ProcessStatus
    {
        $uri = $this->createUri('/offers/{id}/price', [
            'id' => $id,
        ]);

        return $this->deserialize($this->putJson($uri, $request), ProcessStatus::class);
    }

    public function updateStock(string $id, UpdateOfferStockRequest $request): ProcessStatus
    {
        $uri = $this->createUri('/offers/{id}/stock', [
            'id' => $id,
        ]);

        return $this->deserialize($this->putJson($uri, $request), ProcessStatus::class);
    }
}
