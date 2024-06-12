<?php
include "template/header.php";

// Inicia a sessão
session_start();

// Verifica se o atirador está logado
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    // Configurações de conexão com o banco de dados
    $servername = "localhost";
    $username = "root";
    $password = ""; // Altere para a sua senha do MySQL
    $dbname = "tg04013";

    // Cria a conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Obtém o número do atirador da sessão
    $numero_atirador = $_SESSION['numero_atirador'];

    // Prepara e executa a consulta
    $sql = "SELECT nome, numero_atirador, pontos FROM atiradores WHERE numero_atirador = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $numero_atirador);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verifica se o atirador foi encontrado
    if ($result->num_rows > 0) {
        $atirador = $result->fetch_assoc();
    } else {
        echo "Atirador não encontrado.";
        exit();
    }

    // Calcula os pontos perdidos
    $pontos_perdidos = 120 - $atirador['pontos'];

    // Fecha a declaração
    $stmt->close();

    // Fecha a conexão
    $conn->close();
} else {
    // Se o atirador não estiver logado, redireciona para a página de login
    header("location: login.html");
    exit();
}
?>

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            Atirador: <span class="atirador-nome"><?php echo htmlspecialchars($atirador['nome']); ?></span>
        </div>
        <div class="card-body">
            <h5 class="card-title">Número: <span class="atirador-numero"><?php echo htmlspecialchars($atirador['numero_atirador']); ?></span></h5>
            <p class="card-text">Você já perdeu <span class="atirador-pontos-perdidos"><?php echo $pontos_perdidos; ?></span> pontos de 120.</p>
        </div>
    </div>
</div>

<style>
    /* Seu estilo aqui, se necessário */
</style>
