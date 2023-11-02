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
        <label for="">Saisir date</label>
    <input type="text" id="date" name="date" required>
    <button type="submit">Valider</button>
    </form>

    <?php
// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer la date saisie par l'utilisateur
    $date = $_POST['date'];
    
    // Vérifier si la date est valide
    if (strtotime($date) === false) {
        echo "La date saisie est invalide.";
    } else {
        // Calculer la date précédente
        $date_precedente = date('Y-m-d', strtotime('-1 day', strtotime($date)));
        
        // Calculer la date suivante
        $date_suivante = date('Y-m-d', strtotime('+1 day', strtotime($date)));
        
        // Afficher les résultats
        echo "Date saisie : " . $date . "<br>";
        echo "Date précédente : " . $date_precedente . "<br>";
        echo "Date suivante : " . $date_suivante . "<br>";
    }
}
?>


</body>
</html>
