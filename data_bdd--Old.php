<?php
// Inclure l'autoloader
require_once '../autoloader.php';

// Création de joueurs dans un tableau (player)
$players = [
    new Player(1, 'Lionel', 'Messi', new DateTime('1987-06-24'), 'assets/lionel_messi.jpg'),
    new Player(2, 'Cristiano', 'Ronaldo', new DateTime('1985-02-05'), 'assets/cristiano_ronaldo.jpg'),
    new Player(3, 'Neymar', 'Jr.', new DateTime('1992-02-05'), 'assets/neymar_jr.jpg'),
    new Player(4, 'Kylian', 'Mbappé', new DateTime('1998-12-20'), 'assets/kylian_mbappe.jpg'),
    new Player(5, 'Sergio', 'Ramos', new DateTime('1986-03-30'), 'assets/sergio_ramos.jpg'),
    new Player(6, 'Kevin', 'De Bruyne', new DateTime('1991-06-28'), 'assets/kevin_de_bruyne.jpg'),
    new Player(7, 'Mohamed', 'Salah', new DateTime('1992-06-15'), 'assets/mohamed_salah.jpg'),
    new Player(8, 'Virgil', 'van Dijk', new DateTime('1991-07-08'), 'assets/virgil_van_dijk.jpg'),
    new Player(9, 'Robert', 'Lewandowski', new DateTime('1988-08-21'), 'assets/robert_lewandowski.jpg'),
    new Player(10, 'Luka', 'Modric', new DateTime('1985-09-09'), 'assets/luka_modric.jpg'),
    new Player(11, 'Sadio', 'Mané', new DateTime('1992-04-10'), 'assets/sadio_mane.jpg'),
];

// Création de l'équipe (team)
$team1 = new Team(1, 'Lille OSC');
$team2 = new Team(2, 'LePortel');

// Création des clubs adverses (opposing club)
$opposingClub1 = new OpposingClub(1, 'Stade de France', 'Saint-Denis');
$opposingClub2 = new OpposingClub(2, 'Parc des Princes', 'Paris');
$opposingClub3 = new OpposingClub(3, 'Allianz Riviera', 'Nice');
$opposingClub4 = new OpposingClub(4, 'Stade Vélodrome', 'Marseille');

// Création des matchs (matchs)
$match1 = new FootballMatch(1, 2, 2, '2023-04-25', $team1, 'Saint-Denis', $opposingClub1);
$match2 = new FootballMatch(2, 3, 1, '2023-06-01', $team1, 'Paris', $opposingClub2);
$match3 = new FootballMatch(3, 1, 2, '2023-10-05', $team1, 'Nice', $opposingClub3);
$match4 = new FootballMatch(4, 2, 0, '2024-01-10', $team1, 'Marseille', $opposingClub4);

// Création des membres du staff (staff members)
$staff1 = new StaffMember(1, 'Comme', 'Unpous', 'assets/trainer_one.jpg', 'Entraîneur');
$staff2 = new StaffMember(2, 'Pthi', 'Cochy', 'assets/preparateur_two.jpg', 'Préparateur');
$staff3 = new StaffMember(3, 'Durif', 'Sylvain', 'assets/analyst_three.jpg', 'Analyste');

// Assignation des joueurs aux équipes avec les rôles (new version)

$roles = ['Attaquant', 'Milieu', 'Défenseur', 'Gardien']; // Les rôles possibles (player has team)

// Pour chaque joueur et chaque équipe, assigne un rôle de manière aléatoire (player has team)
foreach ($players as $player) {
    foreach ([$team1, $team2] as $team) {
        $role = array_rand($roles); // <-- Sélectionne un rôle aléatoire
        $player_team = new PlayerHasTeam($player, $team, $roles[$role]);
    }
}

// Exemple de sauvegarde en base de données
foreach ($players as $player) {
    $player->saveToDatabase();
}

// Redirection vers une page de confirmation ou autre
header('Location: confirmation.php');
exit;
?>



// Assignation des joueurs aux équipes avec les rôles (old version)

// $player_team1 = new PlayerHasTeam($players[0]->getId(), $team1->getId(), 'Attaquant');
// $player_team2 = new PlayerHasTeam($players[0]->getId(), $team2->getId(), 'Milieu');

// $player_team3 = new PlayerHasTeam($players[1]->getId(), $team1->getId(), 'Défenseur');
// $player_team4 = new PlayerHasTeam($players[1]->getId(), $team2->getId(), 'Gardien');

// $player_team5 = new PlayerHasTeam($players[2]->getId(), $team1->getId(), 'Milieu');
// $player_team6 = new PlayerHasTeam($players[2]->getId(), $team2->getId(), 'Attaquant');

// $player_team7 = new PlayerHasTeam($players[3]->getId(), $team1->getId(), 'Milieu');
// $player_team8 = new PlayerHasTeam($players[3]->getId(), $team2->getId(), 'Défenseur');

// $player_team9 = new PlayerHasTeam($players[4]->getId(), $team1->getId(), 'Défenseur');
// $player_team10 = new PlayerHasTeam($players[4]->getId(), $team2->getId(), 'Milieu');

// $player_team11 = new PlayerHasTeam($players[5]->getId(), $team1->getId(), 'Gardien');
// $player_team12 = new PlayerHasTeam($players[5]->getId(), $team2->getId(), 'Milieu');

// $player_team13 = new PlayerHasTeam($players[6]->getId(), $team1->getId(), 'Attaquant');
// $player_team14 = new PlayerHasTeam($players[6]->getId(), $team2->getId(), 'Défenseur');

// $player_team15 = new PlayerHasTeam($players[7]->getId(), $team1->getId(), 'Gardien');
// $player_team16 = new PlayerHasTeam($players[7]->getId(), $team2->getId(), 'Attaquant');

// $player_team17 = new PlayerHasTeam($players[8]->getId(), $team1->getId(), 'Attaquant');
// $player_team18 = new PlayerHasTeam($players[8]->getId(), $team2->getId(), 'Milieu');

// $player_team19 = new PlayerHasTeam($players[9]->getId(), $team1->getId(), 'Milieu');
// $player_team20 = new PlayerHasTeam($players[9]->getId(), $team2->getId(), 'Défenseur');

// $player_team21 = new PlayerHasTeam($players[10]->getId(), $team1->getId(), 'Défenseur');
// $player_team22 = new PlayerHasTeam($players[10]->getId(), $team2->getId(), 'Gardien');