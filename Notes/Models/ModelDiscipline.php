<?php
require_once "../Public/Seconnecter.php";
class ModelDiscipline extends SeconnecterBDD{
   
    public function getNiveauDiscipline(){
        $requete="SELECT *FROM Niveaux";
        $stmt=$this->connexionBDD->query($requete);
        return $stmt->fetchAll(); 
        
    }
    public function afficherClasse($id_selectionner){
        $query=$this->connexionBDD->query("SELECT * FROM `Classe`JOIN Niveaux on 
        Classe.id_niveau_classe = Niveaux.id_niveau WHERE
         id_niveau_classe= $id_selectionner;");
        return $query->fetchAll();
    }
    public function groupeDiscipline(){
        $data=$this->connexionBDD->query("SELECT * FROM `Groupe_disciplines`;");
        return $data->fetchAll();
        

    }
    public function discipline($id_discpl){
        $donnee= $this->connexionBDD->query("SELECT * FROM `DISCIPLINE` WHERE id_groupe_discipline=$id_discpl; ");
        return $donnee->fetchAll();
    }
    public function classeDiscipline($discpline){
        $requte= $this->connexionBDD->query("SELECT *FROM DISCIPLINE JOIN Classe JOIN classe_discipline on (classe_discipline.id_Classe=Classe.id_classe AND classe_discipline.id_Discipline=DISCIPLINE.id_DIscipli) WHERE Classe.id_classe=$discpline");
        return $requte->fetchAll();
    }
   
    public function insertDiscipline($libelle, $code_ecriture, $id_groupe_discipline, $id_Classe)
    {
        $query = "SELECT libelle from DISCIPLINE WHERE libelle = :libelle";
        $stmt = $this->connexionBDD->prepare($query);
        $stmt->bindParam(":libelle", $libelle);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return "Erreur dans l'insertion";
        } else {
            $query = "INSERT INTO DISCIPLINE(libelle,code_ecriture,id_groupe_discipline) VALUES(:libelle,:code_ecriture,:id_groupe_discipline)";
            $stmt = $this->connexionBDD->prepare($query);
            $stmt->bindParam(":libelle", $libelle);
            $stmt->bindParam(":code_ecriture", $code_ecriture);
            $stmt->bindParam(":id_groupe_discipline", $id_groupe_discipline);
            if ($stmt->execute()) {
                $id_Discipline = $this->connexionBDD->lastInsertId();
                $queryInscription = "INSERT INTO classe_discipline (id_Classe, id_Discipline)  VALUES (:id_Classe, :id_Discipline)";
                $statementInscription = $this->connexionBDD->prepare($queryInscription);
                $params = [
                    ":id_Classe" => $id_Classe,
                    ":id_Discipline" => $id_Discipline
                ];
                if ($statementInscription->execute($params)) {
                    echo "L'insertion a réussi";
                    return true;
                } else {
                    echo "Erreur dans l'insertion de la table inscription";
                    return false;
                }
            } else {
                echo "Erreur dans l'insertion de la discipline";
                return false;
            }
        }
    }
    public function supprimer($id_DIscipli){
        try{
        $query =$this->connexionBDD->prepare("DELETE FROM `DISCIPLINE` WHERE `DISCIPLINE`.`id_DIscipli` =:id_DIscipli");
        $query->bindParam(':id_DIscipli',$id_DIscipli);
        $query->execute();
        }
        catch(PDOException $e){
            echo "erreur lors de la supprission".$e->getMessage();
        }
        // try {
        //     $upd= $this->connexionBDD->prepare("UPDATE DISCIPLINE SET libelle =$libelle' WHERE id_DIscipli = $id_DIscipli");
        //     $upd->bindParam(':libelle',$libelle);
        //     $upd->bindParam(':id_DIscipli',$id_DIscipli);
        //     $upd->execute();
        // } catch (PDOException $e) {
        //     echo "erreur lors de la mise à jour :".$e->getMessage();
        // }
    }
    public function insertGroupeDiscipline($libelle ) {
        $requete = "SELECT COUNT(*) as count FROM `Groupe_disciplines` WHERE `libelle` = :libelle ";
        $stmt = $this->connexionBDD->prepare($requete);
        $stmt->bindParam(':libelle', $libelle);
        $stmt->execute();
        $result = $stmt->fetch();
        $count = $result['count'];
        if ($count > 0) {
             echo "Cette groupe discipline existe déjà.";
        } else {
            $requete = "INSERT INTO `Groupe_disciplines` (`libelle`) VALUES (:libelle);";
            $stmt = $this->connexionBDD->prepare($requete);
            $stmt->bindParam(':libelle', $libelle);
            $stmt->execute();
             echo "Groupe discipline insérée avec succès.";
            
        }
    }
    public function premierLettres(){
        $query=$this->connexionBDD->query("SELECT code_ecriture from DISCIPLINE;");
        return $query->fetchAll();
    }
}