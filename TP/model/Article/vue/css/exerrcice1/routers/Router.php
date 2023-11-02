<?php
require_once '../controllers/ArticleController.php';

$controller = new ArticleController();

$action = isset($_GET['action']) ? $_GET['action'] : 'index';

switch ($action) {
    case 'index':
        $controller->index();
        break;
    default:
        break;
}
?>
