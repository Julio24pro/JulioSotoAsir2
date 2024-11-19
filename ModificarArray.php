<!DOCTYPE html>
<html lang="es">
<head>
    <h1>Modificar Array en PHP</h1>
</head>
<body>
    <?php
    
    // Declarar un array con números enteros
    $numeros = [-5, 3, -12, 7, -9, 0, 15];

    // Función para convertir números negativos a positivos
    function convertirNegativosAPositivos($array) {
        return array_map('abs', $array); 
    }

    // Modificar el array
    $numerosModificados = convertirNegativosAPositivos($numeros);

    echo "<pre>";
    print_r($numerosModificados);
    echo "</pre>";
    
    ?>
</body>
</html>

