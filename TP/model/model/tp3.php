<?php
class TP3{
    private $a;
    private $b;
    public function __Constructeur(){
        $this->a=rand(15,30);
        $this->b=rand(15,20);
    }
    public function somme():float{
        return $this->a+$this->b;
    }
    function exponentiel():float{
        return exp($this->a+$this->b);
    }
    function difference():float{
        return $this->a-$this->b;
    }
    function produit():float{
        return $this->a*$this->b;
    }
    function modulo(){
        return $this->a%$this->b;
    }
    function division(){
        return $this->a/$this->b;
    }
    function carre(){
        return pow($this->a ,2)+pow($this->b,2);
    }
}