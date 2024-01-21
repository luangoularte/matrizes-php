<?php 

function multiplicar_matrizes($matrizA, $matrizB) {

    $resultado = array();
    $soma = 0; 


    for($i = 0; $i < count($matrizA); $i++) {
        for($j = 0; $j < count($matrizB[0]); $j++) {
            echo "Resultado[$i][$j] = ";
            for($k = 0; $k < count($matrizA[0]); $k++) {
                echo "{$matrizA[$i][$k]} * {$matrizB[$k][$j]} + ";
                $soma += $matrizA[$i][$k] * $matrizB[$k][$j];
                $resultado[$i][$j] = $soma;
            }
            
            $soma = 0;

            echo "\n";
        }
    }

    return $resultado;

}


function formatMatriz($matriz) {
    foreach($matriz as $linha){
        foreach($linha as $num){
            echo $num . " ";
        }
        echo "\n";
    }
}

?>