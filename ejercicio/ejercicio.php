<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST['nombre'])) {
        echo "Datos recibidos (con foreach):<br>";
        foreach ($_POST as $clave => $valor) {
            echo "<p>$clave</strong>: $valor</p>";
        }
        echo "";
    }
    ?>
</body>

</html>