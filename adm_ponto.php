<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Pontos Perdidos - TG-04013</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column; /* Certifica-se de que o conteúdo é empilhado verticalmente */
            align-items: center; /* Centraliza horizontalmente */
            height: 100vh;
        }
        .header {
            width: 100%;
            background-color: #063206;
            color: white;
            padding: 10px 0;
            text-align: center;
            box-sizing: border-box; /* Certifica-se de que o padding seja incluído na largura total */
        }
        nav a {
            color: white;
            margin-right: 10px;
            text-decoration: none;
        }
        .content {
            flex: 1; /* Permite que o conteúdo principal ocupe o espaço restante */
            display: flex;
            justify-content: center; /* Centraliza horizontalmente */
            align-items: center;    /* Centraliza verticalmente */
            width: 100%;
        }
        .register-container {
            width: 300px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .register-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .btn-register {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #063206;
            color: #ffffff;
            font-size: 16px;
            font-weight: bold;
            border-radius: 4px;
            cursor: pointer;
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
            <h2>Registro de Pontos Perdidos</h2>
            <form action="processa_pontos.php" method="POST">
                <div class="form-group">
                    <label for="numero_atirador">Número do Atirador:</label>
                    <input type="number" id="numero_atirador" name="numero_atirador" min="1" max="150" required>
                </div>
                <div class="form-group">
                    <label for="pontos_perdidos">Pontos Perdidos:</label>
                    <input type="number" id="pontos_perdidos" name="pontos_perdidos" required>
                </div>
                <button type="submit" class="btn-register">Registrar</button>
            </form>
        </div>
    </div>
</body>
</html>
