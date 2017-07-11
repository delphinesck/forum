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

function getIdFromSession(){
    return $_SESSION['user'][0]["id"];
}

function getTopicTitle(){
    $topic = getTopicById($_GET['id']);
    return $topic[0]['title'];
}

function getTopicContent(){
    $topic = getTopicById($_GET['id']);
    return $topic[0]['content'];
}

function getTopicTime(){
    $topic = getTopicById($_GET['id']);
    return $topic[0]['datecreate'];
}

function getCommentContent(){
    $comment = getCommentById($_GET['id']);
    return $comment[0]['content'];
}

function getCommentTime(){
    $comment = getCommentById($_GET['id']);
    return $comment[0]['datecreate'];
}

function getUsername(){
    $userId = getIdFromSession();
	$user = getUserById($userId);
    return $user[0]['username'];
}

function getEmail(){
    $userId = getIdFromSession();
	$user = getUserById($userId);
    return $user[0]['email'];
}

function getDateCreate(){
    $userId = getIdFromSession();
	$user = getUserById($userId);
    return $user[0]['datecreate'];
}

function getFeedback(){
    $control = false;
    if(isset($_GET['controle'])){
        $control = $_GET['controle'];
    }
    return $control;
}

function getUserById($id){
    $connexion = getConnexion();
    $pdo = $connexion->prepare('SELECT * FROM user WHERE id=:id');
    $pdo->execute(array(
        'id'=>$id
    ));
    $user = $pdo->fetchAll(PDO::FETCH_ASSOC);
    return $user;
}

function getConnexion(){
    $connexion = new PDO('mysql:host=localhost;dbname=TP_forumPHP;charset=UTF8','root','root');
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    return $connexion;
}

function inscription($pseudo, $email, $password){
    $connexion = getConnexion();
    $pdo = $connexion->prepare('INSERT INTO user SET username=:pseudo, email=:email, upassword=:password, datecreate=NOW()');
    $pdo->execute(array(
        'pseudo'=> $pseudo,
        'email' => $email,
        'password'=> $password
    ));
    $result = $pdo->rowCount();
    return $result;
}

function login($pseudo, $password){
    $connexion = getConnexion();
    $pdo = $connexion->prepare('SELECT * FROM user WHERE username=:pseudo AND upassword=:password');
    $pdo->execute(array(
        'pseudo'=>$pseudo,
        'password'=>$password
    ));
    $user = $pdo->fetchAll(PDO::FETCH_ASSOC);
    return $user;
}

function createtopic($title, $content){
    $connexion = getConnexion();
    $pdo = $connexion->prepare('INSERT INTO topic SET title=:title, content=:content, datecreate=NOW()');
    $pdo->execute(array(
        'title'=> $title,
        'content' => $content
    ));
    $newtopic = $connexion->lastInsertId();
    return $newtopic;
}

function createComment($content){
    $connexion = getConnexion();
    $pdo = $connexion->prepare('INSERT INTO post SET content=:content, datecreate=NOW()');
    $pdo->execute(array(
        'content' => $content
    ));
    $newcomment = $connexion->lastInsertId();
    return $newcomment;
}

function getTopicById($id){
    $connexion = getConnexion();
    $object = $connexion->prepare('SELECT * FROM topic WHERE id=:id');
    $object->execute(array(
        'id' => $id
    ));
    $topic = $object->fetchAll(PDO::FETCH_ASSOC);
    return $topic;
}

function getCommentById($id){
    $connexion = getConnexion();
    $object = $connexion->prepare('SELECT * FROM post WHERE id=:id');
    $object->execute(array(
        'id' => $id
    ));
    $comment = $object->fetchAll(PDO::FETCH_ASSOC);
    return $comment;
}

?>