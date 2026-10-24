<?php include 'menu.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css" type="text/css">
    <title>Document</title>
</head>
<body>
    <h1>Promedio escolar</h1>

    <form method="POST" action="">

        <label>Calificación 1:</label>
        <input type="number" step="any" name="cal1" id="cal1" required>
        <br></br>

        <label>Calificación 2:</label>
        <input type="number" step="any" name="cal2" id="cal2" required>
        <br></br>

        <label>Calificación 3:</label>
        <input type="number" step="any" name="cal3" id="cal3" required>
        <br></br> 

        <button type="submit" name="calcular">Calcular promedio</button>

    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['calcular'])) {

        $cal1 = floatval($_POST['cal1']);
        $cal2 = floatval($_POST['cal2']);
        $cal3 = floatval($_POST['cal3']);

       if ($cal1 < 0 || $cal1 > 100) {
            echo "<h3>La calificación 1 no es válida.</h3>";
        } else if ($cal2 < 0 || $cal2 > 100) {
            echo "<h3>La calificación 2 no es válida.</h3>";
        } else if ($cal3 < 0 || $cal3 > 100) {
            echo "<h3>La calificación 3 no es válida.</h3>";
        } else {

        $promedio = ($cal1 + $cal2 + $cal3) / 3;

        echo "<h3> Tu promedio es: " . $promedio . "</h3>";

        if ($promedio >= 70) {
            echo "<h3>Estudiante aprobado</h3>";
        } else {
            echo "<h3>Estudiante reprobado</h3>";
            }
        }
    }

    ?>
</body>
</html>