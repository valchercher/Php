<?php
$nombre = rand(5,15);
$result=0;
for ($i=$nombre; $i >=1; $i--) { 
    $result+=$i;
    echo "Etape : ".($nombre-$i+1)."- resultat = $result </br>";
}