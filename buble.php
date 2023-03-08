<?php
function sumaMultiplos($n) {
    $suma = 0;
    for ($i = 1; $i < $n; $i++) {
        if ($i % 3 == 0 || $i % 5 == 0) {
            $suma += $i;
        }
    }
    return $suma;
}
$numero = 20;
$resultado = sumaMultiplos($numero);
echo "La suma de los múltiplos de 3 y 5 menores que ".$numero." es ".$resultado;
