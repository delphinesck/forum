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

?>