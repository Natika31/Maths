<style>
.ligne{
  display: table-row;
  height: 0.5em;
}

#console{
  width: 750px;
  padding: 20px;
}

#EtiquetteMatrice{
  padding-left: auto;
}
</style>

<fieldset id = "consoleInverse">
  <span id = "EtiquetteMatrice" >
  <label for="matrice" style="vertical-align: 0.55em; font-size:1.8em;"> A = </label>
    <span id = "matrice"></span>
      <span>
        <span class= "parentheseGauche" style= "padding-top : 1.253em; padding-bottom: 1.253em; font-size: 10em;">(</span>
      </span>
      <span class="mtable" style="vertical-align: 6.05em;padding: 0px 0.167em;">
        <span classe= "args">
          <?php for ($l = 0; $l < $_SESSION['ltp']->getDimension() ; $l++) : ?>
            <span class= "ligne" >
              <?php  for ($c = 0;$c < $_SESSION['ltp']->getDimension(); $c++) :?>
                <span class = "col1" style=" width: 1em">
                  <span class = "col1-b" style="margin-top: -0.2em;">
                    <span class = "col1-m" >
                        <span class="col1-s" style="padding-top: 0.351em; padding-bottom: 0.351em;"><?php $_SESSION['ltp']->getResultat($l, $c) ?? 1?></span>
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
