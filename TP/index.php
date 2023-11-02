<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>indexPHP</title>
</head>
<body>
    <?php
    
    ?>
    <!-- <Label>MENU</Label> -->
    <p>
        <li class="<?php $page=='TP1'?>"><a href="tp1.php">TP1</a></li>
        <li><a href="tp2.php">TP2</a></li>
        <li><a href="tp3.php">TP3</a></li>
        <li><a href="tp7.php">TP4</a></li>
        <li><a href="tp8.php">TP5</a></li>
        <li><a href="tp9.php">TP6</a></li>
       <li> <a href="tp10.php">TP7</a></li>
    </p>
<?php
echo '';
 include 'inc/tp1.php'; 
?>
</body>
<style>
    a{
        font-size:25px;
    }
    p{
        gap: 20px;
    }
</style>
</html>
