<?php
$mois=rand(1,12);
$moisCoresp="";
switch ($mois) {
    case '1' :$moisCoresp ="Janvier";
        break;
    case '2':$moisCoresp ="Fevrier";
        break;
    case '3':$moisCoresp ="Mars";
        break;
    case '4':$moisCoresp ="Avril";
        break;
    case '5':$moisCoresp ="Mai";
        break;
    case '6':$moisCoresp ="Juin";
        break;   
    case '7':$moisCoresp ="Juillet";
        break;   
    case '8':$moisCoresp ="Août";
        break;
    case '9':$moisCoresp ="Septembre";
        break; 
    case '10':$moisCoresp ="Octobre";
        break; 
    case '11':$moisCoresp ="Novembre";
        break; 
    case '12':$moisCoresp ="Décembre";
    break; 
    
}
echo "Le mois <b>".$mois."</b> en chiffres correspond au mois de <b>$moisCoresp</b> en Lettres"; 
