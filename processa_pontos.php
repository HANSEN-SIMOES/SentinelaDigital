<?php
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

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $numero_atirador = intval($_POST["numero_atirador"]);
    $pontos_perdidos = intval($_POST["pontos_perdidos"]);

    // Prepara e executa a consulta para subtrair os pontos
    $sql = "UPDATE atiradores SET pontos = pontos - ? WHERE numero_atirador = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $pontos_perdidos, $numero_atirador);

    if ($stmt->execute()) {
        $mensagem = "Pontuação atualizada com sucesso!";
    } else {
        $mensagem = "Erro ao atualizar a pontuação: " . $stmt->error;
    }

    // Fecha a declaração
    $stmt->close();
}

// Fecha a conexão
$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Pontos Perdidos - TG-04013</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }
        .content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }
        .register-container {
            width: 300px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .btn-register {
            width: 100%;
            background-color: #063206;
            color: #ffffff;
        }
        .btn-register:hover {
            background-color: #045404;
        }
    </style>
</head>
<body>
    <?php include "template/admheader.php"; ?>
    <div class="content">
        <div class="register-container">
            <h2 class="text-center">Registro de Pontos Perdidos</h2>
            <?php if (isset($mensagem)): ?>
                <div class="alert alert-info" role="alert">
                    <?php echo $mensagem; ?>
                </div>
            <?php endif; ?>
            <form action="processa_pontos.php" method="POST">
                <div class="form-group">
                    <label for="numero_atirador">Número do Atirador:</label>
                    <input type="number" class="form-control" id="numero_atirador" name="numero_atirador" min="1" max="150" required>
                </div>
                <div class="form-group">
                    <label for="pontos_perdidos">Pontos Perdidos:</label>
                    <input type="number" class="form-control" id="pontos_perdidos" name="pontos_perdidos" required>
                </div>
                <button type="submit" class="btn btn-register">Registrar</button>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php include "template/footer.php"; ?>