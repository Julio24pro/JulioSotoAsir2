<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuentra el número mayor</title>
</head>
<body>
    <h2>Ingrese siete números:</h2>
    <form action="" method="post">
        Número 1: <input type="number" name="numero1" required><br><br>
        Número 2: <input type="number" name="numero2" required><br><br>
        Número 3: <input type="number" name="numero3" required><br><br>
        Número 4: <input type="number" name="numero4" required><br><br>
        Número 5: <input type="number" name="numero5" required><br><br>
        Número 6: <input type="number" name="numero6" required><br><br>
        Número 7: <input type="number" name="numero7" required><br><br>
        <input type="submit" name="submit" value="Encontrar el mayor">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        // Recoger los números enviados por el formulario
        $numeros = [
            $_POST['numero1'],
            $_POST['numero2'],
            $_POST['numero3'],
            $_POST['numero4'],
            $_POST['numero5'],
            $_POST['numero6'],
            $_POST['numero7']
        ];

        // Encontrar el mayor número
        $mayor = max($numeros);

        // Mostrar el mayor número
        echo "<h3>El número mayor es: $mayor</h3>";
    }
    ?>
</body>
</html>
