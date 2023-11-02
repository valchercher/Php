<?php 
require_once("..Models/niveau.html.php");
class ControllerNiveau{
    
    public function creation(){
        if($_SERVER['REQUEST_METHOD']=='POST')
        $niveau=$_POST['niveau'];
        $Niveau=new Niveau();
        $Niveau=setNiveau($niveau);

        // Appeler la méthode pour enregistrer les données dans la base de données
    $Niveau->save();

    // Rediriger vers une autre page après l'enregistrement
    header("Location: index.php");
    exit();

    }
}