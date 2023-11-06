<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FootClub : Ajouter/Modifier un Joueur</title>
</head>

<body>
    <?php
    require '../autoloader.php';
    require '../include/connexionbdd.php';

    use App\Model\FormValidator;
    use App\Model\PlayerInsertion;

    $validator = new FormValidator();

    if (isset($_POST['addPlayer'])) {
        $validator->validateName($_POST['addPlayerName'], 'prénom du joueur');
        $validator->validateName($_POST['addPlayerLastName'], 'nom du joueur');
        $validator->validateDate($_POST['addPlayerBirthDate'], 'date de naissance');
        $validator->validateImage($_FILES['addPlayerPicture'], 'photo du joueur');

        if ($_FILES['addPlayerPicture']['error'] == 0) {
            $uploadDir = __DIR__ . '/assets/';
            $originalFileName = $_FILES['addPlayerPicture']['name'];
            $extension = pathinfo($originalFileName, PATHINFO_EXTENSION);

            $randomNumber = rand(1000, 9999);
            $newFileName = $randomNumber . '_' . $originalFileName;
            $uploadFile = $uploadDir . $newFileName;

            if (file_exists($uploadFile)) {
                $validator->errors['photo du joueur'] = '<p class="error">Ce fichier existe déjà.</p>';
            } else {
                if (move_uploaded_file($_FILES['addPlayerPicture']['tmp_name'], $uploadFile)) {
                    $picture = $uploadFile;
                } else {
                    $validator->errors['photo du joueur'] = '<p class="error">Erreur lors de l\'upload du fichier.</p>';
                }
            }
        } elseif ($_FILES['addPlayerPicture']['error'] != 4) {
            $validator->errors['photo du joueur'] = '<p class="error">Erreur lors du téléchargement du fichier.</p>';
        }

        if (!$validator->hasErrors()) {
            $playerInsertion = new PlayerInsertion($connexion);
            $firstname = $_POST['addPlayerName'];
            $lastname = $_POST['addPlayerLastName'];
            $birthdate = $_POST['addPlayerBirthDate'];
            $playerId = $playerInsertion->insertPlayer($firstname, $lastname, $birthdate, $newFileName);

            if ($playerId) {
                echo "Joueur inséré avec succès avec l'ID : $playerId";
            } else {
                echo "Erreur lors de l'insertion des données du joueur.";
            }
        }
    }
    ?>

    <form action="#" method="POST" enctype="multipart/form-data">
        <h1>+ Ajouter un Joueur</h1>
        <?php echo isset($addPlayerSuccess) ? $addPlayerSuccess : ""; ?>

        <label for="addPlayerName">Prénom du joueur : *</label>
        <input type="text" name="addPlayerName" value="<?php echo isset($_POST['addPlayerName']) ? htmlspecialchars($_POST['addPlayerName']) : ''; ?>">

        <?php echo $validator->errors['prénom du joueur'] ?? ''; ?>

        <label for="addPlayerLastName">Nom du joueur : *</label>
        <input type="text" name="addPlayerLastName" value="<?php echo isset($_POST['addPlayerLastName']) ? htmlspecialchars($_POST['addPlayerLastName']) : ''; ?>">

        <?php echo $validator->errors['nom du joueur'] ?? ''; ?>

        <label for="addPlayerBirthDate">Date de naissance du joueur : *</label>
        <input type="date" name="addPlayerBirthDate" value="<?php echo isset($_POST['addPlayerBirthDate']) ? htmlspecialchars($_POST['addPlayerBirthDate']) : ''; ?>">

        <?php echo $validator->errors['date de naissance'] ?? ''; ?>

        <label for="addPlayerPicture">Photo du joueur</label>
        <input type="file" name="addPlayerPicture">

        <?php echo $validator->errors['photo du joueur'] ?? ''; ?>

        <input type="hidden" name="addPlayer">
        <input type="submit" value="Ajouter">
    </form>

</body>

</html>