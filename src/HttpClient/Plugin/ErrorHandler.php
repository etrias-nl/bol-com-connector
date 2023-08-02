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
        return $next($request)->then(function (ResponseInterface $response) use ($request, $next, $first) {
            $status = $response->getStatusCode();

            if (429 === $status) {
                $retryAfter = (int) ($response->getHeader('retry-after')[0] ?? 60);
                sleep($retryAfter);

                return $this->handleRequest($request, $next, $first)->wait();
            } elseif ($status >= 400) {
                $body = (string) $response->getBody();

                if (!preg_match('/\bjson\b/i', $response->getHeaderLine('Content-Type'))) {
                    throw new BolComException($body, $status);
                }

                try {
                    $data = json_decode($body, true, 512, JSON_THROW_ON_ERROR);
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
