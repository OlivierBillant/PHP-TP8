<?php

class IndexController
{

    public static function index()
    {
        echo "test";
        require_once('ConnexionProvider.php');
        $db = ConnexionProvider::getConnexion();

        $sql = "SELECT * FROM utilisateurs";
        $stmt = $db->query($sql);
        $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
        var_dump($arr);

        // $one = $stmt->fetch(PDO::FETCH_ASSOC);
        // var_dump($one);
        return $arr;
    }
}
