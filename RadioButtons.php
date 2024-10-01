<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operación con PHP</title>
</head>
<body>

    <h2>Calculadora Suma/Resta</h2>
    
    <form method="POST" action="">
        <label for="num1">Número 1:</label>
        <input type="number" id="num1" name="num1" required><br><br>
        
        <label for="num2">Número 2:</label>
        <input type="number" id="num2" name="num2" required><br><br>

        <label for="operacion">Selecciona la operación:</label><br>
        <input type="radio" id="suma" name="operacion" value="suma" required>
        <label for="suma">Suma</label><br>

        <input type="radio" id="resta" name="operacion" value="resta" required>
        <label for="resta">Resta</label><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los números del formulario
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operacion = $_POST['operacion'];

        // Realizar la operación según la selección
        if ($operacion == 'suma') {
            $resultado = $num1 + $num2;
            echo "<p>El resultado de la suma es: $resultado</p>";
        } elseif ($operacion == 'resta') {
            $resultado = $num1 - $num2;
            echo "<p>El resultado de la resta es: $resultado</p>";
        }
    }
    ?>

</body>
</html>
