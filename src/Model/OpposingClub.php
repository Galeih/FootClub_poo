<?php

namespace App\Model;

class OpposingClub
{
    private int $id;
    private string $address;
    private string $city;

    // Constructeur
    public function __construct(int $id, string $address, string $city)
    {
        $this->id = $id;
        $this->address = $address;
        $this->city = $city;
    }

    // Getter et Setter pour id
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    // Getter et Setter pour address
    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    // Getter et Setter pour city
    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }
}
