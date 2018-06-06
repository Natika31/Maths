<?php

class LinkToPython{
    
    /*
     * Permet de faire le lien entre les donnees fournies par l IHM et le programme python qui va les traiter.
     * Et vice-versa
     */
    
    private $donnees = array();
    private $matriceResultat = array(); 
    private $dimension;
    
    
    /*
     * Constructeur de classe avec en parametre la dimension de la matrice 
     * 
     * @param int $dimension taille de la matrice carree
     * @throws \Exception si le parametre fourni n est pas un entier
     */
    
    function __construct($dim) {
        
        if ($dim instanceof int) {
            
            this.$dimension = $dim;
            for($i=0; $i<$dimension; $i++) {

                this.$donnees[$i] = array();
                for($j=0; $j<$dimension; $j++) {
                       
                    if (isset($_POST['a'.$i.$j])) { $donnees[$i][$j] = $_POST['a'.$i.$j]; }
                else { $donnees[$i][$j] = 0; }
                }
            }
        } else {     throw new Exception(" la dimension de la matrice doit etre un nombre entier ");}
    }    
     
    /*
     * Contruit une chaine de caractere representative de la matrice pouvant etre passee en parametre d'un script python
     * 
     * @return string
     */
           
    private function stringToPython(): string{
        
        $stringTP = " (' ";
        for($i=0; $i<$dimension; $i++) {
                
            for($j=0; $j<$dimension; $j++) {
                       
                $stringTP .= this.$donnees[$i][$j]."; ";
            }
        }        
        $stringTP .= "')";
        
        return $stringTP;   
    }
    
    public function fadeev() : array {
        
        $commande = "python ../fadeev.py ".this.stringToPython();
        $res = exec($commande); 
         
        return this.matriceResultat($res);    
    }

    private function matriceResultat($donnees) : array {
        
        $tableau = explode(";", $donnees);
        
        for($i=0; $i<$dimension; $i++) {
            
            this.$matriceResultat[$i] = array();
            for($j=0; $j<$dimension; $j++) {
                       
                $matriceResultat[$i][$j] = $tableau[$i+$j];
            }
        }    
        return $matriceResultat;
    }

    public function getResultat($ligne, $colonne) : int {
        
        return intval(this.$matriceResultat[$ligne][$colonne]);
    }
    
    
    
}    