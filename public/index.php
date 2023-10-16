<?php
require '../config/parameters.php';
require '../config/autoloader.php';

use App\Database\PlayerDatabase;
use App\Model\Player;

// Récupérer les données du formulaire
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$birthdate = new DateTime($_POST['birthdate']); // Convertion de la chaîne en DateTime
$picture = $_FILES['picture']['name'];

$player = new Player(1, $firstname, $lastname, $birthdate, $picture);
$player->setFirstname('Lionnel');
$player->setLastname('Messi');
$player->setBirthdate($birthdate);
$player->setPicture('Lionnel');
$result = PlayerDatabase::add($player);

// $database = new Database();
// $connexion->connect();