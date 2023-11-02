<?php
require_once "../Public/Seconnecter.php";

class ModelAnnee extends SeconnecterBDD {
    public function getAnnee(){
        $requete="SELECT *FROM annee";
        $quert=$this->connexionBDD->query($requete);
        return $quert->fetchAll();
   
    }
    public function verifierAnnee($annee_scolaire){
        $requete = "SELECT COUNT(*) as count FROM annee WHERE annee_scolaire= :annee_scolaire";
        $stmt = $this->connexionBDD->prepare($requete);
        $stmt->bindParam(':annee_scolaire', $annee_scolaire);
        $stmt->execute();
        $result = $stmt->fetch();
        $count = $result['count'];
        $anneeScolaire = $annee_scolaire;
        $delimiter = "-";
        $annees = explode($delimiter,$anneeScolaire);

        $annee_Debut = $annees[0];
        $annee_Fin = $annees[1];
        echo $annee_Debut."  ".$annee_Fin;
        
        if ($count>0 || ($annee_Fin - $annee_Debut!=1 || $annee_Debut>=$annee_Fin)) {
            echo "La date est déjà utilisée ou le format du date est incorrecte. Veuillez choisir une date différente";
        } else {
            echo" La date est unique,les données sont insérer.";
            $inserer=$this->connexionBDD->prepare("INSERT INTO annee(annee_scolaire) VALUES(:annee_scolaire)");
            $inserer->bindParam(':annee_scolaire', $annee_scolaire);
            $inserer->execute();
        }     
    }
    public function DelectAnnee($id_annee){
        $requete="DELETE FROM annee WHERE id_annee = $id_annee";
        $supprimer=$this->connexionBDD->prepare($requete);
        return $supprimer->execute();
    }
    public function ModifierAnnee($id_annee,$annee_scolaire){
        $requet= "UPDATE `annee` SET `annee_scolaire` = :annee_scolaire WHERE id_annee = :id_annee";
        $editer=$this->connexionBDD->prepare($requet);
        $editer->bindParam(':id_annee',$id_annee);
        $editer->bindParam(':annee_scolaire',$annee_scolaire);
        return $editer->execute();
       
    }
    public function ActiverAnnee($annee_scolaire){
      

    }
}