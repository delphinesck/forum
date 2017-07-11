<?php
session_start();

include "../model/fonctions.php";
$content = $_POST['content'];

$commentid = createComment($content);

header("location: ../index.php?page=topicdisplay&id=$commentid");

?>