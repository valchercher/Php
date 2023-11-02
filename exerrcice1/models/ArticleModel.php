<?php
class ArticleModel {
    private $db;

    public function __construct() {
        $dsn = 'mysql:host=localhost;dbname=article';
        $username = 'root';
        $password = 'Sarr.pc1';

        try {
            $this->db = new PDO($dsn, $username, $password);
            $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'Erreur de connexion : ' . $e->getMessage();
        }
    }

    public function getAllArticles() {
        $query = "SELECT * FROM articleCat";
        $stmt = $this->db->query($query);
        return $stmt->fetchAll();
    }
    public function ajoutArticle(array $data){
        $query =$this->db->prepare("INSERT INTO articleCat(libelle,prix) VALUES(:libelle, :prix)");
        $query->bindParam(':libelle', $data['libelle']);
        $query->bindParam(':prix', $data['prix']);
        // $count = $this->db->exec($query);
        $query->execute();

    }
    // public function ajoutArticle(){
    //     $query = "INSERT INTO articleCat (libelle, prix) VALUES ('costume_Africain','2000')";
    //     $stmt= $this->db->prepare($query);
    //     $stmt->execute();
    // }
}
?>
