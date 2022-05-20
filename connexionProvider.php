<?php

class ConnexionProvider{
public static function getConnexion(){
    // echo "test";
    if(file_exists('./config.xml')){
        // echo "<br>Le fichier existe";
    try {
        $xml = simplexml_load_file('./config.xml');
        $hote = $xml->host;
        $username = $xml->username;
        $pw = $xml->password;
        $dbname = $xml->dbname;
        $db = new PDO("mysql:host=$hote;dbname=$dbname", $username, $pw);
        echo "<br>Connected";
        var_dump($db->getAttribute(PDO::ATTR_SERVER_VERSION));
    
    return $db;
    } catch (PDOException $e) {
        echo "Not Connected";
    }
}else{
    echo "<br>fichier introuvable";
}
}
}
