<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - TG-04013</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column; /* Certifica-se de que o conteúdo é empilhado verticalmente */
            align-items: center; /* Centraliza horizontalmente */
            min-height: 100vh; /* Garante que o body tenha pelo menos a altura da tela */
        }
        .content {
            flex: 1; /* Permite que o conteúdo principal ocupe o espaço restante */
            display: flex;
            justify-content: center; /* Centraliza horizontalmente */
            align-items: center; /* Centraliza verticalmente */
            width: 100%;
        }
        .login-container {
            width: 300px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        .btn-login {
            width: 100%;
            background-color: #063206;
            color: #ffffff;
        }
        .btn-login:hover {
            background-color: #045404;
        }
    </style>
</head>
<body>
    <div class="content">
        <div class="login-container">
            <h2 class="text-center">Login - TG-04013</h2>
            <form action="processa_login.php" method="POST">
                <div class="form-group">
                    <label for="numero_atirador">Número do Atirador:</label>
                    <input type="text" class="form-control" id="numero_atirador" name="numero_atirador" required>
                </div>
                <div class="form-group">
                    <label for="senha">Senha:</label>
                    <input type="password" class="form-control" id="senha" name="senha" required>
                </div>
                <button type="submit" class="btn btn-login">Login</button>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
