<?php

class Router{
    public function __construct(){
//         $uri=$_SERVER['REQUEST_URI'];
//          $uri=($uri=='/')? "/Connexion/formulaire/" : $uri;
//     //  echo $uri. "<br>";
//     $suppchlash=substr ($uri ,1,-1 );
//       echo $suppchlash."<br>";
//     $link=explode('/',$suppchlash);
//     if(isset($link[0]) && $link[0]){
//         //  echo "controleur existe"."<br>";
//     }
//     else{
//         //  echo "pas de controleur"."<br>";
//         $link[0]="Connexion";
        
//     }
    
//     //   echo $link[0]."<br>";
//     $ctrol='../Controllers/'.ucfirst(strtolower($link[0])).'Controller.php';
//     if (file_exists($ctrol)) {
//           echo "Le fichier existe."."<br>";
//         // $link[0]="Connexion";
//   } else {
//         //  echo "Le fichier n'existe pas."."<br>";
//     }
// // verifier esr-ce-qu'une classe existe
// //tester si l'action existe

// require_once '../Controllers/'.ucfirst(strtolower($link[0])).'Controller.php';
// $controleur =ucfirst(strtolower($link[0]))."Controller";
// $ctrl= new $controleur;
// if(isset($link[1]) && $link[1]){
//     //instancier l'objet controlleur
//          echo "action existe"."<br>";
        
//          if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//             // Créer une instance de ConnexionController
//             // $controller = new ConnexionController();
            
//             // Appeler la méthode authentifier()
//         //   $ctrl->authentifier();
         
//         }
//     }
//     else{
//         // echo "action n'existe pas"."<br>";
//     }
//     if(method_exists($ctrl,$link[1])){
//          echo "methode existe "."<br>";
//         $ctrl->formulaire();
//         // call_user_func([$ctrl,$link[1]],[]);
//         //$ctrl->authentifier();
//         //$result = $ctrl->afficherUser();
//         //$ctrl->enregistrerUtilisateur();
                
       
//     }
//     else{
//         // echo "methode n'existe pas"."<br>";
//     }

//     }
   
// }




// $uri = $_SERVER['REQUEST_URI'];
// //$uri=($uri=='/')? "/connexion/formulaire/" : $uri;
// $uri = explode('/', $uri)[0];

// echo $uri;
$routes = array(
    '/connexion/formulaire' => array(
        'controller' => 'ConnexionController',
        'action' => 'formulaire'
    ),
    '/connexion/authentifier' => array(
        'controller' => 'ConnexionController',
        'action' => 'authentifier'
    ),
    '/connexion/afficheruser' => array(
        'controller' => 'ConnexionController',
        'action' => 'afficherUser'
    ),
    '/connexion/enregistrerutilisateur' => array(
        'controller' => 'ConnexionController',
        'action' => 'enregistrerUtilisateur'
    ),
    '/niveau/afficherNiveau' => array(
        'controller' => 'NiveauController',
        'action' => 'afficherNiveau'
    ),
    '/niveau/traiterClasse' => array(
        'controller' => 'NiveauController',
        'action' => 'traiterClasse'
    ),  
);

$uri = $_SERVER['REQUEST_URI'];
$uri = parse_url($uri, PHP_URL_PATH);
echo $uri;
$uri=($uri=='/')? "/connexion/formulaire" : $uri;
$sup=substr($uri,1);
$slash=explode('/',$uri);
var_dump($slash);

if (array_key_exists($uri, $routes)) {
    $controllerName = $routes[$uri]['controller'];
    $actionName = $routes[$uri]['action'];
    require_once '../Controllers/' . $controllerName .'.php';
    $controller = new $controllerName();
    if (method_exists($controller, $actionName)) {
        $controller->$actionName();
        require "../Vue/".$slash[1].".html.php";
    } else {
        echo 'Action non trouvée';
    }
} else {
    echo 'Route non trouvée';
}
}
    }

