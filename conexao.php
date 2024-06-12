<?php
// Arquivo: conexao.php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "atividades_semanais";

// Cria conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<?php include "template/footer.php"; ?>