<?php

include "../model/fonctions.php";
$pseudo = $_POST['pseudo'];
$email = $_POST['email'];
$password = $_POST['password'];

$result = inscription($pseudo, $email, $password);

if($result == 1){
    header("location: ../index.php?page=login&inscription=success");
}

?>