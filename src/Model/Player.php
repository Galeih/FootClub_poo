<?php

namespace App\Model;

use DateTime;

class Player extends Person
{
    private DateTime $birthdate;
    private array $teams;

    // Constructeur
    public function __construct(?int $id, string $firstName, string $lastName, DateTime $birthdate, string $picture)
    {
        parent::__construct($id, $firstName, $lastName, $picture);
        $this->birthdate = $birthdate;
        $this->teams = [];
    }

    // Getter et Setter pour birthdate
    public function getBirthdate(): DateTime
    {
        return $this->birthdate;
    }

    public function setBirthdate(DateTime $birthdate): void
    {
        $this->birthdate = $birthdate;
    }

    // Getter et Setter pour teams
    public function getTeams(): array
    {
        return $this->teams;
    }

    public function addTeam(Team $team): void
    {
        $this->teams[] = $team;
    }

    public function removeTeam(Team $team): void
    {
        $index = array_search($team, $this->teams);
        if ($index !== false) {
            array_splice($this->teams, $index, 1);
        }
    }

}


// Avant héritage

// class Player
// {
//     private Player $player;
//     private string $firstname;
//     private string $lastname;
//     private string $birthdate;
//     private string $picture;

//     // Constructeur
//     public function __construct($player, $firstname, $lastname, $birthdate, $picture)
//     {
//         $this->player = $player;
//         $this->firstname = $firstname;
//         $this->lastname = $lastname;
//         $this->birthdate = $birthdate;
//         $this->picture = $picture;
//     }

//     // Getter et Setter pour id
//     public function getId()
//     {
//         return $this->player;
//     }

//     public function setId($player)
//     {
//         $this->player = $player;
//     }

//     // Getter et Setter pour firstname
//     public function getFirstname()
//     {
//         return $this->firstname;
//     }

//     public function setFirstname($firstname)
//     {
//         $this->firstname = $firstname;
//     }

//     // Getter et Setter pour lastname
//     public function getLastname()
//     {
//         return $this->lastname;
//     }

//     public function setLastname($lastname)
//     {
//         $this->lastname = $lastname;
//     }

//     // Getter et Setter pour birthdate
//     public function getBirthdate()
//     {
//         return $this->birthdate;
//     }

//     public function setBirthdate($birthdate)
//     {
//         $this->birthdate = $birthdate;
//     }

//     // Getter et Setter pour picture
//     public function getPicture()
//     {
//         return $this->picture;
//     }

//     public function setPicture($picture)
//     {
//         $this->picture = $picture;
//     }
// }
