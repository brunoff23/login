<?php
    define('HOST','localhost');
    define('USER','root');
    define('DB','login');
    define('PASS','');

    
    try {
        $pdo = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        

    } catch (Exception $e){
        echo 'Não foi possível conectar no banco de dados.';
    }
    


?>