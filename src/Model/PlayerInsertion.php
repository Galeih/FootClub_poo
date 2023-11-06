<?php

namespace App\Model;

class PlayerInsertion
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function insertPlayer($firstname, $lastname, $birthdate, $picture)
    {
        try {
            $stmt = $this->db->prepare("INSERT INTO player (firstname, lastname, birthdate, picture) VALUES (:firstname, :lastname, :birthdate, :picture)");

            $stmt->bindParam(':firstname', $firstname);
            $stmt->bindParam(':lastname', $lastname);
            $stmt->bindParam(':birthdate', $birthdate);
            $stmt->bindParam(':picture', $picture);

            $stmt->execute();

            return $this->db->lastInsertId();
        } catch (\Exception $e) {
            return false;
        }
    }
}
