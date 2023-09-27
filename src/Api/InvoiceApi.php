<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Api;

class InvoiceApi extends AbstractApi
{
    public function all(\DateTime $fromDate, \DateTime $untilDate): string
    {
        $uri = $this->createUri('/invoices', [], [
            'period-start-date' => $fromDate->format('Y-m-d'),
            'period-end-date' => $untilDate->format('Y-m-d'),
        ]);

        $response = $this->getJson($uri);

        return (string)$response->getBody();
    }

    public function getSpecification(string $invoiceId): string
    {
        $uri = $this->createUri('/invoices/{invoice-id}/specification/', [
            'invoice-id' => $invoiceId,
        ]);

        $response = $this->client->get($uri, [
            'Content-Type' => 'application/vnd.retailer.v9+openxmlformats-officedocument.spreadsheetml.sheet',
            'Accept' => 'application/vnd.retailer.v9+openxmlformats-officedocument.spreadsheetml.sheet',
        ]);

        return (string)$response->getBody();
    }
}
