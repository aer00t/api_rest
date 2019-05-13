<?php
// Credenciales
$username = "root";
$pass = "";
// Variables de conexión
$server = "localhost";
$db = "";
$charset= "utf8";
// $port = 3306;

// Instancia una conexión a la base de datos
$pdo = new PDO("mysql:host={$server};dbname={$db};charset={$charset}",$username,$pass);

print_r($pdo);

$tables = $pdo->query("show tables");

foreach($tables as $table){
    print_r($table);
}

// Termina conexión
unset($pdo);