<?php

class MachineACafe{//obligation de mettre toutes nos variables ici
    private $marque;    
    private $enFonction=false;
    private $cafe;
     private $dosette=5;
    private $sucre=1;
    private $monnaie=50.37    ;
    private $prixcafe=0.5;
 


    public function allumage(){
        if ($this->enFonction==false){
           $this->enFonction=true;
            return $this->marque."est en fonctionnement";
        }else   {
        //    $this->enFonction==false;
            
           return $this->marque."est éteinte";}
    }
    public function mettreUneDosette(){
        if($this->dosette>0){

            $this->dosette--;
            return "il reste"." ".$this->dosette." "."dosettes";

        }
        else{
            die ("On n'a pas de dosette");
        }
    }

    public function sucre(){
    
            if($this->sucre>0){
    
                $this->sucre--;
                return "il reste"." ".$this->sucre." "."sucres";
    
            }
            else{
                return( "On n'a pas de sucre");
            }
        }
        function prixcafe($prixcafe){
            $this->cafe=$prixcafe;
        }
 
    public function monnaie(){
        if ($this->monnaie>=$this->prixcafe){
              $this->monnaie=  $this->monnaie-$this->prixcafe;
                return "Votre monnaie est de ".$this->monnaie;
        }
     
        else {
            $this->monnaie=  $this->monnaie-$this->prixcafe;
            die ("il vous manque " .$this->monnaie);
        }
    }

    

    public function faireDuCafe(){
        if($this ->dosette>=0 && $this->monnaie>=0 && $this->enFonction==true){
            // $this->enFonction==true;
            echo $this->mettreUneDosette() .'<br>';
            echo $this->sucre().'<br>';
            echo $this->monnaie().'<br>';
            return $this->cafe."le café est prêt";
        }
        else {
            return $this->cafe."le café n'est pas prêt";
        }

    }
    public function __construct($marque){
        $this->marque= $marque;
    }
}