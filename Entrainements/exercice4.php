<?php
$chiffre1= rand(5,100);
$chiffre2=rand(5,100);
$chiffreAbs=abs($chiffre1-$chiffre2);
echo "Chiffre 1 : ",'<b>'.$chiffre1.'</b></br>';
echo "Chiffre 2 : ",'<b>'.$chiffre2.'</b></br>';

if($chiffreAbs>25 && $chiffreAbs<75){
    echo "La valeur absolue de <b>".$chiffre1. " - ". $chiffre2 ."</b> est pas compris entre 25 et 75 ";
}
 else{
    echo "La valeur absolue de <b>".$chiffre1. " - ". $chiffre2 ."</b> n'est pas compris entre 25 et 75 ";

 }