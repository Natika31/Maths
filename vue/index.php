<! DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <title> Bienvenue </title>
      <?php require('../vue/style.html');  
            session_start();?>

  </head>
  <body>
        <?php require('../vue/navBar.php'); ?>
      <main>
         <?php require_once('../modele/LinkToPython.php'); ?>
        <h1 id= "titre"> Calculateur </h1>
          <?php require('../vue/inputMatrice.php');
                if (isset($_SESSION['dimension'])) {
                    $_SESSION['ltp'] = new LinkToPython(intval($_SESSION['dimension'])); 
                    $_SESSION['ltp']->setMatrice();
                    $_SESSION['ltp']->fadeev();
                }?>
        <h2 id="resultat"> Console </h2>
          <?php require('../vue/console.php'); ?>
        <h3 id="inverse"> Matrice inverse </h2>
          <?php require('../vue/consoleInverse.php'); ?>
        <h3 id="determinant"> Déterminant </h2>
          <?php require('../vue/consoleDeterminant.php'); ?>
      </main>
  </body>
</html>
