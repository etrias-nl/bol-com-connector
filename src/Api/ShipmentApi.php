<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Api;

use Etrias\BolComConnector\Model\ProcessStatus;
use Etrias\BolComConnector\Model\ShipOrderItemsRequest;
use GuzzleHttp\Psr7\Uri;

class ShipmentApi extends AbstractApi
{
    public function createShipment(ShipOrderItemsRequest $request): ProcessStatus
    {
        $uri = $this->createUri('/shipments');

        return $this->deserialize($this->putJson($uri, $request), ProcessStatus::class);
    }

    public function getInvoiceRequests(string $state, int $page): string
    {
        $uri = $this->createUri('/shipments/invoices/requests', [], [
            'state' => $state,
            'page' => $page,
        ]);

        $response = $this->getJson($uri);

        return (string)$response->getBody();
    }

    public function uploadInvoice(string $shipmentId, string $data): string
    {
        $uri = $this->createUri('/shipments/invoices/{id}', [
            'id' => $shipmentId,
        ]);

        $response = $this->postJson($uri, $data);

        return (string)$response->getBody();
    }
}
