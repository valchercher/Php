<?php
require "../Models/ModelCoefficient.php";
class CoefficientController{
    private $coeff;
    public function __construct(){
        $this->coeff =new ModelCoefficient();
    }
    public function afficher($discipline){
        
        $disciplines= $this->coeff->classeDiscipline($discipline);
        $nomclasse=$this->coeff->nomClasse($discipline);
        include "../Vue/Coefficient.html.php";

    }
    public function stoupper($id_classe_discipline){
        $data= $this->coeff->delecte($id_classe_discipline);
    }
    public function updateExamen(){
        $donnees=json_decode(file_get_contents('php://input'),true);
        print_r($donnees);
        
        $id=$donnees['id'];
        $input=$donnees['value'];
        $ressource=$donnees['not'];
        // if(!($input>0 && $input<20)){
        //     echo "erreur: la note est compris entre 0 et 20";
        // }else{
        // }
        $donnee=$this->coeff->modifier($ressource,$input,$id);
        echo json_encode($donnee);              
    }
    

}