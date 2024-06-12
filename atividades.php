<?php include "template/header.php"; ?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividades Semanais</title>
    <!-- Inclua os estilos necessários do FullCalendar -->
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.css" rel="stylesheet">
    <style>
        body {
            
         
        }
        #calendar {
            max-width: 800px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <!-- Conteúdo da página -->
    <h1  style="text-align: center;">Atividades Semanais </h1>
    <div id="calendar"></div>

    <!-- Inclua os scripts necessários do FullCalendar e Moment.js -->
    <script src="https://cdn.jsdelivr.net/npm/moment@2.29.1/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'timeGridWeek', // Exibe o calendário em visualização semanal
                locale: 'pt-br', // Configura o idioma para português (Brasil)
                slotMinTime: '05:00:00', // Define o horário mínimo (5h da manhã)
                slotMaxTime: '10:00:00', // Define o horário máximo (10h da manhã)
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'timeGridWeek,timeGridDay'
                },
                buttonText: {
                    today: 'Hoje', // Texto para o botão "Today" (Hoje)
                    week: 'Semana', // Texto para o botão "Week" (Semana)
                    day: 'Dia' // Texto para o botão "Day" (Dia)
                },
                events: [
                    // Definição das atividades e uniformes por dia da semana
                    {
                        title: 'Ordem Unida',
                        start: '2024-04-29T09:00:00',
                        end: '2024-04-29T10:00:00',
                        extendedProps: {
                            uniforme: 'Camuflado'
                        }
                    },
                    {
                        title: 'TFM',
                        start: '2024-04-30T08:00:00',
                        end: '2024-04-30T09:00:00',
                        extendedProps: {
                            uniforme: 'TFM'
                        }
                    },
                    // Adicione eventos para os outros dias da semana conforme necessário
                ],
                eventDidMount: function(info) {
                    // Mostra os detalhes do evento (atividade e uniforme) ao clicar em um evento
                    info.el.addEventListener('click', function() {
                        alert('Atividade: ' + info.event.title + '\nUniforme: ' + info.event.extendedProps.uniforme);
                    });
                }
            });

            calendar.render();
        });
    </script>
</body>
</html>
<?php include "template/footer.php"; ?>