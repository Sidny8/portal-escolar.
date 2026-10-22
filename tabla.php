<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tabla</h1>

    <form method="POST" action="">

        <label>Número:</label>
        <input type="number" step="any" name="num1" id="num1" required>
        <br></br>

        <button type="submit" name="calcular">Calcular</button>

    </form>

     <?php

    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["calcular"])) {

        $num = intval($_POST['num1']);

        echo "<h2>Tabla del $num</h2>";
        echo "<table>";

        for ($i = 1; $i <= 10; $i++) {

            $resultado = $num * $i;

            echo "<tr>";
            echo "<td>$num x $i = </td>";
            echo "<td>$resultado</td>";
            echo "</tr>";
        }

        echo "</table>";
    }

    ?>

</body>
</html>