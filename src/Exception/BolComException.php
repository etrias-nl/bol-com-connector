<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Exception;

class BolComException extends \RuntimeException
{
  public const RATE_LIMIT_CODE = 429;
}
