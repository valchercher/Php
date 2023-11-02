<?php ob_start();
$titre="Exo 5";
$chiffre=rand(1,12);
echo "<b>Voici la table de multiplication de ".$chiffre." :</b><br>";
for ($i=1; $i <=10; $i++) { 
    $tabmultiple=$chiffre*$i;
    echo $chiffre ." * ".$i ." = ".$tabmultiple ."<br>";
}