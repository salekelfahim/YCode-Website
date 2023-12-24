<?php
class Database{
    static public function connexion(){
        $conn = new PDO ("mysql:host=localhost;dbname=ycode","root","");
        $conn->exec("set names utf8");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        return $conn;
    }
}

