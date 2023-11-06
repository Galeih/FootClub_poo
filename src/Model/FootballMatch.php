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

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getTeamScore()
    {
        return $this->teamScore;
    }

    public function setTeamScore($teamScore)
    {
        $this->teamScore = $teamScore;
    }

    public function getOpponentScore()
    {
        return $this->opponentScore;
    }

    public function setOpponentScore($opponentScore)
    {
        $this->opponentScore = $opponentScore;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getTeamId()
    {
        return $this->team;
    }

    public function setTeamId($team)
    {
        $this->team = $team;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function getOpposingClub()
    {
        return $this->opposingClub;
    }

    public function setOpposingClub($opposingClub)
    {
        $this->opposingClub = $opposingClub;
    }
}
