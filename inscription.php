<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="images/favicon.png">
    <title>Inscription</title>

</head>

<body>
    <form action="" method="POST" class="bg-secondary container" style="margin-top: 80px;">
        <center>
            <fieldset>
                <legend> Fomulaire d'Inscription</legend>
                <p>
                <div class="form-group">
                    <input type="text" name="nom" placeholder="saisir votre nom" class="form-control bg-dark">
                </div>
                <div class="form-group"><input type="text" name="prenom" placeholder="saisir votre prénom" class="form-control bg-warning"></div>
                <div class="form-group"><input type="color" name="couleur" class="form-control form-control-comprends bg-warning" value="#563d7c" title="Choose your color"></div>
                <div class="form-group"><input type="tel" name="téléphone" class="form-control bg-danger" placeholder="Saisir votre numéro"></div>
                <div class="form-group"><input type="text" name="age" id="18n" class="form-control bg-primary" placeholder="Saisir votre age"><label for="18n"></label></div>
                <div class="form-group"><input type="email" name="email" id="18n" class="form-control bg-dark" placeholder="Saisir votre email"><label for="18n"></label></div>
                <div class="form-group"><input type="password" name="pass" id="18n" class="bg-purple form-control is-valid" placeholder="Saisir votre mot de passe" required><label for="18n"></label></div>
                <div class="form-check form-check-inline"><input type="radio" name="sexe" class="form-control"><label for="">Masculin</label></div>
                <div class="form-check form-check-inline"><input type="radio" name="sexe" class="form-control"><label for="">Feminin</label></div>
                <div class="form-check form-switch"><input type="checkbox" role="switch" class="form-check-input"></div><br>

                <div class="form-group"><label for=""> Votre pays:</label>
                    <select name="pays" id="" class="form-select bg-red">
                        <option value="choix"> BENIN</option>
                        <option value="choix"> NGERIA</option>
                        <option value="choix"> TOGO</option>
                        <option value="choix"> CONGO</option>
                        <option value="choix"> GHANA</option>
                    </select>
                </div>
                <div class="form-check form-check-inline"><input type="submit" value="ENVOYER" class="btn btn-primary"></div>
                <div class=" form-check form-check-inline"><input type="submit" value="RETOUR" class="btn btn-primary bg-danger"></div>
                </p>

            </fieldset>
        </center>
    </form>

</body>

</html>
<?php
$severname = "localhost";
$dbname = "iniweb";
$username = "root";
$password = "";

try {
    $con = new PDO("mysql:host=$severname; dbname=$dbname", $username, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);/* Normalisation de PDO. Le mode d'exeption d'erreur */
    echo "Aurelle tu as réussi <br>";
} catch (PDOException $e) {
    echo "ERREUR" . $e->getMessage();
}
$moi = $_POST['nom'];
$lui = $_POST['prenom'];
$toi = $_POST['pass'];
$ins = "INSERT INTO users(nom,prenom,pass) VALUES('$moi','$lui','$toi')";/* On affecte la requete dans la variable ins */
$con->exec($ins);/* On utilise la fonction exec pour exécuter la variable ins dans notre connexion */
echo "L'Insertion marche " . $lui;
?>