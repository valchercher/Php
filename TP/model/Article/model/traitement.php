<?php

class ArticleCinfection
{
    private $libelle;
    private $qteStock;
    private $prix;
    private $montant;
    private $observation;
    public function __constructeur(){
        $this->libelle=$libelle;
        $this->qteStock=$qteStock;
        $this->prix=$prix;
        $this->montant=$montant;
        $this->observation=$observation;
    }
    public function champsValide(){
        return ($this->libelle=="test"&&$this->qteStock=="15"&&
        $this->prix=="1000"&&$this->montant=="15000"&&
        $this->observation=="textphp");
    }
    
    
}
?>