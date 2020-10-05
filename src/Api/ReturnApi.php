<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Api;

use Etrias\BolComConnector\Exception\BolComException;
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
            $uri = Uri::withQueryValue($uri, 'page', $page);

            try {
                $response = $this->getJson($uri);
            } catch (BolComException $e) {
                break;
            }

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

    public function handle(HandleReturnRequest $request): ProcessStatus
    {
        $uri = $this->createUri('/returns/{rmaId}', [
            'rmaId' => $request->getRmaId(),
        ]);

        return $this->deserialize($this->putJson($uri, $request), ProcessStatus::class);
    }
}
