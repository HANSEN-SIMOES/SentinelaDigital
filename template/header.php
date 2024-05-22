<!DOCTYPE html>
<html lang="pt-br">
<head>
    <script type="text/javascript" src="/js/script.js"></script>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TG-04013</title>
    <style>
        .navbar {
            max-height: 60px; 
        }

        .navbar-brand img {
            height: 60px; 
            margin-top: 4px;
        }

        .strong {  
            font-weight: bold;
        }

        .bg-menu {
            background-color: #063206; /* Define o fundo da barra de navegação como verde escuro */
        }

        .lgn-btn{
            background-color: #640b0b !important;
        }

        .navbar-nav .nav-link {
            padding-left: 20px; /* Adiciona um espaço à esquerda para os itens */
            padding-right: 20px; /* Adiciona um espaço à direita para os itens */
            margin-right: 35px; /* Adiciona espaçamento entre os itens */
            margin-left: 35px; /* Adiciona espaçamento entre os itens */
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-menu"> <!-- Alterada a classe para bg-menu -->
            <div class="container-fluid">
                <a class="navbar-brand" href="inicio.php">
                    <img src="img/logo.png" alt="Logo" class="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active strong" aria-current="page" href="inicio.php">TG-04013</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="escala.php">Escala de serviço</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ponto.php">Controle de Pontuação</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="atividades.php">Atividades</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="destaques.php">Destaques</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="qts.php">QTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="avisos.php">Avisos</a>
                        </li>
                    </ul>
                    <a href="login.php" class="btn btn-danger lgn-btn">Encerrar Sessão</a>
                </div>
            </div>
        </nav>
    </header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
