<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <form method="post" action="../index.php">
        <div class="field">
            <label for="prenom">Prénom</label>
            <input type="text" id="prenom" name="prenom" value="<?=$prenom?>">
        </div>
        <div class="field">
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" value="<?=$nom?>">
        </div>
        <div class="field">
            <label for="date">Date de naissance</label>
            <input id="date" type="date" name="date" value="<?=$date?>">
        </div>
        <div class="field">
            <label for="gender">Genre</label>
            <ul>
                <li>
                    <input id="homme" type="radio" name="gender">
                    <label for="homme">Homme</label>
                </li>
                <li>
                    <input id="femme" type="radio" name="gender">
                    <label for="femme">Femme</label>
                </li>
                <li>
                    <input id="pomme" type="radio" name="gender" checked>
                    <label for="pomme">Pomme</label>
                </li>
            </ul>
        </div>
        <div class="field">
            <label for="password">Mot de passe</label>
            <input id="password" type="password" name="password">
        </div>
        <div class="field">
            <input type="submit" value="Envoyer">
        </div>
        <?php
        if ($message!==""):
        ?>
            <p class="error"><?=$message?></p>
        <?php
        endif;
        ?>
    </form>
</body>
</html>