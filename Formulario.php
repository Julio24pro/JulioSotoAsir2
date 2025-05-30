<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Datos personales</h1>

<?php
function recoge($key, $type = "")
{
    if (!is_string($key) && !is_int($key) || $key == "") {
        trigger_error("Function recoge(): Argument #1 (\$key) must be a non-empty string or an integer", E_USER_ERROR);
    } elseif ($type !== "" && $type !== []) {
        trigger_error("Function recoge(): Argument #2 (\$type) is optional, but if provided, it must be an empty array or an empty string", E_USER_ERROR);
    }
    $tmp = $type;
    if (isset($_REQUEST[$key])) {
        if (!is_array($_REQUEST[$key]) && !is_array($type)) {
            $tmp = trim(htmlspecialchars($_REQUEST[$key]));
        } elseif (is_array($_REQUEST[$key]) && is_array($type)) {
            $tmp = $_REQUEST[$key];
            array_walk_recursive($tmp, function (&$value) {
                $value = trim(htmlspecialchars($value));
            });
        }
    }
    return $tmp;
}

$nombre      = recoge("nombre");
$apellidos   = recoge("apellidos");
$edad        = recoge("edad");
$peso        = recoge("peso");
$sexo        = recoge("genero");
$estadoCivil = recoge("estadoCivil");
$cine        = recoge("cine");
$deporte     = recoge("deporte");
$literatura  = recoge("literatura");
$musica      = recoge("musica");
$tebeos      = recoge("tebeos");
$television  = recoge("television");

$nombreOk      = false;
$apellidosOk   = false;
$edadOk        = false;
$pesoOk        = false;
$sexoOk        = false;
$estadoCivilOk = false;
$cineOk        = false;
$deporteOk     = false;
$literaturaOk  = false;
$musicaOk      = false;
$tebeosOk      = false;
$televisionOk  = false;

if ($nombre == "") {
    print "  <p class=\"aviso\">No ha escrito su nombre.</p>\n";
    print "\n";
} else {
    $nombreOk = true;
}

if ($apellidos == "") {
    print "  <p class=\"aviso\">No ha escrito sus apellidos.</p>\n";
    print "\n";
} else {
    $apellidosOk = true;
}

if ($edad == "...") {
    print "  <p class=\"aviso\">No ha indicado su edad.</p>\n";
    print "\n";
} elseif ($edad != "1" && $edad != "2" && $edad != "3" && $edad != "4") {
    print "  <p class=\"aviso\">Por favor, indique su grupo de edad.</p>\n";
    print "\n";
} else {
    $edadOk = true;
}

if ($peso == "") {
    print "  <p class=\"aviso\">No ha escrito su peso.</p>\n";
    print "\n";
} elseif (!is_numeric($peso)) {
    print "  <p class=\"aviso\">No ha escrito el peso como número.</p>\n";
    print "\n";
} elseif (!ctype_digit($peso)) {
    print "  <p class=\"aviso\">No ha escrito el peso como número entero.</p>\n";
    print "\n";
} elseif ($peso > 250) {
    print "  <p class=\"aviso\">El peso es superior a 250 kg.</p>\n";
    print "\n";
} else {
    $pesoOk = true;
}

if ($sexo == "") {
    print "  <p class=\"aviso\">No ha indicado su sexo.</p>\n";
    print "\n";
} elseif ($sexo != "hombre" && $sexo != "mujer") {
    print "  <p class=\"aviso\">Por favor, indique si su sexo es hombre o mujer.</p>\n";
    print "\n";
} else {
    $sexoOk = true;
}

if ($estadoCivil == "") {
    print "  <p class=\"aviso\">No ha indicado su estado civil.</p>\n";
    print "\n";
} elseif ($estadoCivil != "soltero" && $estadoCivil != "casado" && $estadoCivil != "otro") {
    print "  <p class=\"aviso\">Por favor, indique si su estado civil es soltero, casado u otro.</p>\n";
    print "\n";
} else {
    $estadoCivilOk = true;
}

