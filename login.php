<?php
session_start();

// Vérification des informations d'identification
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Vérifiez les informations d'identification ici
    if ($username === 'admin' && $password === 'password') {
        $_SESSION['loggedin'] = true;
        header("Location:NOTES/index.php");
        exit();
    } else {
        $errorMessage = "Nom d'utilisateur ou mot de passe incorrect.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Page de connexion</title>
</head>
<body>
    <h1>Page de connexion</h1>

    <?php if (isset($errorMessage)) { ?>
        <p><?php echo $errorMessage; ?></p>
    <?php } ?>

    <form method="POST" action="login.php">
        <label for="username">Nom d'utilisateur:</label>
        <input type="text" name="username" id="username" required><br>

        <label for="password">Mot de passe:</label>
        <input type="password" name="password" id="password" required><br>

        <button type="submit">Se connecter</button>
    </form>
</body>
</html>
