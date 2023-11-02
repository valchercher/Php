<?php
namespace Acme;
use PDO;
class MarqueModel{
    private $BDD;
    public function __construct(){
        $dsn="mysql:host=localhost;dbname=Demo";
        $user="root";
        $password="Sarr.pc1";
        try {
            $this->BDD= new PDO($dsn,$user,$password);
            $this->BDD->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        } catch (PDOEXCEPTION $e) {
          echo "Erreur".$e->getMessage();
        }
    }
    public function getAllMarque(){
        $query="SELECT * FROM marque";
        $marques=$this->BDD->query($query);
        return $marques->fetchAll();
        
    }
    public function insertMarque($libelle){
        $insert=$this->BDD->prepare("INSERT INTO marque(libelle) VALUES(?)");
        $insert->execute([$libelle]);
    }    
}