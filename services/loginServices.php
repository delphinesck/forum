<?php
session_start();

include "../model/fonctions.php";
$pseudo = $_POST['pseudo'];
$password = $_POST['password'];

$user = checkUserLogin($password, $pseudo);







$_SESSION['loginerror'] = [];

if(empty($user) == true){
    $_SESSION['loginerror'] = "Le pseudo ou le mot de passe sont érronés.";
    header("location: ../index.php?page=login");
};

if(empty($user) == false){
    $result = login($pseudo, $password);
    $_SESSION['user'] = $result;
    header("location: ../index.php?page=home");
}


?>