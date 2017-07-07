<?php

include_once("model/fonctions.php");
$page = getPage();


	switch( $page ) {
		case 'login':
            $feedback = getFeedback();
			include_once('view/login.php');
			break;
        case 'signup':
			$feedback = getFeedback();
			include('view/signup.php');
			break;
        case 'home':
			include('view/home.php');
			break;
        case 'category':
			include('view/category.php');
			break;
        case 'createtopic':
			include('view/createtopic.php');
			break;
        case 'post':
			include('view/post.php');
			break;
		case 'profile':
			$username = getUsername();
			include_once('view/profile.php');
			break;
        case 'messages':
			$username = getUsername();
			include_once('view/messages.php');
			break;
	}

?>