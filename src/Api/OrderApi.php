<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Api;

use Etrias\BolComConnector\Exception\BolComException;
use Etrias\BolComConnector\Model\CancelOrderItemsRequest;
use Etrias\BolComConnector\Model\Order;
use Etrias\BolComConnector\Model\OrderDetail;
use Etrias\BolComConnector\Model\OrdersRequest;
use Etrias\BolComConnector\Model\OrdersResponse;
use Etrias\BolComConnector\Model\ProcessStatus;
use Etrias\BolComConnector\Model\ShipOrderItemsRequest;
use GuzzleHttp\Psr7\Uri;

class OrderApi extends AbstractApi
{
    /**
     * @return Order[]
     */
    public function all(?OrdersRequest $request = null)
    {
        if (null === $request) {
            $request = new OrdersRequest();
        }

        $uri = $this->createUri('/orders', [], [
            'fulfilment-method' => $request->getFulfilmentMethod(),
            'status' => $request->getStatus(),
        ]);
        $page = $request->getPage();

        do {
            $uri = Uri::withQueryValue($uri, 'page', $page);

            try {
                $response = $this->getJson($uri);
            } catch (BolComException $e) {
                break;
            }

            /** @var OrdersResponse $result */
            $result = $this->deserialize($response, OrdersResponse::class);
            $data = $result->getOrders();

            yield from $data;

            if (!$data) {
                break;
            }

            ++$page;
        } while (true);
    }

    public function get(string $id): OrderDetail
    {
        $uri = $this->createUri('/orders/{id}', [
            'id' => $id,
        ]);

        return $this->deserialize($this->getJson($uri), OrderDetail::class);
    }

    public function cancelItems(CancelOrderItemsRequest $request): ProcessStatus
    {
        $uri = $this->createUri('/orders/cancellation');

        return $this->deserialize($this->putJson($uri, $request), ProcessStatus::class);
    }

    public function shipItem(ShipOrderItemsRequest $request): ProcessStatus
    {
        $uri = $this->createUri('/orders/shipment');

        return $this->deserialize($this->putJson($uri, $request), ProcessStatus::class);
    }
}
