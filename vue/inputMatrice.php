
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

<form class="dimension" method="post" action="index.php">
      <span id="dimension">
        <h3>Dimension de votre matrice :</h3>
        <input class="dimension" name="dimension" type="text" type="text" >
        <button class="dimension" type="submit"  id= "btok">ok</button>
      </span>
</form>
<br>
<?php $dimension = $_POST['dimension'] ?? 3; ?>
<?php $_SESSION['dimension'] = $dimension; ?>

<h3> Entrez vos valeurs pour cette matrice <?php echo $dimension.'x'.$dimension; ?></h3>
  <table id='matrice'>
    <form class="matrice" method="post" action="fadeev.php">
      <tbody>
        <?php for ($l = 0; $l < $dimension; $l++) :  ?>
        <tr class= "ligne">
          <?php for ($c = 0; $c < $dimension; $c++) : ?>
            <td >
              <input id="x" name= "<?php'a'.$l.$c ?>" type="text" class="form" >
            </td>
          <?php endfor; ?>
        </tr>
      <?php endfor;?>

    </tbody>
    <button id= "btCalcul" type="submit"  id= "btCalcul">Calculer</button>
  </form>
</table>
</fieldset>
