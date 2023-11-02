<?php
require_once "../Models/ModelDiscipline.php";
class DisciplineController extends Controller{
    private $discipline;
    public function __construct(){
        $this->discipline = new ModelDiscipline();
    }
    public function gestion(){
        $niveaux = $this->discipline->getNiveauDiscipline();                
        include "../Vue/Discipline.html.php";
    }
    public function Groupe(){
        $datas = $this->groupeDiscipline();
        include "../Vue/Discipline.html.php";
    }

    public function listeGroupe(){
        $groupes= $this->discipline->groupeDiscipline();
        $this->renderJson($groupes);
    }
    public function listeDiscipline($id_discpl){
        $donnees=$this->discipline->discipline($id_discpl);
        $this->renderJson($donnees);
    }
    public function listeDisciplineClasse($discipline){
        $data=$this->discipline->classeDiscipline($discipline);
        $this->renderJson($data);
    }
    public function insert($libelle, $code_ecriture, $id_groupe_discipline, $id_Classe){
        $valeurs=$this->discipline->insertDiscipline($libelle, $code_ecriture, $id_groupe_discipline, $id_Classe);
        json_decode($valeurs);
    }
    public function Decocher($id_DIscipli){
        $supprimer = $this->discipline->supprimer($id_DIscipli);
    }
    
    public function AjoutGroupeDiscipline($libelle){
        $groupe = $this->discipline->insertGroupeDiscipline($libelle);
    }
    public function troisPremiersLettre(){
        $donnees =$this->discipline->premierLettres();
        $this->renderJson($donnees);
    }
}