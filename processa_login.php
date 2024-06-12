<?php
session_start();

// Verifica se os campos foram submetidos
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["numero_atirador"]) && isset($_POST["senha"])) {
    // Conecta ao banco de dados
    $servername = "localhost"; // ou o endereço do seu servidor
    $username = "root"; // seu nome de usuário do MySQL
    $password = ""; // sua senha do MySQL
    $dbname = "tg04013"; // nome do seu banco de dados

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Checa a conexão
    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    }

    // Obtém os dados do formulário
    $numero_atirador = $_POST["numero_atirador"];
    $senha = $_POST["senha"];

    // Verifica se é o usuário "adm" e a senha "loginadm"
    if ($numero_atirador === 'adm' && $senha === 'loginadm') {
        // Redireciona para a página do administrador
        header("location: adm.php");
        exit();
    }

    // Escapa os caracteres especiais para evitar injeção de SQL
    $numero_atirador = mysqli_real_escape_string($conn, $numero_atirador);
    $senha = mysqli_real_escape_string($conn, $senha);

    // Consulta o banco de dados para verificar se o número do atirador e a senha estão corretos
    $sql = "SELECT * FROM atiradores WHERE numero_atirador='$numero_atirador' AND senha='$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login bem-sucedido
        $_SESSION["loggedin"] = true;
        $_SESSION["numero_atirador"] = $numero_atirador;
        header("location: inicio.php"); // Redireciona para a página do painel de controle
    } else {
        // Login falhou
        echo "Número do Atirador ou senha incorretos.";
    }

    $conn->close();
} else {
    // Se não foram definidos, redirecionar de volta para a página de login
    header("location: login.html");
}
?>
