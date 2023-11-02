<?php class SeconnecterBDD {

   protected $connexionBDD;
    public function __construct() {
        // Établir la connexion à la base de données
        $dsn = "mysql:host=localhost;dbname=Gestions_des_notes;charset=utf8";
        $nomUtilisateur = "root";
        $motDePasse = "Sarr.pc1";
        try{
        $this->connexionBDD = new PDO($dsn, $nomUtilisateur, $motDePasse);
        $this->connexionBDD->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }catch(PDOEXCEPTION $e){
           echo "Erreur".$e->getMessage();
        }
    }
    // public function getDonnes($data){
    //             $requete="SELECT *FROM $data";
    //             $donnees=$this->connexionBDD->query($requete);
    //             return $donnees->fetchAll();
    // }

}