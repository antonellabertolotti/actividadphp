<?php
$nota1 = 8.5;
$nota2 = 7.0;
$nota3 = 9.5;

$promedio = ($nota1 + $nota2 + $nota3) / 3;

$promedioRedondeado = round($promedio, 2);


echo "Nota 1: " . $nota1 . "\n";
echo "Nota 2: " . $nota2 . "\n";
echo "Nota 3: " . $nota3 . "\n";
echo "El promedio final es: " . $promedioRedondeado . "\n";


if ($promedioRedondeado >= 6) {
    echo "Estado: APROBADO";
} else {
    echo "Estado: REPROBADO";
}
?>