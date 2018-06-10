<style>
.ligne{
  display: table-row;
  height: 0.5em;
}

#console{
  width: 750px;
  padding: 20px;
}

#etiquetteMatrice{
  padding-left: auto;
}
</style>
<?php $matrice = array();
for ($li = 0; $li < $_SESSION['dimension']; $li++) :
  for ($co = 0; $co < $_SESSION['dimension']; $co++) :
    $matrice[$li][$co] = $_POST['a'.$li.$co];
  endfor;
endfor;?>


<fieldset id = "console">
  <span id = "etiquetteMatrice" >
  <label for="matrice" style="vertical-align: 0.55em; font-size:1.8em;"> A = </label>
    <span id = "matrice"></span>
      <span>
        <span class= "parentheseGauche" style= "padding-top : 1.253em; padding-bottom: 1.253em; font-size: 10em;">(</span>
      </span>
      <span class="mtable" style="vertical-align: 6.05em;padding: 0px 0.167em;">
        <span classe= "args">
          <?php for ($li = 0; $li < $_SESSION['dimension']; $li++) : ?>
            <span class= "ligne" >
              <?php  for ($co = 0;$co < $_SESSION['dimension']; $co++) :?>
                <span class = "col1" style=" width: 1em">
                  <span class = "col1-b" style="margin-top: -0.2em;">
                    <span class = "col1-m" >
                        <span class="col1-s" style="padding-top: 0.351em; padding-bottom: 0.351em;"> <?php  echo $matrice[$li][$co] = $_POST['a'.$li.$co]; ?></span>
                    </span>
                  </span>
                </span>
              <?php endfor; ?>
            </span>
          <?php endfor; ?>
        </span>
      </span>
      <span>
        <span id= "parentheseDroite" style= "padding-top : 1.253em; padding-bottom: 1.253em;font-size: 10em;">)</span>
      </span>
  </span>

</fieldset>
