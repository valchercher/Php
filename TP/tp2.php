<?php
function longueur(){
    return rand(10,15);
}
function  largeur(){
    return rand(5,11);
}
function surface($a,$b){
 return $a*$b ;
}
function perimetre($a,$b){
    return ($a+$b)*2;
}
function diagonale($a,$b){
    return sqrt($a**2+$b**2);
}
echo 'perimetre =',perimetre(longueur(),largeur()).'\n';
echo 'surface =',surface(longueur(),largeur())+'\n';
echo 'diagonale =',diagonale(longueur(),largeur())+'\n';
?>