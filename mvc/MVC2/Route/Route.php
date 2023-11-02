<?php
require "../Controller/ArticleControler.php";

class Route
{
    public function router()
    {   
    $all= new ArticleController();

    $url = '';
    if(isset($_REQUEST['url']))
    {
    $url = $_REQUEST['url'];
    }
    else{
        $url = explode('/',$_SERVER['REQUEST_URI']);
    }

    switch ($url[1]){
        case '':
            $all->affiche();
            break;
        case 'ajout':
            $all->insertArticle();
            echo "ajout fait avec success";
                break;
        default:
            echo "page n'existe pas";
            break;
    }

    }
}
