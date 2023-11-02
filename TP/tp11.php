<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Saisir une valeur supérieure à 10000</label>
        <input type="number" name="nombre" id="text">
        <button type="submit">Valider</button>
    </form>
    <?php
        $value =$_POST["nombre"];
    do {   
        if(isset($value)){
          echo $value;
        }
    } while ($value <= 10000);
    ?>
</body>
<style>
    form{
        display:flex;
        flex-direction:column;
        gap: 15px;
    }
    label{
        font-size: 25px;
    }
    #text{
        width:250px;
        height:30px;
    }
    button{
        width:100px;
        height:30px;
    }
</style>
</html>