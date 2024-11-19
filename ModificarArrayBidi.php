<!DOCTYPE html>
<html>
<head>
    <h1>Array Bidimensional con Valores Positivos</h1>
</head>
<body>
    <?php
    // Declarar el array bidimensional con valores enteros
    $array = [
        [-5, 10, -15],
        [20, -25, 30],
        [-35, 40, -45]
    ];

    // Convertir todos los valores a positivos
    foreach ($array as $filaIndex => $fila) {
        foreach ($fila as $columnaIndex => $valor) {
            $array[$filaIndex][$columnaIndex] = abs($valor); // abs convierte a valor absoluto
        }
    }

    // Mostrar el array en forma de tabla HTML
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>Fila/Columna</th><th>Columna 1</th><th>Columna 2</th><th>Columna 3</th></tr>";
    
    foreach ($array as $filaIndex => $fila) {
        echo "<tr>";
        echo "<td>Fila " . ($filaIndex + 1) . "</td>";
        foreach ($fila as $valor) {
            echo "<td>$valor</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
    ?>
</body>
</html>
