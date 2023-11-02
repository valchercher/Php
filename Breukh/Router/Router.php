<?php
require "../Controller/FatherController.php";
class Router{
    public function __construct(){
        $uri=$_SERVER['REQUEST_URI'];
    // echo $uri. "<br>";
    $suppchlash=substr ($uri ,1,-1 );
    // echo $suppchlash."<br>";
    $link=explode('/',$suppchlash);
    if(isset($link[0]) && $link[0]){
        // echo "controleur existe";
    }
    else{
        // echo "pas de controleur";
        $link[0]='home';
        
    }
    
     echo $link[0]."<br>";
    $ctrol='../Controller/'.ucfirst(strtolower($link[0])).'Controller.php';
    if (file_exists($ctrol)) {
        // echo "Le fichier existe.";
    } else {
        // echo "Le fichier n'existe pas.";
    }
// verifier esr-ce-qu'une classe existe
//tester si l'action existe
if(isset($link[1]) && $link[1]){
    //instancier l'objet controlleur
    require_once '../Controller/'.ucfirst(strtolower($link[0])).'Controller.php';
    
    $controleur =ucfirst(strtolower($link[0]))."Controller";
    $ctrl= new $controleur;
        echo "action existe"."<br>";
    }
    else{
        echo "action n'existe pas"."<br>";
    }
    if(method_exists($ctrl,$link[1])){
        // echo "methode existe "."<br>";
        call_user_func([$ctrl,$link[1]],[]);
        
       
    }
    else{
        echo "methode n'existe pas"."<br>";
    }

    }
   
}
