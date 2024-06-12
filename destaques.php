<?php include "template/header.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destaques do Mês - TG-04013</title>
    <style>
        body {
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .destaque {
            width: calc(33% - 20px); /* Calcula a largura para cada destaque (1/3 da largura da container - margens) */
            margin-bottom: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.2s ease-in-out;
        }
        .destaque:hover {
            transform: translateY(-5px); /* Efeito de levantamento suave ao passar o mouse */
        }
        .destaque img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .destaque-text {
            padding: 20px;
        }
        .destaque-text h2 {
            margin-top: 0;
            margin-bottom: 10px;
        }
        .destaque-text p {
            margin-bottom: 0;
        }
    </style>
</head>
<body>
    <br>
    <H1 style="text-align: center;">Destaques</H1>
    <br>
    

    <div class="container">
        <div class="destaque">
            <img src="img/norton.jpeg" alt="Destaque 1">
            <div class="destaque-text">
                <h2>Atirador Norton</h2>
                <p>Este é o destaque do mês de abril de 2024. O Primeiro Destaque demonstrou excelência em suas atividades e liderança exemplar.</p>
            </div>
        </div>
        <div class="destaque">
            <img src="img/045.jpeg" alt="Destaque 2">
            <div class="destaque-text">
                <h2>Atirador Gutho</h2>
                <p>Atirador 045 Gutho, maior capinador de lote do Brasil. Antes de eu entrar para o exército 🪖 o nome do curso catinga era matagal. Infante falante de 3 idiomas inglês português e muita merdaaaaaaaa Braaasil.</p>
            </div>
        </div>
        <div class="destaque">
            <img src="img/nathan.jpeg" alt="Destaque 3">
            <div class="destaque-text">
                <h2>Atirador Nathan</h2>
                <p>O Terceiro Destaque foi reconhecido por sua habilidade técnica e habilidades interpessoais excepcionais. Parabéns pela conquista!</p>
            </div>
        </div>
    </div>
</body>
</html>
<?php include "template/footer.php"; ?>