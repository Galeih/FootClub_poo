<?php

namespace App\Model;


class Team
{
    private string $name;

    public function __construct(
        string $name
    ) {
        $this->name = $name;
    }

    // Getter
    public function getName(): string
    {
        return $this->name;
    }

    // Setter
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}
