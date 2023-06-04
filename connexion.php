<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="images/favicon.png">
    <title>Document</title>
</head>

<body>
    <div class="container text-center">
        <h6 class="bg-primary border rounded-top">Veuillez vous connecter</h6>
        <br>
        <div class="row bg-primary rounded-pirle rounded">
            <div class="col col-md-4"></div>
            <div class="col col-md-4">
                <form action="index.php" method="POST">
                    <div><label for="">Nom d'utilisateur:</label>
                        <input type="text" name="nom" class="form-control">
                    </div>

                    <div>
                        <label for="">Mot de passe:</label>
                        <div><input type="password" name="pass" class="form-control"></div>
                        <div class="form-check"><input type="checkbox" class="form-check-input"><label for="">Mot de passe oublié?</label></div>
                        <div class="form-check form-check-inline"><input type="submit" value="ENVOYER" class="btn btn-dark form-control"></div>
                        <div class=" form-check form-check-inline"><input type="submit" value="RETOUR" class="btn btn-primary bg-danger form-control"></div>
                </form>
                <div class="col col-md-4"></div>
            </div>
        </div>
</body>

</html>