<! DOCTYPE html>

<html>
  <head>
      <meta charset="utf-8">
      <title> Bienvenue </title>
      <?php require('../vue/style.html');  ?>

  </head>
  <body>
        <?php require('../vue/navBar.php'); ?>
      <main>

        <h1 id= "titre"> Calculateur </h1>
          <?php require('../vue/inputMatrice.php'); ?>
        <h2 id="resultat"> Console </h2>
          <?php /*require('../vue/console.php');*/ ?>
          <?php /*require('../modele/function/function.php');*/ ?>
        <h3 id="inverse"> Matrice inverse </h2>
          <?php/* require('../vue/consoleInverse.php'); */?>
        <h3 id="determinant"> Déterminant </h2>
          <?php /*require('../vue/consoleDeterminant.php'); */?>
      </main>
  </body>
</html>
