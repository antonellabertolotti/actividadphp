<?php
$numero1 = 25;
$numero2 = 10;

if ($numero1 > $numero2) {
    echo "El número " . $numero1 . " es mayor que " . $numero2;
} elseif ($numero2 > $numero1) {
    echo "El número " . $numero2 . " es mayor que " . $numero1;
} else {
    echo "Ambos números son iguales (" . $numero1 . ")";
}
?>

<?php
$numero1 = 10;
$numero2 = 20;

$suma = $numero1 + $numero2;

echo "El resultado de la suma es: " . $suma;