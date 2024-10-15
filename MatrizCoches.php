<!DOCTYPE html>
<html>
<body>

<?php
// Matriz de coches usando arrays asociativos
$coches = array(
    array("marca" => "BMW", "modelo" => "X5", "precio" => 45000),
    array("marca" => "Audi", "modelo" => "A6", "precio" => 32000),
    array("marca" => "Toyota", "modelo" => "Corolla", "precio" => 25000),
    array("marca" => "Mercedes", "modelo" => "C-Class", "precio" => 38000),
    array("marca" => "Ford", "modelo" => "Focus", "precio" => 18000)
);

// Recorrer la matriz y visualizar marca y modelo de coches con precio superior a 30000 euros
echo "Coches con precio superior a 30,000 euros:<br><br>";
foreach ($coches as $coche) {
    if ($coche["precio"] > 30000) {
        echo "Marca: " . $coche["marca"] . " - Modelo: " . $coche["modelo"] . "<br>";
    }
}
?>

</body>
</html>
