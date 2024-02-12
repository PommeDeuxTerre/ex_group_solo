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
            <label for="nom">nom</label>
            <input type="text" id="nom" name="nom" value="<?=$nom?>">
        </div>
        <div class="field">
            <label for="date">Date de naissance</label>
            <input id="date" type="date" name="date" value="<?=$date?>">
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
            <p><?=$message?></p>
        <?php
        endif;
        ?>
    </form>
</body>
</html>