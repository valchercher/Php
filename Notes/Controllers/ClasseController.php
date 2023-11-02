<?php
require "../Models/ModelClasse.php";
class ClasseController extends Controller{
    private $controlle;
    public function __construct(){
        $this->controlle=new ModelClasse();
    }
    public function classe(){
        $classes = $this->controlle->getClasse();
        $this->renderJson($classes);
    }
    public function liste($id_select){
         
        $classes=$this->controlle->getNiveauClasse($id_select);
        include "../Vue/classe.html.php";
    }
    public function listeclasse($id_select){
         
        $classes=$this->controlle->getNiveauClasse($id_select);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($classes);
    }
    public function addclasse(){
        echo "je suis capable d'ajouter";
        $class= $_POST['classe'];
        $id_selection=$_POST['id_niveau_classe'];
        $classes = $this->controlle->insererNiveauEtude($class,$id_selection);
        $classes=$this->controlle->getNiveauClasse($id_selection);
        include "../Vue/classe.html.php";
    }
}