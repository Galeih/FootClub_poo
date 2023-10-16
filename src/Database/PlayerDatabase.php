<?php

namespace App\Database;

use App\Model\Player;
use DateTime;

final readonly class PlayerDatabase
{
    public static function add(Player $player): bool
    {
        $connexion = Database::connect();
        $request = $connexion->prepare('INSERT INTO player (firstname, lastname, birthdate, picture) VALUES (:firstname, :lastname, :birthdate, :picture);');
        $playerFirstname = $player->getFirstname();
        $playerLastname = $player->getLastname();
        $playerBirthdate = $player->getBirthdate();
        $playerPicture = $player->getPicture();
        $request->bindParam(1, $playerFirstname, $playerLastname, $playerBirthdate, $playerPicture);

        return $request->execute();
    }
}
