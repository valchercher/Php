<?php
function a(){
    return rand(15,30);
}
function  b(){
    return rand(15,20);
}
function somme($a,$b){
    return $a+$b;
}
function exponentiel($a,$b){
    return exp($a+$b);
}
function difference($a,$b){
    return $a-$b;
}
function produit($a,$b){
    return $a*$b;
}
function modulo($a,$b){
    return $a%$b;
}
function division($a,$b){
    return $a/$b;
}
function carre($a,$b){
    return pow($a,2)+pow($b,2);
}
echo 'somme = ',somme(a(),b())."\n";
echo 'exponentiel = ',exponentiel(a(),b())."\n";
echo 'difference = ',difference(a(),b())."\n";
echo 'produit = ',produit(a(),b())."\n";
echo 'modulo = ',modulo(a(),b())."\n";
echo 'division = ',division(a(),b())."\n";
echo 'carre = ',carre(a(),b())."\n";
?>