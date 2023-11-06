<?php

namespace App\Database;

use App\Model\Player;

final readonly class PlayerDatabase
{
    public static function add(Player $player)
    {
        try {
            $db = Database::Connect();
            $insert = $db->prepare("INSERT INTO player (firstname, lastname, birthdate, picture) VALUES (:firstname, :lastname, :birthdate, :picture)");

            $insert->bindParam(':firstname', $player->getFirstName());
            $insert->bindParam(':lastname', $player->getLastName());
            $insert->bindParam(':birthdate', $player->getBirthdate());
            $insert->bindParam(':picture', $player->getPhoto());

            $insert->execute();

            return $db->lastInsertId();
        } catch (\Exception $e) {
            return false;
        }
    }

    public static function getPlayers()
    {
        $players = [];
        try {
            $db = Database::Connect();
            $select = $db->prepare("SELECT * FROM player");
            $select->execute();

            while ($row = $select->fetch()) {
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

    public static function delete(Player $player)
    {
        $db = Database::Connect();
        $delete = $db->prepare('DELETE FROM player WHERE ');
    }
}
