<?php
class Conexion{
    static public function conectar(){
        $host = 'localhost';
        $dbname = '';
        $user = 'root';
        $conectar = new PDO("mysql:host=localhost:3307;dbname=4aWEB", "root", "");
        $conectar -> exec("set names utf8");
        return $conectar;
    }
}