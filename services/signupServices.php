<?php
session_start();

include "../model/fonctions.php";
$pseudo = $_POST['pseudo'];
$email = $_POST['email'];
$password = $_POST['password'];


/*
 * Alfonso: Ceci devrait marcher mais il te reste des controles
 * à faire c'est à dire sur le pseudo. Sur l'email et le password
 * tu peut utiliser strlegnth strlen() pour la longueur d'un pseudo
 * et mot de passe et preg_match() pour vérifier le format d'un email
 * */

$result = inscription($pseudo, $email, $password);
$_SESSION['user'] = $result;

?>