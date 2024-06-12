<?php include "template/admheader.php"; ?>
<br><br><br><br><br>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividades Semanais</title>
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.css" rel="stylesheet">
    <style>
        #calendar {
            max-width: 800px;
            margin: 0 auto;
        }
        #updateForm {
            max-width: 800px;
            margin: 20px auto;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Atividades Semanais</h1>
    <div id="calendar"></div>
    
    <form id="updateForm">
        <input type="hidden" name="eventId" id="eventId">
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo" required>
        <label for="inicio">Início:</label>
        <input type="datetime-local" name="inicio" id="inicio" required>
        <label for="fim">Fim:</label>
        <input type="datetime-local" name="fim" id="fim" required>
        <label for="uniforme">Uniforme:</label>
        <input type="text" name="uniforme" id="uniforme" required>
        <button type="submit">Atualizar Atividade</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.29.1/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'timeGridWeek',
                locale: 'pt-br',
                slotMinTime: '05:00:00',
                slotMaxTime: '10:00:00',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'timeGridWeek,timeGridDay'
                },
                buttonText: {
                    today: 'Hoje',
                    week: 'Semana',
                    day: 'Dia'
                },
                events: 'get_activities.php', // URL para buscar os eventos
                eventDidMount: function(info) {
                    info.el.addEventListener('click', function() {
                        document.getElementById('eventId').value = info.event.id;
                        document.getElementById('titulo').value = info.event.title;
                        document.getElementById('inicio').value = info.event.start.toISOString().slice(0, 16);
                        document.getElementById('fim').value = info.event.end.toISOString().slice(0, 16);
                        document.getElementById('uniforme').value = info.event.extendedProps.uniforme;
                    });
                }
            });

            calendar.render();

            document.getElementById('updateForm').addEventListener('submit', function(event) {
                event.preventDefault();

                var eventId = document.getElementById('eventId').value;
                var titulo = document.getElementById('titulo').value;
                var inicio = document.getElementById('inicio').value;
                var fim = document.getElementById('fim').value;
                var uniforme = document.getElementById('uniforme').value;

                var formData = new FormData();
                formData.append('eventId', eventId);
                formData.append('titulo', titulo);
                formData.append('inicio', inicio);
                formData.append('fim', fim);
                formData.append('uniforme', uniforme);

                fetch('update_activities.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.text())
                .then(data => {
                    alert(data);
                    console.log(data);
                })
                .catch(error => {
                    console.error('Erro ao enviar requisição:', error);
                });
            });
        });
    </script>
</body>
</html>
<?php include "template/footer.php"; ?>