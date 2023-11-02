<?php
class ArticleModel {
    private $db;

    public function __construct() {
        $dsn = 'mysql:host=localhost;dbname=simplemvc';
        $username = 'root';
        $password = 'cyberoot010110.';

        try {
            $this->db = new PDO($dsn, $username, $password);
        } catch (PDOException $e) {
            echo 'Erreur de connexion : ' . $e->getMessage();
        }
    }

    public function getAllArticles() {
        $query = "SELECT * FROM articles";
        $stmt = $this->db->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
