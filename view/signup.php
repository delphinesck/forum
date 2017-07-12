<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forum FFXIV - S'inscrire</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles/style_signup.css" />
</head>
<body>

    <div id="banniere"><h1>Bienvenue !<h1></div>

    <form method="post" action="services/signupServices.php">
        <h3>S'inscrire</h3>

        <div class="form-group">
            <div id="username"><label>Pseudo </label><input type="text" class="form-control" name="pseudo" /></div><br />
            <div id="email"><label>E-mail </label><input type="text" class="form-control" name="email" /></div><br />
            <div id="password"><label>Mot de passe </label><input type="password" class="form-control" name="password" /></div><br />
            <div id="verifypassword"><label>Vérifier le mot de passe </label><input type="password" class="form-control" name="verifypassword" /></div>
            
            <?php
            print_r($_SESSION['signuperror']);
            ?><br /><br />

            <input type="submit" class="btn btn-primary btn-sm" name="submit" value="S'inscrire" />

            <button id="signup" class="btn btn-default btn-sm"><a href="index.php?page=login">Se connecter</a></button>
        </div>
    </form>

</body>
</html>