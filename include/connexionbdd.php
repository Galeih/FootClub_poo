<?php
try {
    $dbname = "foot_club";
    $connexion = new PDO('mysql:host=localhost;dbname=' . $dbname . '', 'root', '');

    // Configurer le mode d'erreur pour PDO
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Configurer l'encodage des caractères
    $connexion->exec('SET NAMES utf8');
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
