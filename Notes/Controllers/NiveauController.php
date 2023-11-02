<?php 
require_once("../Models/ModelNiveau.php");
class NiveauController  {
    private $model;
    public function __construct() {
        $this->model = new ModeleNiveauEtude();
    }
    public function afficherNiveau() {
        $niveaux = $this->model->getNiveau();
        include "../Vue/niveau.html.php";
       
    }
    public function listeNiveau(){
        $niveaux = $this->model->getNiveau();
         header('Content-Type: application/json; charset=utf-8');
        echo json_encode($niveaux);
    }
    public function traiterClasse() {
        echo "je suis capable de traiter lrs classes";
        $ajouter = $_POST['niveau']; 
        $niveauajouter=$this->model->insererNiveauEtude($ajouter);
        header("Location:afficherNiveau");
        exit();
    }
}
