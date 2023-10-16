<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Add Player</title>
</head>

<body>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <label for="firstname">Firstname :</label>
        <input type="text" id="firstname" name="firstname" required><br>

        <label for="lastname">Lastname :</label>
        <input type="text" id="lastname" name="lastname" required><br>

        <label for="birthdate">Date of birth :</label>
        <input type="date" id="birthdate" name="birthdate" required><br>

        <label for="picture">Picture :</label>
        <input type="file" id="picture" name="picture" required><br>

        <input type="submit" value="Enregistrer">
    </form>
</body>

</html>