<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forum FFXIV - Topic 1</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles/style_home.css" />
    <link rel="stylesheet" type="text/css" href="styles/style_header.css" />
    <link rel="stylesheet" type="text/css" href="styles/style_topic.css" />
</head>
<body>

    <?php include 'header.php'; ?>

    <main>
        <div class="row box-topic">
            <div class="col-sm-12">
                <h2><?php echo getTopicTitle(); ?></h2>
                <div class="row">
                    <div class="col-sm-4 profile-topic">
                        <h4>Profil</h4>
                        <?php echo getUsername(); ?>
                    </div>
                    <div class="col-sm-8 content-topic">
                        <?php echo getTopicContent(); ?>
                    </div>
                </div>
                <div class="time-topic">
                    Posté le <?php echo getTopicTime(); ?>
                </div>
            </div>
        </div>

        <div class="row box-topic">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-4 profile-topic">
                        <h4>Profil</h4>
                        <?php echo getUsername(); ?>
                    </div>
                    <div class="col-sm-8 content-topic">
                        <?php echo getCommentContent(); ?>
                    </div>
                </div>
                <div class="time-topic">
                    Posté le <?php echo getCommentTime(); ?>
                </div>
            </div>
        </div>



        <form method="post" action="services/replytopicServices.php">
            <div class="form-group">
                <label for="exampleInputFile">Répondre au topic</label>
                <textarea class="form-control" rows="8" placeholder="Tapez votre texte ici..." name="content"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Répondre</button>
        </form>

    </main>


    <script src="scripts/jquery-3.2.1.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
    <script src="scripts/home.js"></script>
    
</body>
</html>