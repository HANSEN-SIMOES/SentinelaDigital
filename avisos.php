<?php include "template/header.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avisos - Tiro de Guerra</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .aviso {
            margin-bottom: 20px;
            padding: 15px;
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            border-radius: 5px;
        }
        .aviso p {
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Avisos - Tiro de Guerra</h1>
        <div class="aviso">
            <h3>Aviso Importante</h3>
            <p>Por favor, lembre-se de que a reunião geral será realizada na próxima sexta-feira às 15h no quartel. Todos os atiradores devem comparecer.</p>
        </div>
        <div class="aviso">
            <h3>Lembrete</h3>
            <p>Os atiradores devem chegar pontualmente ao quartel para o treinamento prático de tiro no sábado pela manhã. Atrasos não serão tolerados.</p>
        </div>
        <div class="aviso">
            <h3>Atenção</h3>
            <p>É obrigatório o uso do uniforme completo durante todas as atividades no quartel. Por favor, verifique se o seu uniforme está em boas condições.</p>
        </div>
        <div class="aviso">
            <h3>Aviso de Ausência</h3>
            <p>Se você estiver impossibilitado de comparecer a alguma atividade programada, por favor, notifique seu superior imediato com antecedência.</p>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php include "template/footer.php"; ?>