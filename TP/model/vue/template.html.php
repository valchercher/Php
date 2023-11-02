<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css"  href="style.css">
</head>
<body>
 <p>
    <a href="index.php?nom" >Exercice1</a>
    <a href="index.php?nom1">Exercice2</a>
    <a href="index.php?nom2">Exercice3</a>
    <br>
</p>
<?php 


if(isset($_GET['nom'])=='Exercice1'){
    require_once("model/carre.php");
    $carre=new Carre();
   // $ex1=(int)$_POST["tp1"];
     echo  $carre->__Constructeur();
    echo "La surface du carré est : ", $carre->surface()."<br>";
    echo "Le périmètre du carré est : ", $carre->perimetre()."<br>";
    echo "La diagonale du carré est : ", $carre->diagonale()."<br>";
    
}elseif( isset($_GET['nom1'])=='Exercice2'){
    require_once("model/tp2.php");
    $td2=new TP2();
    //$ex1=(int)$_POST["tp2"];
    echo   $td2->__Constructeur();
    echo 'La surface du rectangle est :',  $td2->surfaceRect()."<br>";
    echo  'Le perimetre du rectangle est : ',$td2->perimetreRect()."<br>";
    echo "La diagonale du rectagle est : ",  $td2->diagonaleRect()."<br>";
}elseif (isset($_GET['nom2'])=='Exercice3') {
    require_once("model/tp3.php");
    $td3 = new TP3();
    echo $td3->__Constructeur();
    echo "La somme est : ",$td3-> somme()."<br>";
    echo "L'exponnentiel  est : ",$td3->exponentiel()."<br>";
    echo "La difference est : ",$td3->difference()."<br>";
    echo "Le produit est : ",$td3->produit()."<br>";
    echo "Le modulo est : ",$td3->modulo()."<br>";
    echo "La division est : ",$td3->division()."<br>";
    echo "Le carrée est : ",$td3->carre()."<br>";
}
?>
    
    
</body>
<style>
    p{
    gap: 25px;
    font-size: 30px;
}
</style>
</html>