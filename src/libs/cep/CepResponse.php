<?php
namespace src\libs\cep;

class CepResponse
{
    private string $cep;
    private string $address_type;
    private string $address_name;
    private string $address;
    private string $district;
    private string $state;
    private string $city;
    private string $lat;
    private string $lng;
    private string $ddd;
    private string $city_ibge;
    public function __construct(array $data)
    {
        $this->cep = $data["cep"] ?? "";
        $this->address_type = $data["address_type"] ?? "";
        $this->address_name = $data["address_name"] ?? "";
        $this->address = $data["address"] ?? "";
        $this->district = $data["district"] ?? "";
        $this->state = $data["state"] ?? "";
        $this->city = $data["city"] ?? "";
        $this->lat = $data["lat"] ?? "";
        $this->lng = $data["lng"] ?? "";
        $this->ddd = $data["ddd"] ?? "";
        $this->city_ibge = $data["city_ibge"] ?? "";
    }
    public function getCep(): string
    {
        return $this->cep;
    }
    public function getAddressType(): string
    {
        return $this->address_type;
    }
    public function getAddressName(): string
    {
        return $this->address_name;
    }
    public function getAddress(): string
    {
        return $this->address;
    }
    public function getDistrict(): string
    {
        return $this->district;
    }
    public function getState(): string
    {
        return $this->state;
    }
    public function getCity(): string
    {
        return $this->city;
    }
    public function getLat(): string
    {
        return $this->lat;
    }
    public function getLng(): string
    {
        return $this->lng;
    }
    public function getDDD(): string
    {
        return $this->ddd;
    }
    public function getCityIbge(): string
    {
        return $this->city_ibge;
    }
}
