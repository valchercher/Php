<?php
require_once "../Public/Seconnecter.php";
class ModeleNiveauEtude  extends SeconnecterBDD{
    public function getNiveau(){
        $requete="SELECT *FROM Niveaux";
        $donnees=$this->connexionBDD->query($requete);
        return $donnees->fetchAll();
    }

    public function insererNiveauEtude($niveau) {
        $requete = "SELECT COUNT(*) as count FROM Niveaux WHERE niveau= :niveau";
        $stmt = $this->connexionBDD->prepare($requete);
        $stmt->bindParam(':niveau', $niveau);
        $stmt->execute();
         $result = $stmt->fetch();
        $count = $result['count'];
        
        if ($count>0) {
            echo "Le niveau est déjà utilisée . Veuillez choisir un niveau différente";
        } else {
            echo"";
            $insert=$this->connexionBDD->prepare("INSERT INTO Niveaux(niveau) VALUES(:niveau)");
            $insert->bindParam(':niveau', $niveau);
            $insert->execute();
        }     
    }
}
