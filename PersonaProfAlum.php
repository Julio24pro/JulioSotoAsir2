<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Información de Personas: Alumnos y Profesores</title>
</head>
<body>

<?php
// Clase base Persona
class Persona {
    public $nombre;

    // Constructor para inicializar el nombre
    public function __construct($nombre) {
        $this->nombre = $nombre;
    }
}

// Clase Alumno que hereda de Persona
class Alumno extends Persona {
    public $nota1;
    public $nota2;
    public $nota3;

    // Constructor de la clase Alumno
    public function __construct($nombre, $nota1, $nota2, $nota3) {
        // Llamar al constructor de la clase base
        parent::__construct($nombre);
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
        echo "<h3>Alumno: $this->nombre</h3>";
        echo "<p>Nota 1: $this->nota1</p>";
        echo "<p>Nota 2: $this->nota2</p>";
        echo "<p>Nota 3: $this->nota3</p>";
        echo "<p>Media: " . number_format($this->calcularMedia(), 2) . "</p>";
    }
}

// Clase Profesor que hereda de Persona
class Profesor extends Persona {
    public $grado;

    // Constructor de la clase Profesor
    public function __construct($nombre, $grado) {
        // Llamar al constructor de la clase base
        parent::__construct($nombre);
        $this->grado = $grado;
    }

    // Método para mostrar la información del profesor
    public function mostrarInformacion() {
        echo "<h3>Profesor: $this->nombre</h3>";
        echo "<p>Grado: $this->grado</p>";
    }
}

// Crear objetos de Alumno y Profesor
$alumno1 = new Alumno("Juan Pérez", 85, 90, 88);
$alumno2 = new Alumno("María López", 78, 82, 85);
$profesor1 = new Profesor("Carlos Gómez", "Matemáticas");

// Mostrar la información de cada persona
echo "<h2>Información de los Alumnos</h2>";
$alumno1->mostrarInformacion();
$alumno2->mostrarInformacion();

echo "<h2>Información del Profesor</h2>";
$profesor1->mostrarInformacion();

?>

</body>
</html>
