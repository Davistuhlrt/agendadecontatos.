<?php 
    require_once "conexao.php";
    
    $db_servidor = "localhost";
    $db_nome = "agendadecontatos";
    $db_usuario = "root";
    $db_senha = "";

    try {
    
        $conn = new PDO("mysql:host=$db_servidor;dbname=$db_nome", $db_usuario, $db_senha);
 
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        echo "Erro ao conectar Banco de Dados".$e->getMessage();
    }
?>