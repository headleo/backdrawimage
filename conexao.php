<?php

$host = "us-cdbr-east-05.cleardb.net";
$user = "b108994ad4810b";
$pass = "67a33208";
$dbname = "heroku_5ca7601b54f5f68";
$port = 3306;

try{
    //Conexao com a porta
    //$conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $pass);
    
    //Conexao sem a porta
    $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);

    //echo "Conexão com banco de dados realizado com sucesso.";
}catch(PDOException $erro){
    echo "Erro: Conexão com banco de dados não realizado com sucesso. Erro gerando " . $erro->getMessage();
}
