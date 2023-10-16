<?php

namespace App\Model;

abstract class Person
{
    private int $id;
    private string $firstName;
    private string $lastName;
    private string $picture;

    // Constructeur
    public function __construct(int $id, string $firstName, string $lastName, string $picture)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->picture = $picture;
    }    

    // Getter et Setter pour id
    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    // Getter et Setter pour firstname
    public function getFirstname(): string
    {
        return $this->firstName;
    }

    public function setFirstname(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    // Getter et Setter pour lastname
    public function getLastname(): string
    {
        return $this->lastName;
    }

    public function setLastname(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    // Getter et Setter pour picture
    public function getPicture(): string
    {
        return $this->picture;
    }

    public function setPicture(string $picture): void
    {
        $this->picture = $picture;
    }
}
