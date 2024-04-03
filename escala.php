<?php include "template/header.php"; ?>

<div class="container mt-5">
    <h1>Escala de Serviço</h1>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Dia da Semana</th>
                    <th>8h - 13h</th>
                    <th>13h - 18h</th>
                    <th>18h - 8h do dia seguinte</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // Array com sobrenomes aleatórios para os guardas
                    $sobrenomes = ['Silva', 'Oliveira', 'Santos', 'Souza', 'Pereira', 'Almeida', 'Ferreira', 'Costa'];

                    // Exemplo de geração de uma escala para 30 dias
                    for ($dia = 1; $dia <= 30; $dia++) {
                        // Determinar o dia da semana
                        $diaSemana = date('N', strtotime("2022-01-$dia"));
                        $nomeDia = '';

                        // Atribuir o nome do dia da semana
                        switch ($diaSemana) {
                            case 1:
                                $nomeDia = 'Segunda-feira';
                                break;
                            case 2:
                                $nomeDia = 'Terça-feira';
                                break;
                            case 3:
                                $nomeDia = 'Quarta-feira';
                                break;
                            case 4:
                                $nomeDia = 'Quinta-feira';
                                break;
                            case 5:
                                $nomeDia = 'Sexta-feira';
                                break;
                            case 6:
                                $nomeDia = 'Sábado';
                                break;
                            case 7:
                                $nomeDia = 'Domingo';
                                break;
                        }

                        echo "<tr>";
                        echo "<td>$dia</td>";
                        echo "<td>$nomeDia</td>";

                        // Atiradores das 8h às 13h
                        if ($diaSemana != 6 && $diaSemana != 7) {
                            echo "<td>Atirador 1, Atirador 2</td>";
                        } else {
                            // Guarda de 24h no fim de semana
                            echo "<td>Guarda 24h (Comandante)</td>";
                        }

                        // Atiradores das 13h às 18h
                        if ($diaSemana != 6 && $diaSemana != 7) {
                            echo "<td>Atirador 3, Atirador 4</td>";
                        } else {
                            echo "<td></td>"; // Vazio nos fins de semana
                        }

                        // Atiradores das 18h às 8h do dia seguinte
                        if ($diaSemana != 6 && $diaSemana != 7) {
                            echo "<td>Atirador 5, Atirador 6, Atirador 7, Atirador 8, Atirador 9 (Guarda)</td>";
                        } else {
                            // Guardas de 24h no fim de semana
                            for ($i = 1; $i <= 5; $i++) {
                                $sobrenome = $sobrenomes[array_rand($sobrenomes)];
                                echo "<td>Guarda $i $sobrenome</td>";
                            }
                            echo "<td>Guarda (Comandante)</td>";
                        }

                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php include "template/footer.php"; ?>






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
    </style>