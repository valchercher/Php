<?php
require_once '../models/ArticleModel.php';

class ArticleController {
    private $model;

    public function __construct() {
        $this->model = new ArticleModel();
    }

    public function index() {
        $articles = $this->model->getAllArticles();

    // donnes en json
        header('Content-Type: application/json; charset=utf-8');
         echo json_encode($articles);
    }

}
?>
