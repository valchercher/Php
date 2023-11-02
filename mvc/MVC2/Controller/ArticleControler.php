<?php 
require_once "../Model/ArticleModel.php";

class ArticleController
{
    private $model;
public function __construct(){
    $this->model = new ArticleModel();
}

public function affiche()
{
    $bd =$this->model->getAllArticle();
    echo json_encode($bd);
}


public function insertArticle()
{
    $jsonData =file_get_contents('php://input');
    $data = json_decode($jsonData,true);
    
    if ($data===null)
    {
        $response=array(
            'statut' => 500,
            'statut_messsage'=>"erreur"
        );
    } 
    else{
        $insertData = array(
            'libelle' => $data['Libelle'],
            'prix' => $data['Prix']
        );
        if ($this->model->insert($insertData)){
            $response=array(
                'statut' => 200,
                'statut_messsage'=>"ajout fait avec succès"
            );
        }
        else {
            $response=array(
                'statut' => 500,
                'statut_messsage'=>"erreur"
            );
        }
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($response);
    }
    
}

}
