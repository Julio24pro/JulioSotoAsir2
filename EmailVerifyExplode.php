<!DOCTYPE html>
<html>
<body>

<?php
$email = "usuario@ejemplo.es";

// Verifica si tiene una única @
$email_partes = explode("@", $email);

// Verificamos que haya exactamente 2 partes (usuario y dominio)
if (count($email_partes) == 2) { $dominio = $email_partes[1];

// Verificamos si el dominio tiene una extensión válida (.com o .es)
$dominio_partes = explode(".", $dominio);

// Comprobamos que la extensión sea "com" o "es" y que el dominio tenga al menos un nombre 
$extension = end($dominio_partes);
if (count($dominio_partes) >= 2 && ($extension == "com" || $extension == "es")) {
	echo "El correo electrónico es válido.";
} else {
    echo "El correo electrónico tiene una extensión inválida."; }
} else {
    echo "El correo electrónico debe contener una única '@'.";
}
?>

</body>
</html>

