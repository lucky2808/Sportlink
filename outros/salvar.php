<?php
include 'conexao.php';
$usuario = $POST['usuario'];
$email = $POST['email'];
$senha = $POST['senha'];
$sql = "INSERT INTO infos (usuario, email, senha) VALUES ('$usuario', '$email', '$senha')";
if ($conn->query($sql) ===TRUE) {echo "Deu certo";}
else { echo "Deu errado. Erro" .$conn->error;}
$conn->close();
?>