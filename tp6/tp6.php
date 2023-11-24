<?php

// Ejercicio 1


$n = 8;
$i = $n;
$result = 1;

while($i>1){
   $result *=$i;
   $i--;
}
echo $result;

// Ejercicio 2/3


if (isset($_POST["nombre"]) && isset($_POST["nota"])) {
    $nombre = $_POST["nombre"];
    $nota = $_POST["nota"];
//La función preg_match() devuelve 1 si se encuentra una coincidencia, 0 si no se encuentra ninguna coincidencia
//en si se le integra una exprecion y se regula con la funcion,en vez de letra tambien puede ser numero
    // Validar el nombre
    if (!preg_match("/^[a-zA-Z ]+$/", $nombre)) {
        echo "El nombre del alumno solo debe contener letras";
        return;
    }

    // Validar la nota
    if (!is_numeric($_POST["nota"])) {
        echo "La nota debe ser un número";
        return;
    } else if ($nota < 0 || $nota > 10) {
        echo "La nota debe estar entre 0 y 10";
        return;
    }

    // Obtener la calificación
    $calificacion = "";
    if ($nota >= 0 && $nota <= 2) {
        $calificacion = "Muy deficiente";
    } else if ($nota >= 3 && $nota <= 5) {
        $calificacion = "Insuficiente";
    } else if ($nota >= 6 && $nota <= 7) {
        $calificacion = "Bien";
    } else if ($nota >= 8 && $nota <= 9) {
        $calificacion = "Notable";
    } else if ($nota == 10) {
        $calificacion = "Sobresaliente";
    }

    // Mostrar la calificación
    echo "El alumno $nombre tiene una calificación de $calificacion";
} else {
    echo "Los datos no fueron ingresados correctamente";
}

?>
