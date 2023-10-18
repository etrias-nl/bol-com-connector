<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Api;

use Etrias\BolComConnector\Model\ProcessStatus;
use Etrias\BolComConnector\Model\ShipOrderItemsRequest;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Uri;

class ShipmentApi extends AbstractApi
{
    public function createShipment(ShipOrderItemsRequest $request): ProcessStatus
    {
        $uri = $this->createUri('/shipments');

        return $this->deserialize($this->postJson($uri, $request), ProcessStatus::class);
    }

    public function getShipment(string $shipmentId): array
    {
        $uri = $this->createUri('/shipments/{id}', [
            'id' => $shipmentId,
        ]);

        $response = $this->getJson($uri);

        return json_decode((string)$response->getBody(), true, 512, \JSON_THROW_ON_ERROR);
    }

    public function getInvoiceRequests(string $state, int $page): array
    {
        $uri = $this->createUri('/shipments/invoices/requests', [], [
            'state' => $state,
            'page' => $page,
        ]);

        $response = $this->getJson($uri);

        return json_decode((string)$response->getBody(), true, 512, \JSON_THROW_ON_ERROR);
    }

    public function uploadInvoice(string $shipmentId, string $pdfContents): array
    {
        $uri = $this->createUri('/shipments/invoices/{id}', [
            'id' => $shipmentId,
        ]);
        $body = new MultipartStream([
            [
                'name' => 'invoice',
                'contents' => $pdfContents,
                'filename' => 'invoice.pdf',
                'headers' => [
                    'Content-Type' => 'application/pdf',
                ],
            ],
        ]);
        $response = $this->client->post($uri, [
            'Content-Type' => 'multipart/form-data;boundary='.$body->getBoundary(),
        ], $body);

        return json_decode((string)$response->getBody(), true, 512, \JSON_THROW_ON_ERROR);
    }
}
