
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="display:flex; justify-content:center;align-items:center;gap:20px;flex-direction:column">
<div style="margin-top:120px;">
<form action="index.php?action=ajout" method="POST" style=" display:flex;flex-direction:column">
    <label for="" style="font-size:25px"><b>Ajouter une marque</b></label >
    <div>
    <input type="type" value="" name="libelle" style="width:150px">
    <input type="submit" value="Ajouter">
    </div>
</form>
</div>
   <div>
   <table style="border:2px solid; gap:25px;width:500px;margin-top:50px;">
    <thead >
        <tr>
            <th style="border:2px solid;">id</th>
            <th  style="border:2px solid;">libelle</th>
        </tr>
    </thead>
    <tbody style="width:500px">
        <?php foreach ($lignes as $ligne): ?>
            <tr >
                <th style="border:2px solid;"><?= $ligne['id_marque'] ?></th>
                <th style="border:2px solid"><?= $ligne['libelle'] ?></th>
            </tr>
        <?php endforeach?>
    </tbody>
</table>
   </div>  
</body>
</html>
