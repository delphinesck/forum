<?php
session_start();

include "../model/fonctions.php";
$pseudo = $_POST['pseudo'];
$password = $_POST['password'];

$result = login($pseudo, $password);
$_SESSION['user'] = $result;


header("location: ../index.php?page=home");

?>