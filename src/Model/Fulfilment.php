<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Model;

class Fulfilment
{
    public const FBR = 'FBR';
    public const FBB = 'FBB';

    public const DELIVERY_24H23 = '24uurs-23';
    public const DELIVERY_24H22 = '24uurs-22';
    public const DELIVERY_24H21 = '24uurs-21';
    public const DELIVERY_24H20 = '24uurs-20';
    public const DELIVERY_24H19 = '24uurs-19';
    public const DELIVERY_24H18 = '24uurs-18';
    public const DELIVERY_24H17 = '24uurs-17';
    public const DELIVERY_24H16 = '24uurs-16';
    public const DELIVERY_24H15 = '24uurs-15';
    public const DELIVERY_24H14 = '24uurs-14';
    public const DELIVERY_24H13 = '24uurs-13';
    public const DELIVERY_24H12 = '24uurs-12';
    public const DELIVERY_1_2D = '1-2d';
    public const DELIVERY_2_3D = '2-3d';
    public const DELIVERY_3_5D = '3-5d';
    public const DELIVERY_4_8D = '4-8d';
    public const DELIVERY_1_8D = '1-8d';
    public const DELIVERY_CUSTOM = 'MijnLeverbelofte';
    public const DELIVERY_VVB = 'VVB';

    protected ?string $method = null;
    protected ?string $deliveryCode = null;

    public function getMethod(): ?string
    {
        return $this->method;
    }

    public function setMethod(?string $method): self
    {
        $this->method = $method;

        return $this;
    }

    public function getDeliveryCode(): ?string
    {
        return $this->deliveryCode;
    }

    public function setDeliveryCode(?string $deliveryCode): self
    {
        $this->deliveryCode = $deliveryCode;

        return $this;
    }
}
