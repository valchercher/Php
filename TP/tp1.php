<?php include 'inc/index.php';
?>
<?php
class T1{
   public function generer_cote(){
        return rand(5,20);
    }
   public function perimetre_carre($cote){
       return $cote*4;
    }
    public function surface($cote){
        return $cote* $cote;
    }
    public function diagonale($cote){
        return sqrt($cote**2+$cote**2);
    }

}
echo 'perimetre =',T1::perimetre_carre(generer_cote()).'<br>';
echo 'surface =',T1::surface(generer_cote());
echo 'diagonale =',T1::diagonale(generer_cote());

?>
