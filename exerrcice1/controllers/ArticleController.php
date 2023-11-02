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
    // public function insert() {
    //     $articles = $this->model->ajoutArticle();

    // // donnes en json
 
    //      echo json_encode($articles);
    // }
    public function insert(){
        $tab=array(
            "libelle"=>"tissus",
            "prix"=>1000
        );

        $this->model->ajoutArticle($tab);
         //echo json_encode([$count]);

    }

}
?>
