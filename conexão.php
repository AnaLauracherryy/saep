<?php

$host = 'localhost'; 
$dbname = 'meu_app_de_tarefas'; 
$username = 'root';  
$password = '';  // Senha do banco (em branco para XAMPP por padrão)

try {
    // Estabelecendo a conexão com o banco de dados usando PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  // Ativando modo de erro para exceções
    // echo "Conexão bem-sucedida!";  // Apenas para testar a conexão
} catch (PDOException $e) {
    // Se a conexão falhar, exibe uma mensagem de erro
    die("Erro na conexão com o banco de dados: " . $e->getMessage());
}
?>
