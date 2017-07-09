<?php

include_once("model/fonctions.php");
$page = getPage();

    /**
     * Alfonso:  Tu as déclaré / implementer plusieurs pages
     * ne reste pas la dessus et passe aux services
     *
     * Ne traines pas trop sur le design des pages maintenant
     * t'as déjà bien avancé comme ça
     *
     * Aussi penche toi sur le design de la base de données
     * Il faut que tu crées un fichier database.sql et tu l'enregistrera
     * dans le dossier sql comme ça je saurais quelle structure tu utilise
     * Tu pourras éditer ce fichier depuis mysql_workbench
     */

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