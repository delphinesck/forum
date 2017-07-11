<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forum FFXIV - Nouveau topic</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles/style_home.css" />
    <link rel="stylesheet" type="text/css" href="styles/style_header.css" />
</head>
<body>

    <?php include 'header.php'; ?>

    <main>
        <form method="post" action="services/createtopicServices.php">
            <h2>Créer un nouveau topic</h2>

            <div class="form-group">
                <label for="exampleInputEmail1">Titre</label>
                <input type="text" class="form-control" id="exampleInputName2" placeholder="Titre de votre topic" name="title">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Ajouter une photo</label>
                <input type="file" id="exampleInputFile" name="image">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Texte</label>
                <textarea class="form-control" rows="8" placeholder="Tapez votre texte ici..." name="content"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Poster</button>
        </form>
    </main>





    <script src="scripts/jquery-3.2.1.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
    <script src="scripts/post.js"></script>
    
</body>
</html>