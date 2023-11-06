<?php

namespace App\Model;

class PlayerRepository
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getAllPlayers()
    {
        $players = [];

        try {
            $stmt = $this->db->prepare("SELECT * FROM player");
            $stmt->execute();

            while ($row = $stmt->fetch()) {
                $player = new Player(
                    $row['lastname'],
                    $row['firstname'],
                    new \DateTime($row['birthdate']),
                    $row['picture']
                );

                $players[] = $player;
            }
        } catch (\PDOException $e) {
            return false;
        }

        return $players;
    }
}
