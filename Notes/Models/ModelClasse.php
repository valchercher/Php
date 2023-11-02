<?php 
require_once "../Public/Seconnecter.php";
class ModelClasse  extends SeconnecterBDD{
    public function getClasse(){
        $requete="SELECT *FROM Classe";
        $donnees=$this->connexionBDD->query($requete);
        return $donnees->fetchAll();
    }
    public function insererNiveauEtude($classe,$id_niveau_classe) {
        $requet="SELECT COUNT(*) as count FROM Classe WHERE (classe=:classe 
        AND id_niveau_classe=:id_niveau_classe)";
        $requete=$this->connexionBDD->prepare($requet);
        $requete->bindParam(':classe',$classe);
        $requete->bindParam(':id_niveau_classe',$id_niveau_classe);
        $requete->execute();
        $resultat=$requete->fetch();
        $count= $resultat['count'];
        if($count>0){
            echo "cette classe existe dèjà";
        }else{

            $requete = $this->connexionBDD->prepare("INSERT INTO Classe (classe,id_niveau_classe)
             VALUES (?,?)");
            $requete->execute([$classe,$id_niveau_classe]);                           
        }
    }
    public function getNiveauClasse($id_select){
        $query=$this->connexionBDD->query("SELECT * FROM `Classe`JOIN Niveaux on 
        Classe.id_niveau_classe = Niveaux.id_niveau WHERE id_niveau_classe= $id_select;");
        return $query->fetchAll();
        
    }
    
}
