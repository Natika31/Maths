<?php

class LinkToPython{
    
    /*
     * Permet de faire le lien entre les donnees fournies par l IHM 
     * et le programme python qui va les traiter.
     * Et vice-versa
     */
    
    private $donnees = array();
    private $matriceResultat = array(); 
    private $dimension;
    private $res = array();
    private $inversible = false;
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
     * Contruit une chaine de caractere representative de la matrice pouvant etre 
     * passee en parametre d'un script python
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
    
     /**
     * Envoi une requete vers le fichier python, 
     * renvoie false si il y a un probleme
     * sinon traite les exceptions
     * 
     * @return bool
     */
    
    public function fadeev() : bool {
                
        $commande = "python ../modele/fadeev.py 1 ".$this->stringToPython()."";
        exec($commande, $res); 
        
        if ($res != false) {
            if ($res[0] == 'e0') { echo 'Le determinant est nul, la matrice n\'est pas inversible !';}
            if ($res[0] == 'e1') { echo 'mode incorrect'; }
            if ($res[0] == 'e2') { echo 'mauvais nombre d\'arguments'; }
                
                
            $this->createMatriceResultat($res);
            $this->inversible = true;
        }    
        return $this->inversible;
    }
    
    public function getDeterminant() : string {
        
        $commande = "python ../modele/fadeev.py 2 ".$this->stringToPython();
        exec($commande, $res);
        
        if ($res != false){
            
            if ($res[0] == 'e0') { return "0";}
            if ($res[0] == 'e1') { echo 'mode incorrect'; }
            if ($res[0] == 'e2') { echo 'mauvais nombre d\'arguments'; }
               
           return $res[0];     
        
           
        } else {
      
            return "erreur";
        }  
    }
    
    
    private function createMatriceResultat($donnees) {
        
        $tableau = explode(";", trim($donnees[0]));
               
        for($i=0; $i < $this->dimension; $i++) {
            
            if (substr($tableau[$i],0,1) == '_') { $tableau[$i] = substr($tableau[$i],1);}
           
            $this->matriceResultat[$i] = array();
                    
                 $ligne = explode('_', $tableau[$i]); 
                     
            for($j=0; $j < $this->dimension; $j++) {
          
                $this->matriceResultat[$i][$j] = $ligne[$j];
            }
        }
    }

    public function getResultat($ligne, $colonne) : string {
        
        if ($this->inversible) {
             return $this->matriceResultat[$ligne][$colonne];
        }else { return '#';        
        }
    }
 
    public function getValeur($ligne, $colonne) : string {
        
        return $this->donnees[$ligne][$colonne];
    }
    
    public function getDimension() : int {
       return $this->dimension;
    }    
 }    
 
 