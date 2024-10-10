<!DOCTYPE html>
<html>
<head>
    <title>Mayor y Menor de un Array</title>
</head>
<body>

<?php
// Array de valores
$valores = array(3, 56, 23, 89, 12, 7, 45);

// Obtener el valor mayor y menor del array
$max = max($valores);
$min = min($valores);

// Crear un nuevo array con el mayor como primer valor y el menor como segundo
$nuevo_array = array($max, $min);

// Mostrar los resultados
echo "<h3>Array Original:</h3>";
echo "<pre>" . implode(", ", $valores) . "</pre>";

echo "<h3>Mayor valor: $max</h3>";
echo "<h3>Menor valor: $min</h3>";

echo "<h3>Nuevo Array (Mayor primero, Menor segundo):</h3>";
echo "<pre>" . implode(", ", $nuevo_array) . "</pre>";
?>

</body>
</html>
