<?php

namespace App\Model;

// Après héritage

class StaffMember extends Person
{
    private string $role;

    // Constructeur
    public function __construct(int $id, string $firstname, string $lastname, string $picture, string $role)
    {
        parent::__construct($id, $firstname, $lastname, $picture);
        $this->role = $role;
    }

    // Getter et Setter pour role
    public function getRole(): string
    {
        return $this->role;
    }

    public function setRole(string $role): void
    {
        $this->role = $role;
    }
}




// Avant héritage

// class StaffMember
// {
//     private StaffMember $staffMember;
//     private string $firstname;
//     private string $lastname;
//     private string $picture;
//     private string $role;

//     // Constructeur
//     public function __construct($staffMember, $firstname, $lastname, $picture, $role)
//     {
//         $this->staffMember = $staffMember;
//         $this->firstname = $firstname;
//         $this->lastname = $lastname;
//         $this->picture = $picture;
//         $this->role = $role;
//     }

//     // Getter et Setter pour id
//     public function getId()
//     {
//         return $this->staffMember;
//     }

//     public function setId($staffMember)
//     {
//         $this->staffMember = $staffMember;
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

//     // Getter et Setter pour picture
//     public function getPicture()
//     {
//         return $this->picture;
//     }

//     public function setPicture($picture)
//     {
//         $this->picture = $picture;
//     }

//     // Getter et Setter pour role
//     public function getRole()
//     {
//         return $this->role;
//     }

//     public function setRole($role)
//     {
//         $this->role = $role;
//     }
// }
