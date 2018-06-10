<style>


#console{
  width: 750px;
  padding: 20px;
}

#EtiquetteMatrice{
  padding-left: auto;
}
</style>

<fieldset id = "console">
  <span id = "EtiquetteMatrice" >

  <label for="matrice" style="font-size:1.8em;"> det(A) = <?= $_SESSION['ltp']->getDeterminant() ?? '';?></label>
    <span id = "matrice">
      
    </span>
  </span>

</fieldset>
