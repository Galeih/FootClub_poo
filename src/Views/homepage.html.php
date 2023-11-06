<?php

use App\Database\PlayerDatabase;

require '../src/Views/header.html.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FootClub Homepage 1</title>
</head>

<body>
    <section class="infos">
        <?php foreach ($allPlayers as $player) { ?>
            <div class="card">
                <img src="assets/<?= $player->getPhoto() ?>" alt="<?= $player->getFirstName() ?><?= $player->getLastName() ?>">
                <h1><?= $player->getFirstName() . " " . $player->getLastName() ?></h1>
                <span class="birthDate">birthDate : <?= $player->getbirthDate()->format('Y-m-d') ?></span>
            </div>
        <?php } ?>
    </section>
</body>

</html>