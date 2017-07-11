<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forum FFXIV - Se connecter</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles/style_login.css" />
</head>
<body>

    <div id="banniere"><h1>Bienvenue !<h1></div>
    <form method="post" action="services/loginServices.php">
        <h3>Se connecter</h3>

        <div class="form-group">
            <div id="username"><label>Pseudo </label><input type="text" class="form-control" name="pseudo" /></div><br />
            <div id="password"><label>Mot de passe </label><input type="password" class="form-control" name="password" /></div>
            <div class="checkbox"><label><input type="checkbox" name="forgotten" />Mot de passe oublié ?</label></div><br />

            <input type="submit" class="btn btn-primary btn-sm" name="submit" value="Se connecter" />

            <button id="signup" class="btn btn-default btn-sm"><a href="index.php?page=signup">S'inscrire</a></button>
        </div>

        <p id="p0"></p>
        <p id="p1"></p>
    </form>


    <!--<script src="scripts/jquery-3.2.1.min.js"></script>
    <script src="scripts/login.js"></script>-->

</body>
</html>