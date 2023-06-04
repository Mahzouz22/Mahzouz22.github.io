<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="Css/stylepropos.css">
  <link rel="shortcut icon" href="images/favicon.png">
  <style>
    .carousel-item {
      transition: transform 2s ease, opacity .5s ease;
    }
  </style>
  <title>Document</title>
</head>

<body>
  <b>
    <font size="4em" style="color: #000000;"> Pour toutes vos informations contactez <a class="mail" href="mailto:Razteck@gmail.com" class="gauche">Razteck@gmail.com</a>/+22996742406</font>
  </b>
  <b class="gauche1"><button type="submit"><a href="inscription.php" style="color: #000000; text-decoration: none;">Register</a></button>
    <button type="submit"><a href="connexion.php" style="color: #000000; text-decoration: none;">Log in</a></button>
    <button type="submit"><a href="logout.html" style="color: #000000; text-decoration: none;">Log out</a></button></b>
  <header>

    <nav>
      <ul>
        <li><a class="lien" href="">Acceuil</a></li>
        <li><a class="lien" href="contact1.html">Contact</a></li>
        <li><a class="lien" href="propos.html">A propos de nous</a></li>
        <li><a class="lien" href="CV pro.html">Mon CV</a></li>
        <li><a class="lien" href="formation.html">Nos Formations</a></li>
      </ul>
    </nav>

    <h1 align="center"> TPapy </h1>
  </header>

  <h1><small></small></h1>

  <p> </p>

  <div class="container" style="margin-left: 180px;">
    <div id="carousel-example-generic" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carousel-example-generic" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carousel-example-generic" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carousel-example-generic" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/cat.jpg" alt="First slide" width="100%" height="25%" class="d-block">
          <div class="carousel-caption d-none d-md-block">
            <div class="home-title" style="color: #000000;">
              <h4> Soyez les Bienvenus à TPapy </h4>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/3.jpg" alt="Second slide" width="100%" height="25%" class="d-block">
          <div class="carousel-caption d-none d-md-block">
            <div class="home-title" style="color: #000000;">
              <h4>Commencez votre carrière d'avenir içi</h4>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/4.jpg" alt="Third slide" width="100%" height="25%" class="d-block">
          <div class="carousel-caption d-none d-md-block">
            <div class="home-title" style="color: #000000;">
              <h4>Naviguez facilement avec carousel</h4>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" data-bs-target="#carousel-example-generic" type="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" data-bs-target="#carousel-example-generic" type="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script>
      var t0
      var t1
      var carousel = document.getElementById('carousel-example-generic')

      // Test to show that the carousel doesn't slide when the current tab isn't visible
      // Test to show that transition-duration can be changed with css
      carousel.addEventListener('slid.bs.carousel', function(event) {
        t1 = performance.now()
        console.log('transition-duration took ' + (t1 - t0) + 'ms, slid at ' + event.timeStamp)
      })
      carousel.addEventListener('slide.bs.carousel', function() {
        t0 = performance.now()
      })
    </script>
    <br>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae facere est sit iusto accusantium illo, iure voluptatibus et quisquam eos beatae autem amet sed? Voluptatibus tenetur dicta sint soluta ipsum veniam pariatur dolorum sed provident eaque incidunt suscipit, quam minus reprehenderit atque ullam! Tempora esse dolore quod molestiae. Vel, aliquid?</p>
    <?php
    $noms = "Mahzouz";/* Déclaration des variables */
    $age = 6;/* Déclaration des variables */
    $age2 = 10;
    $age = ($age + $age2);
    $age3 = ($age % $age2);
    $annee = date('Y');
    $jour = date('D');
    $mois = date('M');
    $heure = date('H');
    $minute = date('m');
    $seconde = date('s');
    echo "<h1> Bonjour mon frère\n" . $noms . "\nComment tu vas ? Tu as\n" . $age . "\nans et ta soeur a\n" . $age3 . "\nans</h1>";
    if ($age == 16) {
      echo "<h4>Vous etes éligible</h4>";
    } else {
      echo "<h4>Vous n'etes pas éligible. Vous etes la soeur de\n" . $noms . "</h4>";
    }

    if (empty($_POST['nom']) || empty($_POST['pass'])) {
      echo "<h4>Veuillez remplir le formulaire</h4>";
    } else {
      echo "<h3>Je connais ton nom\n" . $_POST['nom'] . "\net ton mot de passe est: " . $_POST['pass'] . "</h3>";
    }
    echo "<h4>On est aujourd'hui à " . $jour . "/" . $mois . "/" . $annee . "\nL'heure à laquelle vous remplissez le formulaire est: " . $heure . "h\n" . $minute . "mins\n" . $seconde . "sec\n </h4>";

    $coordonnees = array(
      'prenom' => 'François',
      'nom' => 'Dupont',
      'adresse' => '3 Rue du Paradis',
      'ville' => 'Marseille'
    );
    foreach ($coordonnees as $cle => $element) {
      echo '[' . $cle . '] vaut ' . $element . '<br />';
    }

    ?>

</body>

</html>