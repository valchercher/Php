<?php

class ArticleModel
{
    private $host;
    private $userName;
    private $dbName;
    private $password;
    private $conn;

    public function __construct()
    {
        $this->host="localhost";
        $this->userName="root";
        $this->dbName ="article";
        $this->password="Sarr.pc1";
        try {
            $this->conn =new PDO("mysql:host=$this->host;dbname=$this->dbName",$this->userName,$this->password);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
           echo "pas de connexion".$e->getMessage(); 
        }
    }
    public function getAllArticle()
    {
        $query = "SELECT * FROM articleCat";
        $stmt = $this->conn->query($query);
        return $stmt->fetchAll();
    }
    public function insert(array $data)
    {
        $query ="INSERT INTO articleCat(libelle,prix) VALUES(:libelle,:prix)";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute($data);
    }
}

