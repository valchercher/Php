<?php ob_start();
$titre="Exo 2 : Variables et Ternaires";
?>
<?php
$nom="Marietou";
$age=24;
$femme=true;
$nom1="Abdou";
$age1=25;
$femme=false;
echo "<p>";
    echo $nom. " à ".$age." ans";
     // echo(!$femme)? " et c'est une femme" :" et c'est un homme";
     if(!$femme){
        echo " et c'est une femme";

     }
     else{
        echo " et c'est un homme";
     }
echo "</p>";

?>
<p>
    <?=$nom1?> à <?=$age1?>ans
    <?=(!$femme)? " et c'est un homme":" et c'est une femme" ?> 
</p>