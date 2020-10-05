<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\HttpClient\Plugin;

use Http\Client\Common\Plugin;
use Http\Promise\Promise;
use kamermans\OAuth2\OAuth2Handler;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class Authentication extends OAuth2Handler implements Plugin
{
    /**
     * {@inheritdoc}
     */
    public function handleRequest(RequestInterface $request, callable $next, callable $first): Promise
    {
        /** @var RequestInterface $request */
        $request = $this->signRequest($request);
        /** @var Promise $promise */
        $promise = $next($request);

        return $promise->then(function (ResponseInterface $response) use ($request, $first) {
            if ($response->getStatusCode() !== 401 || $request->hasHeader('X-Guzzle-Retry')) {
                return $response;
            }

            $this->deleteAccessToken();

            return $first($request->withHeader('X-Guzzle-Retry', '1'));
        });
    }
}
