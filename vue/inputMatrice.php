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
<h3> Entrez vos valeurs : </h3>

  <table id='matrice'>
    <form
    <tbody>
      <?php $dimension = $_POST['dimension'] ?? 3;

      for ($l = 0; $l < $dimension; $l++) : ?>
      <tr class= "ligne">
        <?php for ($c = 0; $c < $dimension; $c++) : ?>
        <td >
            <input id="x" name="'a'.$l.$c" type="text" class="form" type="text">
         </td>
        <?php endfor; ?>
      </tr>
    <?php endfor; ?>
  </tbody>
</table>
</fieldset>
