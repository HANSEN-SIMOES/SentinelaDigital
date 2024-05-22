<?php include "template/header.php"; ?>

<div class="container mt-5">
    <h1>Escala de Serviço</h1>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th colspan="8">MINISTÉRIO DA DEFESA</th>
                </tr>
                <tr>
                    <th colspan="8">EXÉRCITO BRASILEIRO</th>
                </tr>
                <tr>
                    <th colspan="8">TIRO DE GUERRA 04-013 PATOS DE MINAS</th>
                </tr>
                <tr>
                    <th colspan="8">Escala de Serviço nº 001/2024</th>
                </tr>
                <tr>
                    <th colspan="8"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $servicos = [
                    ["04/04/2024 (Sexta-feira)", [
                        ["Instrutor de Dia", "S Ten CARREIRA"],
                        ["Auxiliar Instrutor de Dia", "Mon 041 SALVADOR"],
                        ["Comandante da Guarda - 12 h (18:00 às 06:00 h)", "134 BORGES"],
                        ["Guarda - 12 h (18:00 às 06:00 h)", "103 MAGALHÃES", "026 ESTEVÃO", "037 ALVES", "091 SANTOS", "123 RAFAEL"],
                        ["Permanência manhã - 5 h (8:00 às 13:00 h)", "138 RAMOS", "139 RAMOS"],
                        ["Permanência tarde - 5 h (13:00 às 18:00 h)", "140 RAMOS", "085 LUCIANO"]
                    ]],
                    // Repita este padrão para cada dia
                ];

                foreach ($servicos as $servico) {
                    echo "<tr><th colspan='8'>{$servico[0]}</th></tr>";
                    foreach ($servico[1] as $item) {
                        echo "<tr>";
                        echo "<td>{$item[0]}</td>";
                        echo "<td colspan='7'>{$item[1]}</td>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
