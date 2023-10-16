<?php

namespace App\Model;

class FootballMatch
{
    private int $id;
    private int $teamScore;
    private int $opponentScore;
    private string $date;
    private Team $team;
    private string $city;
    private OpposingClub $opposingClub;

    // Constructeur
    public function __construct(int $id, int $teamScore, int $opponentScore, string $date, Team $team, string $city, OpposingClub $opposingClub)
    {
        $this->id = $id;
        $this->teamScore = $teamScore;
        $this->opponentScore = $opponentScore;
        $this->date = $date;
        $this->team = $team;
        $this->city = $city;
        $this->opposingClub = $opposingClub;
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

    // Getter et Setter pour teamScore
    public function getTeamScore()
    {
        return $this->teamScore;
    }

    public function setTeamScore($teamScore)
    {
        $this->teamScore = $teamScore;
    }

    // Getter et Setter pour opponentScore
    public function getOpponentScore()
    {
        return $this->opponentScore;
    }

    public function setOpponentScore($opponentScore)
    {
        $this->opponentScore = $opponentScore;
    }

    // Getter et Setter pour date
    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    // Getter et Setter pour team_id
    public function getTeamId()
    {
        return $this->team;
    }

    public function setTeamId($team)
    {
        $this->team = $team;
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

    // Getter et Setter pour opposingClub
    public function getOpposingClub()
    {
        return $this->opposingClub;
    }

    public function setOpposingClub($opposingClub)
    {
        $this->opposingClub = $opposingClub;
    }
}
