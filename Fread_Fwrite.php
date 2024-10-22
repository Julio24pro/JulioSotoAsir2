<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar y Leer Array</title>
</head>
<body>
    <h1>Resultado de Guardar y Leer un Array</h1>

    <?php
    
    $array = [
        "nombre" => "Juan",
        "edad" => 25,
        "ciudad" => "Cadiz"
    ];

    // Convertimos el array a formato JSON
    $json_data = json_encode($array);

    // Nombre del archivo donde guardaremos los datos
    $file_name = "array_data.txt";

    // Guardar el array en el archivo usando fwrite
    $file = fopen($file_name, "w"); // Abrimos el archivo en modo escritura

    if ($file) {
        fwrite($file, $json_data); // Escribimos los datos JSON en el archivo
        fclose($file); // Cerramos el archivo
        echo "<p>Array guardado correctamente en el archivo.</p>";
    } else {
        echo "<p>No se pudo abrir el archivo para escribir.</p>";
    }

    // Leer el array desde el archivo usando fread
    $file = fopen($file_name, "r"); // Abrimos el archivo en modo lectura

    if ($file) {
        $json_data = fread($file, filesize($file_name)); // Leemos el contenido del archivo
        fclose($file); // Cerramos el archivo

        // Convertimos los datos JSON a un array PHP
        $array_leido = json_decode($json_data, true);

        // Mostramos el array que leímos
        echo "<h2>Array leído desde el archivo:</h2>";
        echo "<pre>";
        print_r($array_leido);
        echo "</pre>";
    } else {
        echo "<p>No se pudo abrir el archivo para leer.</p>";
    }
    ?>

</body>
</html>

