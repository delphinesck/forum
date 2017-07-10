<?php

function getPage(){
    if(isset($_GET['page'])) {
        $page = $_GET['page'];
    }
    else {
        $page = 'login';
    }
    return $page;
}

function getUsername(){
    return "Delphine";
}

function getFeedback(){
    $control = false;
    if(isset($_GET['controle'])){
        $control = $_GET['controle'];
    }
    return $control;
}

function getBaseDeDonnees(){
    $connexion = new PDO('mysql:host=localhost;dbname=TP_forumPHP;charset=UTF8','root','root');
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    return $connexion;
}

function inscription($pseudo, $email, $password){
    $connexion = getBaseDeDonnees();
    $pdo = $connexion->prepare('INSERT INTO user SET username=:pseudo, email=:email, upassword=:password');
    $pdo->execute(array(
        'username'=> $pseudo,
        'email' => $email,
        'upassword'=> $password
    ));
    $result = $pdo->rowCount();
    return $result;
}
?>