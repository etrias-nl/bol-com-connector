<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Api;

use Etrias\BolComConnector\Model\CreateReturnRequest;
use Etrias\BolComConnector\Model\HandleReturnRequest;
use Etrias\BolComConnector\Model\ProcessStatus;
use Etrias\BolComConnector\Model\Return_;
use Etrias\BolComConnector\Model\ReturnsRequest;
use Etrias\BolComConnector\Model\ReturnsResponse;
use GuzzleHttp\Psr7\Uri;

class ReturnApi extends AbstractApi
{
    /**
     * @return Return_[]
     */
    public function all(?ReturnsRequest $request = null)
    {
        if (null === $request) {
            $request = new ReturnsRequest();
        }

        $uri = $this->createUri('/returns', [], [
            'fulfilment-method' => $request->getFulfilmentMethod(),
            'handled' => $request->isHandled(),
        ]);
        $page = $request->getPage();

        do {
            $uri = Uri::withQueryValue($uri, 'page', (string) $page);

            $response = $this->getJson($uri);

            /** @var ReturnsResponse $result */
            $result = $this->deserialize($response, ReturnsResponse::class);
            $data = $result->getReturns();

            yield from $data;

            if (!$data) {
                break;
            }

            ++$page;
        } while (true);
    }

    public function get(string $returnId): Return_
    {
        $uri = $this->createUri('/returns/{returnId}', [
            'returnId' => $returnId,
        ]);

        return $this->deserialize($this->getJson($uri), Return_::class);
    }

    public function handle(HandleReturnRequest $request): ProcessStatus
    {
        $uri = $this->createUri('/returns/{rmaId}', [
            'rmaId' => $request->getRmaId(),
        ]);

        return $this->deserialize($this->putJson($uri, $request), ProcessStatus::class);
    }

    public function createReturn(CreateReturnRequest $request): ProcessStatus
    {
        $uri = $this->createUri('/returns');

        return $this->deserialize($this->postJson($uri, $request), ProcessStatus::class);
    }
}
