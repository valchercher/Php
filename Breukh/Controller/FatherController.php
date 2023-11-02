<?php
class FatherController{
    public function render($Produit,$donnees=[]){
       extract($donnees);
        require_once "../Vue/$Produit.html.php";
        
    }
}