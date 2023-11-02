<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tp9</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="nombre" id="nombre">
        <button type="submit">Valider</button>
    </form>
    <?php
    
    if(isset($_POST['nombre'])) {
        $numb=10;
        $val =$_POST['nombre'];
    for ($i=1; $i <=$numb ; $i++) { 
        echo $val,' * ',$i,' = ', $i*$val."<br>";   
    }
}
    
    ?>
</body>
</html>