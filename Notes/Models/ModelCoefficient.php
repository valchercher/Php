<?php
require_once "../Public/Seconnecter.php";
class ModelCoefficient extends SeconnecterBDD{
    // public function getCoefficient(){
    //     $requete="SELECT *FROM DISCIPLINE";
    //     $stmt=$this->connexionBDD->query($requete);
    //     return $stmt->fetchAll(); 
    // }
    public function classeDiscipline($discpline){
        $requte= $this->connexionBDD->query("SELECT * from Classe join classe_discipline on classe_discipline.id_Classe=Classe.id_classe join DISCIPLINE on classe_discipline.id_Discipline=DISCIPLINE.id_DIscipli WHERE Classe.id_classe=$discpline;");
        return $requte->fetchAll();
    }
    public function nomClasse($discpline){
        $requte= $this->connexionBDD->query("SELECT classe,id_classe FROM Classe WHERE Classe.id_classe=$discpline;");
        return $requte->fetch();
    }
    public function delecte($id_classe_discipline){
        $port=$this->connexionBDD->prepare("DELETE FROM `classe_discipline` WHERE `classe_discipline`.`id_classe_discipline` =$id_classe_discipline");
        $port->execute();
    }
    public function modifier($ressource,$input,$id){
        $requet= $this->connexionBDD->prepare("UPDATE classe_discipline set  $ressource=$input where id_classe_discipline=$id;");
        $requet->execute();
    }

}