<?php

declare(strict_types=1);

namespace Etrias\BolComConnector\Model;

trait AddresseeTrait
{
    protected ?string $salutationCode = null;
    protected ?string $firstName = null;
    protected ?string $surName = null;
    protected ?string $streetName = null;
    protected ?string $houseNumber = null;
    protected ?string $houseNumberExtended = null;
    protected ?string $zipCode = null;
    protected ?string $city = null;
    protected ?string $countryCode = null;
    protected ?string $email = null;
    protected ?string $deliveryPhoneNumber = null;
    protected ?string $company = null;

    public function getSalutationCode(): ?string
    {
        return $this->salutationCode;
    }

    public function setSalutationCode(?string $salutationCode): self
    {
        $this->salutationCode = $salutationCode;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getSurName(): ?string
    {
        return $this->surName;
    }

    public function setSurName(?string $surName): self
    {
        $this->surName = $surName;

        return $this;
    }

    public function getStreetName(): ?string
    {
        return $this->streetName;
    }

    public function setStreetName(?string $streetName): self
    {
        $this->streetName = $streetName;

        return $this;
    }

    public function getHouseNumber(): ?string
    {
        return $this->houseNumber;
    }

    public function setHouseNumber(?string $houseNumber): self
    {
        $this->houseNumber = $houseNumber;

        return $this;
    }

    public function getHouseNumberExtended(): ?string
    {
        return $this->houseNumberExtended;
    }

    public function setHouseNumberExtended(?string $houseNumberExtended): self
    {
        $this->houseNumberExtended = $houseNumberExtended;

        return $this;
    }

    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    public function setZipCode(?string $zipCode): self
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    public function setCountryCode(?string $countryCode): self
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getDeliveryPhoneNumber(): ?string
    {
        return $this->deliveryPhoneNumber;
    }

    public function setDeliveryPhoneNumber(?string $deliveryPhoneNumber): self
    {
        $this->deliveryPhoneNumber = $deliveryPhoneNumber;

        return $this;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(?string $company): self
    {
        $this->company = $company;

        return $this;
    }
}
