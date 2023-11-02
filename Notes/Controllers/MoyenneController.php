<?php
require_once "../Models/ModelMoyenne.php";
require_once "../Models/ModelCoefficient.php";
require_once "../Models/ModelEleve.php";
class moyenneController extends Controller{
    private $moyenne;
    public function __construct(){
        $this->moyenne = new ModelMoyenne();
        $this->moyen =new ModelCoefficient();
        $this->eleve = new ModelEleve();
    }
    public function  liste($id_classe){
        $classes=$this->moyenne->getClasse($id_classe);
        $disciplines=$this->moyen->classeDiscipline($id_classe);
        $eleves=$this->eleve->getEleve($id_classe);
        $semestres=$this->moyenne->selectSemestre();
       include "../Vue/moyenne.html.php";
    }
    public function getSelect($input,$id_classe,$id_discipline){
        $donnee=$this->moyenne->select($input,$id_classe,$id_discipline);
        $this->renderJson($donnee);       
    }
    public function getSemestre(){
        

    }
}