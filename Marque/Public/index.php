<?php
 require_once "../vendor/autoload.php";
error_reporting(E_ALL);
ini_set('display_errors',1);

$controller=new Controle\MarqueController();

$action = isset($_GET['action']) ? $_GET['action'] : 'formulaire';

switch ($action) {
    case 'ajout':
        $controller->AddMarque();
        break;
    case 'confirmation':
        include("index.php");
        break;
    default:
        //  echo "les données ne sont pas ajouter";
        break;
}
$lignes=$controller->listerMarque();
require_once "../Views/marque/liste.html.php";