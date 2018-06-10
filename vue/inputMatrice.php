
<?php session_start(); ?>
<style>
  #champMatrice{
    width: 750px;
    padding: 20px;
  }
  #x{
    width: 50px;
  }

  .ligne{
    margin-top: 15px;
  }

  #btok{

  height: 25px;
  }

  #btCalcul{
    margin-top: 10px;
  }

  #dimension{
    margin-top: 10px;
  }

  #matrice{
  }

</style>

<fieldset id="champMatrice">
  <h1> Votre matrice </h1>
<<<<<<< HEAD
  <?php $_SESSION['dimension'] = $_SESSION['dimension'] ?? 3 ?>
<form class="dimension" method="post" action="index.php">
      <span id="dimension">
        <h3>Dimension de votre matrice :</h3>
        <input class="dimension" name="dimension" type="text" type="text" value="<?php if (isset($_SESSION['dimension'])) echo $_SESSION['dimension']; ?>">
=======

<form class="dimension" method="post" action="index.php">
      <span id="dimension">
        <h3>Dimension de votre matrice :</h3>
        <input class="dimension" name="dimension" type="text" type="text" >
>>>>>>> master
        <button class="dimension" type="submit"  id= "btok">ok</button>
      </span>
</form>
<br>
<<<<<<< HEAD
<?php if (isset($_POST['dimension'])) $_SESSION['dimension'] = $_POST['dimension'];
      $dimension = $_SESSION['dimension']; ?>

<h3> Entrez vos valeurs pour cette matrice <?php echo $dimension.'x'.$dimension; ?></h3>
  <table id='matrice'>
    <?php $matrice = array(); ?>
   
      <form class="matrice" method="post" action="index.php">
=======
<?php $dimension = $_POST['dimension'] ?? 3; ?>
<?php $_SESSION['dimension'] = $dimension; ?>

<h3> Entrez vos valeurs pour cette matrice <?php echo $dimension.'x'.$dimension; ?></h3>
  <table id='matrice'>
    <form class="matrice" method="post" action="fadeev.php">
>>>>>>> master
      <tbody>
        <?php for ($l = 0; $l < $_SESSION['dimension']; $l++) :  ?>
        <tr class= "ligne">
          <?php for ($c = 0; $c < $dimension; $c++) : ?>
            <td >
<<<<<<< HEAD
              <input id="x" name= "a<?= $l ?><?= $c ?>"  type="text" class="form" >
=======
              <input id="x" name= "<?php'a'.$l.$c ?>" type="text" class="form" >
>>>>>>> master
            </td>
          <?php endfor; ?>
        </tr>
      <?php endfor;?>

    </tbody>
    <button id= "btCalcul" type="submit"  id= "btCalcul">Calculer</button>
  </form>
</table>
</fieldset>
