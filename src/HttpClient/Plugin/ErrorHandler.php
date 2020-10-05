<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\HttpClient\Plugin;

use Etrias\BolComConnector\Exception\BolComException;
use Http\Client\Common\Plugin;
use Http\Promise\Promise;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class ErrorHandler implements Plugin
{
    /**
     * {@inheritdoc}
     */
    public function handleRequest(RequestInterface $request, callable $next, callable $first): Promise
    {
        return $next($request)->then(function (ResponseInterface $response) {
            $status = $response->getStatusCode();

            if ($status >= 400) {
                $body = (string) $response->getBody();

                if (!preg_match('/\bjson\b/i', $response->getHeaderLine('Content-Type'))) {
                    throw new BolComException($body, $status);
                }

                try {
                    $data = \GuzzleHttp\json_decode($body, true);
                } catch (\Throwable $e) {
                    $data = [];
                }

                if (isset($data['violations'])) {
                    throw new BolComException(implode("\n", array_map(function (array $violation): string {
                        return sprintf('%s: %s', $violation['name'], $violation['reason']);
                    }, $data['violations'])), $status);
                }

                throw new BolComException($data['detail'] ?? $body, $status);
            }

            return $response;
        });
    }
}
