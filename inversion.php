<?php
function invertirPalabras($frase) {
    $palabras = explode(" ", $frase);
    $resultado = "";
    foreach ($palabras as $palabra) {
        if (strlen($palabra) > 5) {
            $palabra = strrev($palabra);
        }
        $resultado .= $palabra . " ";
    }
    return trim($resultado);
}

$frase = "“Bienvenido a Treda Solutions";
$resultado = invertirPalabras($frase);
echo $resultado;

