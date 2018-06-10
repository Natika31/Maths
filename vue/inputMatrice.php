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
        <input class="dimension" name="dimension" type="text" type="text">
        <button class="dimension" type="submit"  id= "btok">ok</button>
      </span>
</form>
<br>
<?php $dimension = $_POST['dimension'] ?? 3;?>

<h3> Entrez vos valeurs pour cette matrice <?php echo $dimension.'x'.$dimension; ?></h3>
  <table id='matrice'>
    <?php $matrice = array(); ?>
    <form class="matrice" method="post" action="index.php">
      <tbody>
        <?php for ($l = 0; $l < $dimension; $l++) :  ?>
        <tr class= "ligne">
          <?php for ($c = 0; $c < $dimension; $c++) : ?>
            <td >
              <input id="x" name= 'cellule' type="text" class="form" >
              <?php/* $matrice[$l][$c] */$a = $_POST('cellule'); echo $a; */?>
            </td>
          <?php endfor; ?>
        </tr>
      <?php endfor;?>
    </tbody>
    <button class="matrice" type="submit"  id= "btCalcul">Calculer</button>
  </form>
</table>
</fieldset>
