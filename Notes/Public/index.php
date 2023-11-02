<?php

error_reporting(E_ALL);
ini_set('display_errors',1);
//  require_once "../Routers/Routeur.php";
//    $route=new Router();

require_once "../Controllers/Controller.php";
$uri=$_SERVER['REQUEST_URI'];
// echo $uri[-1];
if($uri[-1]==='/'){
$supp=substr($uri,1,-1);
// var_dump($supp);
}else{
  $supp=substr($uri,1);
  // var_dump($supp);
}
// var_dump($uri);
$slach=explode("/",$supp);
// var_dump ($slach[0]);
if(isset($slach[0]) && $slach[0]){
  // echo "controleur present";
  if(file_exists("../Controllers/".ucfirst(strtolower($slach[0])))."Controller.php"){
    // echo "le fichier existe";
    $controller= ucfirst(strtolower($slach[0]))."Controller";
    require_once "../Controllers/".$controller.".php";
    if(isset($slach[1]) && $slach[1]){
      // echo "methode present";
      $ctrol= new $controller;
      if(method_exists($ctrol,$slach[1])){
        $link=$slach[1];
        // echo "methode existe";
        array_shift($slach);
        array_shift($slach);
        call_user_func_array(array($ctrol,$link),$slach);
        
      }else{
        echo "methode n'existe pas";
      }
    }else{
      echo "methode absent";
    }
  }else{
    echo "le fichier n'existe pas";
  }
}else{
  require_once "../Vue/formulaire_authentification.php";
}

  ?>
 

    

