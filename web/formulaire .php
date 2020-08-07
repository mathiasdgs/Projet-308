<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style2 .css">
  <title>Formulaire</title>
</head>

<body>


  <header>
    <div id="entete">
      <div id="boxlogo">
        <img id=logopeugeot src="img/logo-Peugeot .png" alt="logoPeugeot">
      </div>
      <div id="boxtitreetnav">
        <div id="title">
          <h1 id="titre1">Concession Peugeot Simplon.co</h1>
        </div>
        <div id="menu1">
          <nav class="menu">
            <ul>
              <li class="btn"><a href="./index .html">Accueil</a></li>
              <li class="btn"><a href="./formulaire .php">Réservez en ligne</a></li>
            </ul>
        </div>
      </div>
    </div>


  </header>





  <div id="Mainbloc">
    <img src="img/peugeot-308-2006ns-110-fr.683217.43.png">
    <div id="Formulaire">

      <?php 
    if(isset($_POST["valider"])){
      $file='data.txt';
      $mail=$_POST["mail"];
      $lastname =$_POST["lastname"];
      $firstname =$_POST["firstname"];
      $data =array($mail,"__", $firstname,"__", $lastname);
      file_put_contents($file, implode('', $data).PHP_EOL,FILE_APPEND | LOCK_EX);
      header("location:mailchimp.php?mail=$mail&nom=$lastname&prenom=$firstname");
}
      ?>


      <form method="POST">
        <div id="fieldset">
          <legend>Réserver vôtre essais en ligne</legend>

          <div class="form-group">
            <label for="email">Entrez votre mail</label>
            <input type="email" name="mail" class="form-control" id="email" placeholder="E-mail">
          </div>
          <div class="form-group">
            <label for="prenom">Entrez votre prénom</label>
            <input type="text" name="lastname" class="form-control" id="prenom" placeholder="Prénom">
          </div>
          <div class="form-group">
            <label for="nom">Entrez votre nom</label>
            <input type="text" name="firstname" class="form-control" id="nom" placeholder="Nom">
          </div>



          <input type="submit" value="valider" name="valider" />
          </fieldset>
      </form>
    </div>
  </div>
  </div>
  </div>


  <div id="Secondbloc">
    <div id=iframeBlock>
      <iframe id="mapif"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.580040252702!2d3.129366415128393!3d45.759564579105486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f71c45a4dac12b%3A0x7e043ce074dc12e1!2sP%C3%A9pini%C3%A8re%20d&#39;Entreprises%20Pascalis%20-%20Clermont%20Auvergne%20M%C3%A9tropole!5e0!3m2!1sfr!2sfr!4v1596024230409!5m2!1sfr!2sfr"
        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
        tabindex="0"></iframe>
    </div>
    <div id="contact">
      <p id="titretext">Nous contacter:</p>
      <p class="text"> 10 Allée Evariste Galois, 63000 Clermont-Ferrand </p>
      <p class="text">concessionpeugeotsimplon@gmail.com</p>
      <p class="text">+33473445600</p>
    </div>



  </div>
  <footer>
    <p id=foot>
      ©2020 All rights Reserved. Par Mathias & Christophe.
    </p>
  </footer>

</body>

</html>