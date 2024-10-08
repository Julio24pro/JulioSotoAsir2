<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones con PHP</title>
</head>
<body>
    <h2>Operaciones con 5 Valores</h2>
    <form action="" method="post">
        <label>Valor 1:</label>
        <input type="number" name="valor1" required><br><br>

        <label>Valor 2:</label>
        <input type="number" name="valor2" required><br><br>

        <label>Valor 3:</label>
        <input type="number" name="valor3" required><br><br>

        <label>Valor 4:</label>
        <input type="number" name="valor4" required><br><br>

        <label>Valor 5:</label>
        <input type="number" name="valor5" required><br><br>

        <h3>Seleccione una operación:</h3>

        <input type="checkbox" name="operacion[]" value="suma"> Suma<br>
        <input type="checkbox" name="operacion[]" value="resta"> Resta<br>
        <input type="checkbox" name="operacion[]" value="multiplicacion"> Multiplicación<br>
        <input type="checkbox" name="operacion[]" value="division"> División<br><br>

        <button type="submit" name="calcular">Calcular</button>
    </form>

    <?php
    if (isset($_POST['calcular'])) {
        // Recogemos los valores del formulario
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $valor3 = $_POST['valor3'];
        $valor4 = $_POST['valor4'];
        $valor5 = $_POST['valor5'];

        // Almacenamos los valores en un array para facilidad
        $valores = [$valor1, $valor2, $valor3, $valor4, $valor5];

        // Recogemos las operaciones seleccionadas
        if (isset($_POST['operacion'])) {
            $operaciones = $_POST['operacion'];

            foreach ($operaciones as $operacion) {
                switch ($operacion) {
                    case 'suma':
                        $resultado = array_sum($valores);
                        echo "<p>Resultado de la suma: $resultado</p>";
                        break;

                    case 'resta':
                        $resultado = array_shift($valores); // Iniciamos con el primer valor
                        foreach ($valores as $valor) {
                            $resultado -= $valor;
                        }
                        echo "<p>Resultado de la resta: $resultado</p>";
                        break;

                    case 'multiplicacion':
                        $resultado = array_product($valores);
                        echo "<p>Resultado de la multiplicación: $resultado</p>";
                        break;

                    case 'division':
                        $resultado = array_shift($valores); // Iniciamos con el primer valor
                        foreach ($valores as $valor) {
                            if ($valor != 0) {
                                $resultado /= $valor;
                            } else {
                                echo "<p>Error: División entre cero no permitida.</p>";
                                break 2; // Salimos del switch y del foreach
                            }
                        }
                        echo "<p>Resultado de la división: $resultado</p>";
                        break;

                    default:
                        echo "<p>Operación no válida</p>";
                        break;
                }
            }
        } else {
            echo "<p>No ha seleccionado ninguna operación.</p>";
        }
    }
    ?>
</body>
</html>

