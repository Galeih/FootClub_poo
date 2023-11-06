<?php

namespace App\Model;

class FootClubMatch
{
    private int $teamScore;
    private int $opponentScore;
    private \DateTime $date;
    private Team $team;
    private string $city;
    private OpposingClub $opposingClub;

    public function __construct(
        int $teamScore,
        int $opponentScore,
        \DateTime $date,
        Team $team,
        string $city,
        OpposingClub $opposingClub
    ) {
        $this->teamScore = $teamScore;
        $this->opponentScore = $opponentScore;
        $this->date = $date;
        $this->team = $team;
        $this->city = $city;
        $this->opposingClub = $opposingClub;
    }

    // Getter
    public function getTeamScore(): int
    {
        return $this->teamScore;
    }

    // Setter
    public function setTeamScore(int $teamScore): void
    {
        $this->teamScore = $teamScore;
    }

    // Getter
    public function getOpponentScore(): int
    {
        return $this->opponentScore;
    }

    // Setter
    public function setOpponentScore(int $opponentScore): void
    {
        $this->opponentScore = $opponentScore;
    }

    // Getter
    public function getDate(): \DateTime
    {
        return $this->date;
    }

    // Setter
    public function setDate(\DateTime $date): void
    {
        $this->date = $date;
    }

    // Getter
    public function getTeam(): Team
    {
        return $this->team;
    }

    // Setter
    public function setTeam(Team $team): void
    {
        $this->team = $team;
    }

    // Getter
    public function getCity(): string
    {
        return $this->city;
    }

    // Setter
    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    // Getter
    public function getOpposingClub(): OpposingClub
    {
        return $this->opposingClub;
    }

    // Setter
    public function setOpposingClub(OpposingClub $opposingClub): void
    {
        $this->opposingClub = $opposingClub;
    }
}
