<?php

class ProduitController extends FatherController{
    public function  __construct(){
        
    }
   
    public function liste(){
        $tab=["fruits"=>['Banana','Pomme','coco','orange'],"legumes"=>['carotte']];
        $this->render(__FUNCTION__,$tab);
    }
    public function add(){

    }
}