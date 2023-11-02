<?php
require_once "../Public/Seconnecter.php";
class ModelEleve extends SeconnecterBDD{
    
    public function getEleve($classe_select){
        $requete=$this->connexionBDD->query("SELECT nom,prenom,photo FROM eleve join Classe on eleve.classe_eleve=Classe.classe where id_classe=$classe_select");
        return $requete->fetchAll();
    }

    public function insererEleve($nom, $prenom,$classe) {
        $requete = $this->connexionBDD->prepare("INSERT INTO eleve (nom, prenom,classe) VALUES (?,?,?)");
        $requete->execute([$nom, $prenom,$classe]);
    }
}

