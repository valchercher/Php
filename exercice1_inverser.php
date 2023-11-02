<?php ob_start();
$title="Exo1 :variables"
?>

<?php
$a=3;
$b=5;
$c=7;
echo"A :".$a;
echo"B :".$b;
echo"C :".$c; 
?>
<?php
$content=ob_get_clean();
?>