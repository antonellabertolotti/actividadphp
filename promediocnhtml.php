<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actividad Notas</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        input[type=number] { padding: 8px; width: 200px; border: 1px solid #ccc; }
        button { padding: 10px 20px; background: #0d6efd; color: white; border: none; border-radius: 8px; cursor: pointer; margin-top: 5px; }
        table { margin-top: 15px; width: 100%; text-align: left; border-collapse: collapse; }
        th, td { padding: 10px; }
    </style>
</head>
<body>


    <h2 style="text-align:center; border:2px solid black; padding:20px;">ACTIVIDAD</h2>
    <p>• HTML + PHP</p>
    <p style="text-align:center;">Reescribir el punto3 pero que ahora se muestre de la siguiente manera</p>


    <form method="POST" action="">
        <input type="number" step="0.1" name="nota1" placeholder="Nota 1" value="10" required>
        <input type="number" step="0.1" name="nota2" placeholder="Nota 2" value="9" required>
        <input type="number" step="0.1" name="nota3" placeholder="Nota 3" value="8" required>
        <br>
        <button type="submit">Enviar Consulta</button>
    </form>


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];


        $promedio = ($nota1 + $nota2 + $nota3) / 3;
        $promedioRedondeado = round($promedio, 2);


        // Muestra como en la imagen
        echo "<table>";
        echo "<tr><th>Nota 1</th><th>Nota 2</th><th>Nota 3</th><th>Promedio</th></tr>";
        echo "<tr>";
        echo "<td>" . $nota1 . "</td>";
        echo "<td>" . $nota2 . "</td>";
        echo "<td>" . $nota3 . "</td>";
        echo "<td>" . $promedioRedondeado . "</td>";
        echo "</tr>";
        echo "</table>";


        // Extra de tu código anterior
        if ($promedioRedondeado >= 6) {
            echo "<p><strong>Estado: APROBADO</strong></p>";
        } else {
            echo "<p><strong>Estado: REPROBADO</strong></p>";
        }
    }
    ?>


</body>
</html>
