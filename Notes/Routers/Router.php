<?php
require_once '../Controllers/ConnexionController.php';
require_once '../Controllers/NiveauController.php';
require_once "../Controllers/EleveController.php";
require_once "../Controllers/AnneeController.php";
require_once "../Controllers/ClasseController.php";

$controlleEleve = new EleveController();
$controller = new ConnexionController();
$anneees = new ControllerAnnee();
$niveauxs= new NotesController();
$classes= new ClasseController();

// $action = isset($_GET['action']) ? $_GET['action'] : 'formulaire';

// if ($action === 'formulaire') {

//     $controller->afficherformulaire();

// } elseif ($action === 'authentifier') {

//     $controller->authentifier();

// }


$action = isset($_GET['action']) ? $_GET['action'] : 'formulaire';

// require_once 'controller/ConnexionController.php';

$controller = new ConnexionController();

if ($action === 'formulaire') {
    $controller->formulaire();
} elseif ($action === 'enregistrer') {
    $controller->enregistrerUtilisateur();
} elseif ($action === 'authentifier') {
    $controller->authentifier();
} 
elseif ($action=='cycle') {

    // include "../Vue/niveau.html.php";
    $niveaux=$niveauxs->outputNiveau();
    // $ajout=$niveauxs->traiterClasse();
    require "../Vue/niveau.html.php";
}
elseif($action=='classe'){
    include  '../Vue/classe.html.php';
    $classes->afficheNiveauClasse();

}
 elseif ($action === 'Accueil') {

    include  '../Vue/Accueil.php';

} elseif ($action === 'niveau') {

    include '../Vue/niveau.php';

} elseif ($action === 'traiterFormulaire') {

    $controller = new NiveauEtudeController();
    $controller->traiterFormulaire();

} elseif ($action === 'confirmation') {

    echo "Les données sont bien insérées dans la base de données.";

} elseif ($action==='eleve') {
    $eleves=$controlleEleve->AfficherEleve();
    include  ("../Vue/eleve.php");
    
        // include  '../Views/enregistrer.php';

} elseif ($action==='traitement'){

        $controlleEleve->traitement();

}elseif ($action==='confirmation'){

        echo "les données sont bien insérer dans la base des donneés";

}elseif ($action==='annee'){

    $annes=$anneees->AfficheAnnee();
    include  ("../Vue/annee.php");
    $anneees->EditerAnnee();
    $supp=$anneees->supprimerAnnee();
    require ("../Vue/annee.php");

}elseif($action==='traiterAnnee'){

    $anneees->traiterAnnee();
    $annes=$anneees->AfficheAnnee();
    require ("../Vue/annee.php");

}
?>


    
<?php    
// public function __construct(){
// // $uri = $_SERVER['REQUEST_URI'];
// // //$uri=($uri=='/')? "/connexion/formulaire/" : $uri;
// // $uri = explode('/', $uri)[0];

// // echo $uri;
// $routes = array(
//     '/connexion/formulaire' => array(
//         'controller' => 'ConnexionController',
//         'action' => 'formulaire'
//     ),
//     '/connexion/authentifier' => array(
//         'controller' => 'ConnexionController',
//         'action' => 'authentifier'
//     ),
//     '/connexion/afficheruser' => array(
//         'controller' => 'ConnexionController',
//         'action' => 'afficherUser'
//     ),
//     '/connexion/enregistrerutilisateur' => array(
//         'controller' => 'ConnexionController',
//         'action' => 'enregistrerUtilisateur'
//     ),
//     '/niveau/afficherNiveau' => array(
//         'controller' => 'NiveauController',
//         'action' => 'afficherNiveau'
//     ),
//     '/niveau/traiterClasse' => array(
//         'controller' => 'NiveauController',
//         'action' => 'traiterClasse'
//     ),  
// );
// $uri = $_SERVER['REQUEST_URI'];
// $uri = parse_url($uri, PHP_URL_PATH);
// echo $uri;
// if (array_key_exists($uri, $routes)) {
//     $controllerName = $routes[$uri]['controller'];
//     $actionName = $routes[$uri]['action'];
//     require_once '../Controllers/' . $controllerName .'.php';
//     $controller = new $controllerName();
//     if (method_exists($controller, $actionName)) {
//         $controller->$actionName();
//     } else {
//         echo 'Action non trouvée';
//     }
// } else {
//     echo 'Route non trouvée';
// }
// }
