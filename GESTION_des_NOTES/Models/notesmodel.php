<?php
class Model{

    private $bd;

    public function __construct(){
        $dsn ='mysql:host=localhost;dbname=Gestions_des_notes';
        $user ='root';
        $password ='Sarr.pc1';
        try {
            $this->bd=new PDO($dsn, $user,$password);
            $this->bd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOExeption $e) {
        echo "Message Erreur".$e->getMessage();
        }
    }
     public function getNiveau(){
        $requete="SELECT *FROM niveau";
        $donnees=$this->bd->query($requete);
        return $donnees->fetchAll();
     }
}
