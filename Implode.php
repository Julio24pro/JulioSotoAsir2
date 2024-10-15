<!DOCTYPE html>
<html>
<body>

<?php
// Almacenar en un array las palabras hola mundo informatico usando la funcion implode, obtener un string a partir del array anterior que visualize el contenido del array separado por una coma ","

// Crear un array con las palabras
$palabras = array("hola", "mundo", "informatico");

// Usar implode para unir el contenido del array en un string, separado por comas
$string = implode(", ", $palabras);

// Mostrar el string resultante
echo $string;
?>

</body>
</html>
