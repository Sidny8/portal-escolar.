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
    <h1>Evaluador de rendimiento</h1>
      <form method = "POST" action ="">
        <br>
        <label for = "num1"> Calificacion a ver: </label>
        <br>
        <input type = "number" step = "any" name = "num1" id= "num1" class="input-alto" required>
        <br>
        <button type = "submit" name = "calcular" >Clasificar</button>
        <br><br>
    </form>
     <?php
        if($_SERVER["REQUEST_METHOD"]==="POST" && isset($_POST["calcular"])){
            $num = $_POST['num1'];
            if($num < 0 || $num > 100){
                echo "<h3>Numeros incorrectos</h3>";
            }elseif($num >= 90 && $num <= 100){
                echo"<h3>Excelente</h3>";
            }else if($num <= 89 && $num >=80){
                echo "<h3>Muy Bien</h3>";
            }else if($num <= 79 && $num >= 70){
                echo "<h3>Satisfactorio</h3>";
            }else{
                echo "<h3>No Acreditado</h3>";
            }
        }
    ?>
</body>
</html>