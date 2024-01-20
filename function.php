<?php 

function multiplicar_matrizes($matrizA, $matrizB) {

    $resultado = array_fill(0, count($matrizA), array_fill(0, count($matrizB[0]), 0));


    for($i = 0; $i < count($matrizA); $i++) {
        for($j = 0; $j < count($matrizB[0]); $j++) {
            echo "Resultado[$i][$j] = ";
            for($k = 0; $k < count($matrizA[0]); $k++) {
                echo "{$matrizA[$i][$k]} * {$matrizB[$k][$j]} + ";
                $resultado[$i][$j] += $matrizA[$i][$k] * $matrizB[$k][$j];
            }
            echo "\n";
        }
    }


}


?>