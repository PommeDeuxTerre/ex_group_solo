<?php
$message = "";
$url = "./html/signup.php";
if (empty($_POST["prenom"]) && empty($_POST["nom"]) && empty($_POST["date"]) && empty($_POST["password"])){
    include($url);
}else if (empty($_POST["prenom"]) || empty($_POST["nom"]) || empty($_POST["date"]) || empty($_POST["password"])) {
    $message = "vous n'avez pas remplis tous les champs";
    include($url);
}else {
    $birth_time = strtotime($_POST["date"]);
    $now_time = strtotime(date_default_timezone_get());
    $delay_time = 60*60*24*365*18;
    if ($now_time-$birth_time<$delay_time){
        $message = "Vous n'avez pas l'âge requis";
        include($url);
        die;
    }
    $password = $_POST["password"];
    $length_check = strlen($password)>=8;
    $digit_check = preg_match("/\d/", $password);
    $uppercase_check = preg_match("/[A-Z]/", $password);
    $symbol_check = preg_match("/[!@#$%^&*(),.?\":{}|<>]/", $password);
    if (!$length_check)$message = "il faut un mot de passse d'au moins 8 caractères";
    else if (!$digit_check)$message = "il faut au moins un chiffre dans le mot de passe";
    else if (!$uppercase_check)$message = "il faut au moins une majuscule dans le mot de passe";
    else if (!$symbol_check)$message = "il faut au moins un symbole dans le mot de passe";
    else header('Location: https://2023.webdev-cf2m.be/Gregory/FTP_HOME/');
    if ($message)include($url);
}