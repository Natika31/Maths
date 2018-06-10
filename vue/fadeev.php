<! DOCTYPE html>
<?php session_start(); ?>

<html>
  <head>
      <meta charset="utf-8">
      <title> Fadeev </title>
      <?php require('../vue/style.html');  ?>

  </head>

  <body>
      <header>
        <?php require('../vue/navBar.php'); ?>
      </header>
      <main>
/*require('../modele/function.php'); */?>
        <h1 id= "titre"> FADEEV </h1>
        <?php require('../vue/console.php'); ?>
        <h2 id="trace"> Trace </h2>
        <h2 id="determinant"> Déterminant </h2>
        <h2 id="inverse"> Matrice Inverse </h2>
        <h2 id="polynome"> Polynome Caractéristique </h2>


      </main>
  </body>
</html>
