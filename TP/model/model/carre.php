<?php

const N = 4;
class Carre{
  private $cote;
  public function __Constructeur():void{
     $this->cote=rand(2,50);
  }

    public function getCarre(){
      return $this->cote;
    }
    public function setCarre($new_cote){
        $this->cote=$new_cote;
    }
 
    public function surface():float{
        return $this->cote*$this->cote;
    }
    public function perimetre(){
        return $this->cote*4;
    }
    public function diagonale():float{
        return $this->cote*sqrt(2);
    }
}
