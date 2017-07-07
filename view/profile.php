<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forum FFXIV - Votre profil</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles/style_home.css" />
    <link rel="stylesheet" type="text/css" href="styles/style_header.css" />
</head>
<body>

    <?php include 'header.php'; ?>

    <main>
        <form class="form-horizontal">
            <div class="form-group">
                <label class="col-sm-4 control-label">Avatar</label>
                <div class="col-sm-6">
                    <img src="..." alt="..." class="img-thumbnail">
                    <span class="form-group">
                        <input type="file" id="exampleInputFile">
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-4 control-label">Pseudo</label>
                <div class="col-sm-6">
                    <p class="form-control-static">pseudonyme</p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Email</label>
                <div class="col-sm-6">
                    <p class="form-control-static">email@example.com</p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Date d'inscription</label>
                <div class="col-sm-6">
                    <p class="form-control-static">01/01/17</p>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword" class="col-sm-4 control-label">Modifier votre mot de passe</label>
                <div class="col-sm-6">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Mot de passe">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword" class="col-sm-4 control-label">Confirmer le mot de passe</label>
                <div class="col-sm-6">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Mot de passe">
                </div>
            </div>

            <button type="submit" class="btn btn-default enregistrer">Enregistrer</button>
        </form>
    </main>




    <script src="scripts/jquery-3.2.1.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
    <script src="scripts/home.js"></script>
    
</body>
</html>