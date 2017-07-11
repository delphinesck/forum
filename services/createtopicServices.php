<?php
session_start();

include "../model/fonctions.php";
$title = $_POST['title'];
$content = $_POST['content'];

$topicid = createtopic($title, $content);

header("location: ../index.php?page=topicdisplay&id=$topicid");


?>