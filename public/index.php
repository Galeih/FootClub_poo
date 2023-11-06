<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FootClub - Accueil</title>
</head>

<body>
    <?php
    require '../include/connexion_bdd.php';
    require '../autoloader.php';

    use App\Model\PlayerRepo;

    $playerRepository = new PlayerRepo($connexion);
    $allPlayers = $playerRepository->getAllPlayers();
    ?>

    <section>
        <div class="cardContainer">
            <?php
            foreach ($allPlayers as $player) { ?>
                <div class="card">
                    <img src="public/assets/<?= $player->getPhoto() ?>" alt="<?= $player->getName() ?>'s Picture">
                    <h1><?= $player->getName() . $player->getLastName() ?></h1>
                    <span class="birthDate">Date of Birth : <?= $player->getDateDeNaissance()->format('Y-m-d') ?></span>
                </div>
            <?php } ?>
        </div>
    </section>
</body>

</html>