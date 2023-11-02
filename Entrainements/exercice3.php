<?php
$test= rand(1,20);
echo $test;
if($test<=5){
    echo " Il est compirs entre 1 et 5";
}
elseif( $test<=10){
    echo " Il est compirs entre 6 et 10";
}
elseif($test<=15){
    echo " Il est compirs entre 11 et 15";
}else{
    echo " Il est compirs entre 16 et 20";
}
?>
