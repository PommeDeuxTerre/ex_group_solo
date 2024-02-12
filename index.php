<?php
$message = "";
$url = "./php/signup.php";
$prenom = empty($_POST["prenom"]) ? "" : $_POST["prenom"];
$nom = empty($_POST["nom"]) ? "" : $_POST["nom"];
$date = empty($_POST["date"]) ? "" : $_POST["date"];
$password = empty($_POST["password"]) ? "" : $_POST["password"];
if (!$prenom && !$nom && !$date && !$password){
    include($url);
}else if (!$prenom || !$nom || !$date || !$password) {
    $message = "vous n'avez pas remplis tous les champs";
    include($url);
}else {
    $birth_time = strtotime($date);
    $now_time = strtotime(date_default_timezone_get());
    $delay_time = 60*60*24*365*18;
    if ($now_time-$birth_time<$delay_time){
        $message = "Vous n'avez pas l'âge requis";
        include($url);
        die;
    }
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
