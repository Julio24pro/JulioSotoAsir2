<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Promedio de Notas de Alumnos</title>
</head>
<body>

<?php
class Alumno {
    public $nombre;
    public $nota1;
    public $nota2;
    public $nota3;

    // Constructor de la clase para inicializar los valores
    public function __construct($nombre, $nota1, $nota2, $nota3) {
        $this->nombre = $nombre;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->nota3 = $nota3;
    }

    // Método para calcular la media de las notas
    public function calcularMedia() {
        return ($this->nota1 + $this->nota2 + $this->nota3) / 3;
    }

    // Método para mostrar la información del alumno
    public function mostrarInformacion() {
        echo "<h3>Nombre: $this->nombre</h3>";
        echo "<p>Nota 1: $this->nota1</p>";
        echo "<p>Nota 2: $this->nota2</p>";
        echo "<p>Nota 3: $this->nota3</p>";
        echo "<p>Media: " . number_format($this->calcularMedia(), 2) . "</p>";
    }
}

// Crear dos objetos Alumno
$alumno1 = new Alumno("Juan Pérez", 85, 90, 88);
$alumno2 = new Alumno("María López", 78, 82, 85);

// Mostrar la información de cada alumno
echo "<h2>Información de los Alumnos</h2>";
$alumno1->mostrarInformacion();
$alumno2->mostrarInformacion();

?>

</body>
</html>

