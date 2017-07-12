<?php
session_start();

include "../model/fonctions.php";
$pseudo = $_POST['pseudo'];
$email = $_POST['email'];
$password = $_POST['password'];
$verifypassword = $_POST['verifypassword'];


/*
 * Alfonso: Ceci devrait marcher mais il te reste des controles
 * à faire c'est à dire sur le pseudo. Sur l'email et le password
 * tu peut utiliser strlegnth strlen() pour la longueur d'un pseudo
 * et mot de passe et preg_match() pour vérifier le format d'un email
 * */


 $_SESSION['signuperror'] = [];

if(empty($user) == true){
    $_SESSION['signuperror'][] = "";
}

if(strlen($pseudo) < 4){
    $_SESSION['signuperror'][] = "Le pseudo doit contenir au moins 4 caractères.";
}

if(strlen($pseudo) > 30){
    $_SESSION['signuperror'][] = "Le pseudo ne doit contenir que 30 caractères au maximum.";
}

if(strlen($password) < 8){
    $_SESSION['signuperror'][] = "Le mot de passe doit contenir au moins 8 caractères.";
}

if($verifypassword != $password){
    $_SESSION['signuperror'][] = "Les mots de passe ne correspondent pas.";
}

if(empty($_SESSION['singuperror']) == true){
    header("location: ../index.php?page=signup");
}

else{
    $result = inscription($pseudo, $email, $password);
    $_SESSION['user'] = $result;
    header("location: ../index.php?page=home");
}

?>