if ($cine != "" && $cine != "on") {
    print "  <p class=\"aviso\">Por favor, indique si le gusta o no el cine.</p>\n";
    print "\n";
} else {
    $cineOk = true;
}

if ($deporte != "" && $deporte != "on") {
    print "  <p class=\"aviso\">Por favor, indique si le gusta o no el deporte.</p>\n";
    print "\n";
} else {
    $deporteOk = true;
}

if ($literatura != "" && $literatura != "on") {
    print "  <p class=\"aviso\">Por favor, indique si le gusta o no la literatura.</p>\n";
    print "\n";
} else {
    $literaturaOk = true;
}

if ($musica != "" && $musica != "on") {
    print "  <p class=\"aviso\">Por favor, indique si le gusta o no la música.</p>\n";
    print "\n";
} else {
    $musicaOk = true;
}

if ($tebeos != "" && $tebeos != "on") {
    print "  <p class=\"aviso\">Por favor, indique si le gustan o no los tebeos.</p>\n";
    print "\n";
} else {
    $tebeosOk = true;
}

if ($television != "" && $television != "on") {
    print "  <p class=\"aviso\">Por favor, indique si le gusta o no la televisión.</p>\n";
    print "\n";
} else {
    $televisionOk = true;
}

if ($nombreOk && $apellidosOk && $edadOk && $pesoOk && $sexoOk && $estadoCivilOk
    && $cineOk && $deporteOk && $literaturaOk && $musicaOk && $tebeosOk && $televisionOk) {
    print "  <p>Su nombre es <strong>$nombre</strong>.</p>\n";
    print "\n";
    print "  <p>Sus apellidos son <strong>$apellidos</strong>.</p>\n";
    print "\n";

    if ($edad == 1) {
        print "  <p>Tiene <strong>menos de 20 años</strong>.</p>\n";
    } elseif ($edad == 2) {
        print "  <p>Tiene <strong>entre 20 y 39 años</strong>.</p>\n";
    } elseif ($edad == 3) {
        print "  <p>Tiene <strong>entre 40 y 59 años</strong>.</p>\n";
    } else {
        print "  <p>Tiene <strong>60 o más años</strong>.</p>\n";
    }
    print "\n";

    print "  <p>Su peso es de <strong>$peso</strong> kg.</p>\n";
    print "\n";

    if ($sexo == "hombre") {
        print "  <p>Es un <strong>hombre</strong>.</p>\n";
    } else {
        print "  <p>Es una <strong>mujer</strong>.</p>\n";
    }
    print "\n";

    if ($estadoCivil == "soltero") {
        print "  <p>Su estado civil es <strong>soltero</strong>.</p>\n";
    } elseif ($estadoCivil == "casado") {
        print "  <p>Su estado civil es <strong>casado</strong>.</p>\n";
    } else {
        print "  <p>Su estado civil no es <strong>ni soltero ni casado</strong>.</p>\n";
    }
    print "\n";

    if ($cine != "on" && $deporte != "on" && $literatura != "on" && $musica != "on" && $tebeos != "on" && $television != "on") {
        print "  <p class=\"aviso\">No ha marcado ninguna afición.</p>\n";
    } else {
        print "  <p>Le gusta: ";
        if ($cine == "on") {
            print "<strong>el cine</strong>, ";
        }
        if ($deporte == "on") {
            print "<strong>el deporte</strong>, ";
        }
        if ($literatura == "on") {
            print "<strong>la literatura</strong>, ";
        }
        if ($musica == "on") {
            print "<strong>la música</strong>, ";
        }
        if ($tebeos == "on") {
            print "<strong>los tebeos</strong>, ";
        }
        if ($television == "on") {
            print "<strong>la televisión</strong> ";
        }
        print "</p>\n";
        print "\n";
    }
}
?>
</body>
</html>
