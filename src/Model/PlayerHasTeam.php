<?php

namespace App\Model;

class PlayerHasTeam
{
    private int $id;
    private Team $team;
    private string $role;

    // Constructeur
    public function __construct($id, $team, $role)
    {
        $this->id = $id;
        $this->team = $team;
        $this->role = $role;
    }

    // Getter et Setter pour player
    public function getPlayer()
    {
        return $this->id;
    }

    public function setPlayer(Player $player)
    {
        $this->id = $player;
    }

    // Getter et Setter pour team
    public function getTeam()
    {
        return $this->team;
    }

    public function setTeam(Team $team)
    {
        $this->team = $team;
    }

    // Getter et Setter pour role
    public function getRole()
    {
        return $this->role;
    }

    public function setRole(string $role)
    {
        $this->role = $role;
    }
}
