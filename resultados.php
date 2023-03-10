<?php 
$data = $_POST["data"];
$decoded = json_decode($data, true);
$max = max($decoded['a'], $decoded['b'], $decoded['c']);
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Resultados</title>
    <link rel="stylesheet" href="miestilo.css">
    <link rel="shortcut icon" href="./images/ESCOM.jpg" type="image/x-icon">
    <script>
        let data = <?php echo $data?>;
    </script>
</head>

<body>
    <!-- Header del sitio -->
    <header>
        <h1>Inventario de la Motivación Personal</h1>
        <!-- Menú de navegación del sitio -->
        <nav>
            <li><a href="index.html">Inicio</a></li>
            <li><a href="instrucciones.html">Inventario de la Motivación Personal</a></li>
        </nav>
    </header>
    <!-- Contenido principal -->
    <main>
        <section>
            <h1>Resultado</h1>
            <div style="background-color: white;">
                <canvas id="marksChart" width="500" height="400"></canvas>
            </div>
            <?php if ($max == $decoded['a']) {
                echo "
                <div>
                    
                <h1>Personas Motivadas por Poder (A) </h1>
                <hr>
                <p>
                    <ol class='two-column'>
                        <li> Trabajos que les permiten persuadir a la gente.</li>
                <li> Responsabilidades que les permiten relacionarse con los directivos más altos.</li>
                <li> Tareas que les da la oportunidad de enseñar.</li>
                <li> Reconocimientos que tienen una base muy amplia (por ejemplo: utilizando los medios de comunicación)
                    y que son visibles por personas que tienen influencia en la organización. </li>
                    <li> Nombramientos que reconocen sus logros y influencia en la organización.</li>
                    <li> Cartas a familiares enfatizando su impacto para beneficiar a la institución, los clientes, y la
                        comunidad. </li>
                        <li> Trabajos que ofrecen mayor responsabilidad y autoridad.</li>
                    <li> Una descripción de trabajo y nombre de puesto que impresionan.</li>
                    <li> Notas personalizadas del supervisor y altos directivos agradeciendo su aportación para mejorar la
                        comunidad y la condición humana.</li>
                        <li> Un programa que lleve su nombre.</li>
                        <li> Oportunidad para aportar en el establecimiento de las metas organizacionales.</li>
                        <li> Oportunidad para innovar, cuestionar y debatir las decisiones.</li>
                        <li> Permitir que sus ideas se expresen.</li>
                <li> Presentarlas a personas con influencia.</li>
                <li> Oportunidades para negociar.</li>
                <li> Oportunidades para vender los servicios de la organización.</li>
                <li> Tareas de gestión, con cuerpos legislativos y comités.</li>
                <li> Compartiendo aspiraciones organizacionales.</li>
                <li> Involucramiento en decisiones que afectan el futuro de la organización.</li>
                <li> Contactos en el área de relaciones públicas y de los medios de comunicación.</li>
                <li> Nombramientos en programas de la comunidad, del estado, o a nivel nacional.</li>
                <li> Oportunidades para entrenar fuera de la organización.</li>
                <li> Formar parte de mesas redondas y mesas de trabajo.</li>
                <li> Usar como asesor.</li>
                <li> Oportunidades para ser autor de algún artículo, libro o publicación.</li>
                <li> Nombrar al consejo directivo de alguna institución.</li>
            </ol>
        </p>
    </div>";
            }
    ?>
            <?php if ($max == $decoded['b']) {
                echo "
    <div>
        <h1>Personas Motivadas por Afiliación (B)</h1>
        <hr>
        <p>
            <ol class='two-column'>
                <li> Reconocimiento en presencia de colegas y miembros de la familia.</li>
                <li> Mención en el boletín o comunicación de la organización.</li>
                <li> Su nombre y/o fotografía en un área pública de la organización.</li>
                <li> Una nota personal enviada por el supervisor. </li>
                <li> Un supervisor que recuerde el cumpleaños o un evento especial.</li>
                <li> Oportunidades para socializar en su trabajo. </li>
                <li> Trabajos que ofrecen oportunidades para interacción personal.</li>
                <li> Oportunidades para aportar retroalimentación en temas sobre el personal de la organización.</li>
                <li> Cartas a miembros de su familia agradeciendo que compartan el voluntario con la organización.</li>
                <li> Cartas enviadas por clientes o por otras organizaciones de la comunidad.</li>
                <li> Evaluaciones que miden el éxito junto con los talentos interpersonales.</li>
                <li> Felicitarlas con sus amigos.</li>
                <li> Expresiones de afecto y apreciación por su trabajo.</li>
                <li> Compartir las necesidades de la organización a nivel personal.</li>
                <li> Entrenamientos y capacitaciones personalizados en el trabajo.</li>
                <li> Oportunidades de saludar, dar una introducción o bienvenida en eventos especiales.</li>
            </ol>
            </p>
        </div>
        ";
            }
        ?>
            <?php if ($max == $decoded['c']) {
                echo "
        <div>
            <h1>Personas Motivadas por Realizacion Personal(C)</h1>
            <hr>
            <p>
            <ol class='two-column'>
                <li> Oportunidades para participar en decisiones acerca de metas.</li>
                <li> Tener toda la responsabilidad delegada a ellos, y la habilidad de manejarla a su propio paso.</li>
                <li> Oportunidad para crear ideas innovadoras y de lograr sus metas.</li>
                <li> Exhibición en un área pública nombramientos, placas, y reconocimientos. </li>
                <li> Cartas de recomendación y reconocimiento a sus jefes o a los periódicos locales por un trabajo
                    específico.</li>
                <li> Trabajos que tienen evaluaciones constantes para marcar éxitos. </li>
                <li> Algún premio o reconocimiento por un programa específico.</li>
                <li> Carta a los miembros de su familia informando sobre algún éxito específico.</li>
                <li> Trabajos que ofrecen mayor responsabilidad.</li>
                <li> Trabajos con metas muy claras y fáciles de medir.</li>
                <li> Trabajos que ofrecen una oportunidad de superar un récord numérico (monetario, números de clientes
                    servidos, récord de tiempo, etc.).</li>
                <li> Notas personalizadas del supervisor en reconocimiento de los logros.</li>
                <li> Oportunidad de sentir que son una parte importante del total.</li>
                <li> Capacitaciones que son interactivas.</li>
                <li> Invitación para su participación en cómo la organización podría ser más eficiente.</li>
                <li> Oportunidad para visitar e inspeccionar las instalaciones de la organización.</li>
                <li> Cuidar que su tiempo no se desperdicie.</li>
                <li> Informando con anticipación el orden del día de una junta o reunión.</li>
                <li> Evaluaciones personales que miden el éxito y la realización de las metas.</li>
                <li> Compartir las necesidades institucionales como reto.</li>
                <li> Cartas por parte del consejo directivo, del personal administrativo felicitando triunfos
                    específicos.</li>
                <li> Oportunidades para cuestionar las decisiones.</li>
                <li> Involucramiento en las decisiones que les afecten.</li>
                <li> Honrar sus contribuciones a las metas.</li>
                <li> Poner algún distintivo en su gafete indicando la antigüedad que tiene en la organización.</li>
            </ol>
            </p>
        </div>
        ";
            }
        ?>
        </section>
    </main>
    <footer class="relative-footer">
        <h4 class="right">
            <ol>
                <li>Cruz Chávez Erick</li>
                <li>Mexicano Ixtepan</li>
                <li>Ruiz Vazquez Luis Armando</li>
            </ol>
            <p>
                4CM3
            </p>
        </h4>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var marksCanvas = document.getElementById("marksChart");

        var marksData = {
            labels: ["Poder(A) <?php echo $decoded['a']?>%", "Afiliacion(B) <?php echo $decoded["b"]?>%", "Superacion Personal(C) <?php echo $decoded["c"]?>%"],
            datasets: [{
                label: "Resultado Motivaciones",
                data: [data.a, data.b, data.c],
                backgroundColor: [
                    "rgba(200, 0, 0, 0.5)",
                    "rgba(0, 200, 0, 0.5)",
                    "rgba(0, 0, 200, 0.5)"
                ]
            }]
        };

        var radarChart = new Chart(marksCanvas, {
            type: 'polarArea',
            data: marksData,
            options: {
                responsive: true,
                scales: {
                    r: {
                        pointLabels: {
                            display: true,
                            centerPointLabels: true,
                                font: {
                                    size: 15
                                }
                        },
                        min: 0,
                        max: 100
                    }                    
                }
            }
        });
    </script>
</body>

</html>