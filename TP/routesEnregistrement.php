<?php
require_once "/home/sarrpc/PHP/Notes/Controllers/ControllerEnregistrement.php";
 $controlleEnreg= new ControllerEnregistrment();

$action = isset($_GET['action']) ? $_GET['action'] : 'formulaire';

switch ($action) {
    case 'enregistrer':
        include '/home/sarrpc/PHP/Notes/Views/enregistrer.php';
        break;

    case 'traitement':
        $controlleEnreg->traitement();
        break;

    case 'confirmation':
        echo "les données sont bien insérer dans la base des donneés";
        break;

    default:
        // Gérer une action non prise en charge
        break;
}

?>