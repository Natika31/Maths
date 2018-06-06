<! DOCTYPE html>
<link rel="stylesheet" type="text/css">
    <nav>
        <ul><a href="./index.php"> MATRICE </a></ol>
              <li>
                <ul class="niveau3">
                  <li><a href="index.php#inputMatrice"> Votre matrice </a> </li>
                  <li><a href="index.php#console"> Console </a> </li>
                  <li><a href="index.php#inverse"> Matrice inverse </a> </li>
                  <li><a href="index.php#determinant"> Déterminant </a> </li>
                </ul>
              </li>
        </ul>

        <ul><a href="./khaletski.php"> KHALETSKI </a></ol>
              <li>
                <ul class="niveau3">
                  <li><a href="khaletski.php#matricesTriangulaires">Matrices triangulaires </a> </li>
                  <li><a href="khaletski.php#inverse">Matrice inverse</a></li>
                </ul>
              </li>
        </ul>

        <ul><a href="./fadeev.php"> FADEEV </a>
              <li>
                <ul class="niveau3">
                  <li><a href="fadeev.php#trace">Trace</a></li>
                  <li><a href="fadeev.php#determinant">Déterminant</a></li>
                  <li><a href="fadeev.php#inverse">Matrice inverse </a> </li>
                  <li><a href="fadeev.php#polynome">Polynome caractéristique</a></li>
                </ul>
             </li>
        </ul>
      </ul>
    </nav>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
$("a").on('click', function(event) {

if (this.hash !== "") {
	event.preventDefault();

	var hash = this.hash;

	$('html, body').animate({
		scrollTop: $(hash).offset().top
	}, 800, function(){

		window.location.hash = hash;
	});
}
});
});
</script>
