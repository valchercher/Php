<?php
require_once "../Public/Seconnecter.php";
class ModelMoyenne extends SeconnecterBDD{
    public function getClasse($id_classe){
        $query=$this->connexionBDD->query("SELECT * from Classe WHERE Classe.id_classe=$id_classe");
       return $query->fetch();
    }
    public function select($input,$id_classe,$id_discipline){
        $requette=$this->connexionBDD->query("SELECT $input from Classe join classe_discipline on Classe.id_classe=classe_discipline.id_Classe join DISCIPLINE on classe_discipline.id_Discipline=DISCIPLINE.id_DIscipli WHERE Classe.id_classe=$id_classe and classe_discipline.id_Discipline=$id_discipline;");
        return $requette->fetchAll();

    }
    public function selectSemestre(){
        $query=$this->connexionBDD->query("SELECT * FROM semestre");
        return $query->fetchAll();
    }

}