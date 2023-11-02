<?php
require "../Public/Seconnecter.php";
class UtilisateurModel extends SeconnecterBDD
{
    public function createUser($username, $password)
    {
        // Hasher le mot de passe avant de l'enregistrer dans la base de données
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO utilisateur (username, password) VALUES (:username, :password)";
        $stmt = $this->connexionBDD->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $hashedPassword);
        return $stmt->execute();
    }
    public function getUserByUsername($username)
    {
        $query = "SELECT * FROM utilisateur WHERE username = :username";
        $stmt = $this->connexionBDD->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        return $stmt->fetch();
    }
    public function getNom() {
        return $this->nameuser;
    }
}

    
    
?>
