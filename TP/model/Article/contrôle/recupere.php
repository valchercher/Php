<?php

require_once("vue/formulaire.php");
require_once("model/traitement.php");
if($_SERVER['REQUEST_METHOD']=='POST'){
$libelle= $_POST['libelle'];
$qteStock=$_POST['qteStock'];
$prix=$_POST['prix'];
$montant=$_POST['montant'];
$obser=$_POST['observation'];
$Confection= new $ArticleConfection();
}