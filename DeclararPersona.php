<?php
// Declarar la clase Persona
class Persona {
    // Propiedades de la clase
    public $nombre;
    public $lugarNacimiento;
    public $coloresFavoritos = [];

    // Constructor para inicializar propiedades
    public function __construct($nombre, $lugarNacimiento, $coloresFavoritos = []) {
        $this->nombre = $nombre;
        $this->lugarNacimiento = $lugarNacimiento;
        $this->coloresFavoritos = $coloresFavoritos;
    }

    // Método para mostrar información de la persona
    public function mostrarInformacion() {
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Lugar de Nacimiento: " . $this->lugarNacimiento . "<br>";
        echo "Colores Favoritos: " . implode(", ", $this->coloresFavoritos) . "<br>";
    }
}

// Crear un objeto de la clase Persona
$persona = new Persona(
    "Julio Soto",           // Nombre
    "Chiclana de la Fra",     // Lugar de nacimiento
    ["Azul", "Verde", "Amarillo"] // Array de colores favoritos
);

// Mostrar la información de la persona
$persona->mostrarInformacion();
?>

