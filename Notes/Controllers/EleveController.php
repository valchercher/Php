<?php
require_once "../Models/ModelEleve.php";
class EleveController{
    private $modeleEleve;
    public function __construct(){
        $this->modeleEleve = new ModelEleve();
    }
    public function listeEleve($classe_select){
    $eleves = $this->modeleEleve->getEleve($classe_select);
     include "../Vue/eleve.html.php";
    }
    public function traitement() {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $classe = $_POST['classe'];
        $date_naissance = $_POST['date_naissance'];
        $type_eleve = $_POST['type_eleve'];

        $date_Formatted = date('Y-m-d', strtotime($date_naissance));        
        $this->modeleEleve->insererEleve($nom, $prenom,$date_Formatted,$classe,$type_eleve);
        header("Location: index.php?action=confirmation");
        exit();
    }
    
}
?>