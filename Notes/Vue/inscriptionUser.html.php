<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   
    <title>Document</title>
</head>
<body>
<div class="container " style="height:355px;width:520px;background:rgb(34, 125, 171,.7)">
<div class="container shadow-lg p-3 mb-2  bg-rgb(32, 123, 169) rounded mx-auto p-4 bg-light" style="width:500px;background: rgb(32, 123, 169);border-radius:10px;margin-top:150px" >
<h2>Inscription</h2>
    <form method="post" action="index.php?action=enregistrer">
        <label for="nameuser">Nom d'utilisateur :</label>
        <input type="text" name="nameuser" id="nameuser" required><br>

        <label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password" required><br>

        <input type="submit" value="S'inscrire">
    </form>
</div>
</div>
</body>
</html>