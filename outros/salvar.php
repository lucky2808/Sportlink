<?php
include 'conexao.php';
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$sql = "INSERT INTO infos (usuario, email, senha) VALUES ('$usuario', '$email', '$senha')";
if ($conn->query($sql) ===TRUE) {echo "Deu certo";}
else { echo "deuruimpae Erro:" .$conn->error;}
$conn->close();
?>