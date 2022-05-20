<?php

class IndexController
{

    public static function index()
    {
        // echo "test";
        require_once('ConnexionProvider.php');
        $db = ConnexionProvider::getConnexion();

        $sql = "SELECT * FROM utilisateurs";
        $stmt = $db->query($sql);
        $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($arr);

        // $one = $stmt->fetch(PDO::FETCH_ASSOC);
        // var_dump($one);
        return $arr;
    }

    public static function add()
    {
        require_once('ConnexionProvider.php');
        $db = ConnexionProvider::getConnexion();


        // prepare and bind
        $stmt = $db->prepare("INSERT INTO utilisateurs (prenom, nom, email, date_naissance, username, password, date_inscription) VALUES (?, ?, ?, ?, ?, ?, ?)");
        
        // set parameters and execute
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $dateNaissance = $_POST['dateNaissance'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $dateInscription = $_POST['dateInscription'];
        
        $stmt->execute([$prenom, $nom, $email, $dateNaissance, $username, $password, $dateInscription]);

        echo "New records created successfully";
    }
}
