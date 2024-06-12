<?php
// Arquivo: get_activities.php
include "conexao.php"; // Arquivo com as configurações de conexão ao banco de dados

$sql = "SELECT id, titulo, inicio, fim, uniforme FROM atividades";
$result = $conn->query($sql);

$events = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $event = array(
            'id' => $row['id'],
            'title' => $row['titulo'],
            'start' => $row['inicio'],
            'end' => $row['fim'],
            'extendedProps' => array(
                'uniforme' => $row['uniforme']
            )
        );
        array_push($events, $event);
    }
}

// Retorna os eventos em formato JSON
header('Content-Type: application/json');
echo json_encode($events);

$conn->close();
?>
<?php include "template/footer.php"; ?>