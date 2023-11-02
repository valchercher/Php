<?php
require_once '/home/sarrpc/PHP/Notes/Models/ModelConnexion.php';
class ConnexionController
{
    private $utilisateurModel;

    public function __construct()
    {
        $this->utilisateurModel = new UtilisateurModel();
    }

    public function formulaire()
    {
        
        // Afficher la vue du formulaire de connexion
         include '../Vue/formulaire_authentification.php';
    }

    public function enregistrerUtilisateur()
    {
        if (isset($_POST['nameuser']) && isset($_POST['password'])) {
            $username = $_POST['nameuser'];
            $password = $_POST['password'];

            // Enregistrer l'utilisateur dans la base de données
            $result = $this->utilisateurModel->createUser($username, $password);

            if ($result) {
                echo 'Utilisateur enregistré avec succès.';
            } else {
                echo 'Une erreur s\'est produite lors de l\'enregistrement de l\'utilisateur.';
            }
        } else {
            echo 'Veuillez fournir un nom d\'utilisateur et un mot de passe.';
        }
    }

    public function authentifier()
    {
        if (isset($_POST['nameuser']) && isset($_POST['password'])) {
            $username = $_POST['nameuser'];
            $password =$_POST['password'];

            // Récupérer les informations de l'utilisateur depuis le modèle
            $user = $this->utilisateurModel->getUserByUsername($username);
            
            if($user && password_verify($password, $user['password'])) { 
                echo 'Authentification réussie.';
                header("Location:/niveau/afficherNiveau"); 
            } else {
                echo 'Nom d\'utilisateur ou mot de passe incorrect.';
                header("Location:/connexion/formulaire");
            }
        } else {
            echo 'Veuillez fournir un nom d\'utilisateur et un mot de passe.';
        }
    }
    public function afficherUser(){
        if (isset($_POST['nameuser']) && isset($_POST['password'])) {
            $username = $_POST['nameuser'];
            return $username;
        }
                  
    }
}

?>
