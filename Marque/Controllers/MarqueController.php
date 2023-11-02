<?php
namespace Controle;
 require_once "../vendor/autoload.php";
 use Acme\MarqueModel;
 
class MarqueController{
    private $modelMarque;
    

    public function __construct() {
        $this->modelMarque = new MarqueModel();
        
    }

    public function listerMarque() {
        $marque = $this->modelMarque->getAllMarque();
        return $marque;

   }
   public function AddMarque(){
        $libelle=$_POST['libelle'];
        $add=$this->modelMarque->insertMarque($libelle);
        return $add;
        header("Location: index.php");
   }
}