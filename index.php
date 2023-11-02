<?php
session_start();

// Vérifiez si l'utilisateur est connecté
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Page d'accueil</title>
</head>
<body>
    <h1>Bienvenue sur la page d'accueil !</h1>

    <p>Vous êtes connecté en tant qu'utilisateur.</p>

    <a href="logout.php">Se déconnecter</a>
</body>
</html>
