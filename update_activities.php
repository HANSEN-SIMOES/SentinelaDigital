<?php
include "conexao.php"; // Inclua a conexão ao banco de dados

// Dados recebidos via POST
$id = $_POST['eventId'];
$titulo = $_POST['titulo'];
$inicio = $_POST['inicio'];
$fim = $_POST['fim'];
$uniforme = $_POST['uniforme'];

// Verifique se os dados foram recebidos corretamente
if (!empty($id) && !empty($titulo) && !empty($inicio) && !empty($fim) && !empty($uniforme)) {
    // Query para atualizar atividade
    $sql = "UPDATE atividades SET titulo = ?, inicio = ?, fim = ?, uniforme = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("Erro na preparação da consulta: " . $conn->error);
    }

    $stmt->bind_param("ssssi", $titulo, $inicio, $fim, $uniforme, $id);

    if ($stmt->execute()) {
        echo "Atividade atualizada com sucesso";
    } else {
        echo "Erro ao atualizar a atividade: " . $stmt->error;
    }
    $stmt->close();
} else {
    echo "Erro: Dados incompletos";
}

$conn->close();
?>
