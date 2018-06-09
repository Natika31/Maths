<?php

class LinkToPython{
    
    /*
     * Permet de faire le lien entre les donnees fournies par l IHM et le programme python qui va les traiter.
     * Et vice-versa
     */
    
    private $donnees = array();
    private $matriceResultat = array(); 
    private $dimension;
    private $res = array();
    
    /*
     * Constructeur de classe avec en parametre la dimension de la matrice 
     * 
     * @param int $dimension taille de la matrice carree
     * @throws \Exception si le parametre fourni n est pas un entier
     */
    
    function __construct(int $dim) {
        
        //if ($dim instanceof int) {
            
            $this->dimension = intval($dim);
            
       // } else {  echo "la dimension de la matrice doit etre un nombre entier ";}
    }    
    
    
    /*
     * Rempli la matrice a partir des valeurs contenues dans la superglobale $_POST
     * Si une valeur n est pas saisie, la valeur 0 est affectee par defaut
     */
    
    function setMatrice(){
       
        for($i=0; $i<$this->dimension; $i++) {

            $this->donnees[$i] = array();
            for($j=0; $j<$this->dimension; $j++) {
                 
                $post = 'a'.$i.$j ; 
                if (isset($_POST[$post])) { $this->donnees[$i][$j] = $_POST[$post]; }
                else { $this->donnees[$i][$j] = 0; }
            }
        }
    }
    
    
    
    /*
     * Contruit une chaine de caractere representative de la matrice pouvant etre passee en parametre d'un script python
     * 
     * @return string
     */
           
    private function stringToPython(): string{
       
        $stringTP1 = "\"";
        for($i=0; $i<$this->dimension; $i++) {
                
            for($j=0; $j<$this->dimension; $j++) {
                       
                $stringTP1 .= " ".$this->donnees[$i][$j] ?? "0";
            }
           $stringTP1 .= " ;";
        }
         
        $stringTP = rtrim($stringTP1, ';');
        $stringTP .= "\"";
        
        return $stringTP;   
    }
    
 
    
    public function fadeev() : array {
        
        
        $commande = "python fadeev.py 1 ".$this->stringToPython()."";
        echo $commande;
        exec($commande, $res); 
        
        echo 'resultat de fadeeev = <br>';
        var_dump($res);
        return $this->createMatriceResultat($res);    
    }
    
    
    
    private function createMatriceResultat($donnees) : array {
        
        $i = 0;
        foreach ($donnees as $ligne) { 
           
            
            $ligne = rtrim($ligne, '] ');
            $ligne = ltrim($ligne, ' [');
            $valeurs = preg_split('/ +/', $ligne);
            
            $this->matriceResultat[$i] = array();
       
            for($j=0; $j<$this->dimension; $j++) {
               echo $valeurs[$j].'<br>'; 
               
               $strToFloat = floatval($ligne[$j])*1.0;
               echo 'valeur de $strToFloat '.$j.' = '.$strToFloat.'<br>';
               
               $this->matriceResultat[$i][$j] = $strToFloat;
            }
            $i += 1;
        }    
       
        
        return $this->matriceResultat;
    }

    public function getResultat($ligne, $colonne) : int {
        
        return intval($this->matriceResultat[$ligne][$colonne]);
    }
 }    