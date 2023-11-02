<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $bdd=new PDO('mysql:host=localhost;dbname=Gestions_des_notes','root',"Sarr.pc1");
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Parfait";
    ?>
    <form action="insertion.php" method="post">
        <fieldset>
            <legend><b>vos coordonnées</b></legend>
            <table>
                <tr><td>Nom:</td><td><input type="text"></td></tr>
            </table>
        </fieldset>
    </form>
</body>
</html>