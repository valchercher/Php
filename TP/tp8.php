
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
        <input type="number" name="number" id="nombre">
        <button type="submit">Valider</button>
        <br>
        
    </form>
    <?php
    if(isset($_POST['number'])) {
        $nombre =(int)$_POST['number'];
        for ($i=1; $i < $nombre; $i++) { 
          echo $i."<br>";
        }
    }
        ?>
    
</body>

</html>
