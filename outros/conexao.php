<?php
$host = "Localhost";
$username = "root";
$password = "";
$dbname = "infoprodutos";

// Conexão
$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
echo "Conectado com sucesso!";
?>
