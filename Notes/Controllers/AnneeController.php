<?php
require_once "/home/sarrpc/PHP/Notes/Models/ModelAnnee.php";
class AnneeController{
    private $controlannee;
    public function __construct(){
        $this->controlannee = new ModelAnnee();
    }
    public function AfficheAnnee(){
        $annes=$this->controlannee->getAnnee();
        include "../Vue/annee.php";
    }
    public function traiterAnnee(){
        $annee_scolaire=$_POST['annee_scolaire'];
        $anneevalide=$this->controlannee->verifierAnnee($annee_scolaire);
        header("Location: /annee/AfficheAnnee");
    }
    public function supprimerAnnee(){
        // if($_SERVER['REQUEST_METHOD']=='POST'){
        $anneesupprimer=$_POST['supprimer'];
        $suppression=$this->controlannee->DelectAnnee($anneesupprimer);
        echo $anneesupprimer;
        header("Location: AfficheAnnee");
        // }else{
        //     echo "erreur";
        // }
    }
    public function EditerAnnee(){
        $id_editer=$_POST['id_edite'];
        $anneeediter=$_POST['annee_edite'];
        var_dump($id_editer);
        var_dump($anneeediter);
        $editer=$this->controlannee->ModifierAnnee($id_editer,$anneeediter);
    }
    public function  activeAnnee(){

    }
}