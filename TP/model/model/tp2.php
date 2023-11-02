<?php
class TP2{  
    private $a;
    private $b; 

 public function __Constructeur(){
    $this->a=rand(20,150);
    $this->b=rand(5,15);
}

 public function surfaceRect():float{
 return $this->a*$this->b ;
}
public function perimetreRect():float{
    return ($this->a+$this->b)*2;
}
public function diagonaleRect():float{
    return sqrt($this->a**2+$this->b**2);
}
}