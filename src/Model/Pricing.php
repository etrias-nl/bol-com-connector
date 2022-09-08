<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Model;

class Pricing
{
    /** @var BundlePrice[] */
    protected array $bundlePrices = [];

    public function getBundlePrices(): array
    {
        return $this->bundlePrices;
    }

    public function setBundlePrices(array $bundlePrices): self
    {
        $this->bundlePrices = $bundlePrices;

        return $this;
    }
}
