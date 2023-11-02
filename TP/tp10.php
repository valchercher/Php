<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tp10</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="nombre" id="">
        <button type="submit">valider</button>
    </form>
    <?php
    if(isset($_POST['nombre'])){
        $nomb=(int)$_POST['nombre'];
        for ($i=0; $i < $nomb; $i++) { 
            echo '<input type= "text" name="champ"><br>';
        }
    }
    ?>
</body>
</html>