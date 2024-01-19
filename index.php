<?php 

require_once __DIR__ . "/function.php";


$matriz_quadrada1 = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

$matriz_quadrada2 = [
    [9, 8, 7],
    [6, 5, 4],
    [3, 2, 1]
];


$matriz_Nquadrada1 = [
    [1, 2, 3],
    [4, 5, 6]
];

$matriz_Nquadrada2 = [
    [9, 8],
    [6, 5],
    [7, 4]
];

echo "MATRIZES";


multiplicar_matrizes($matriz_quadrada1, $matriz_quadrada2);
multiplicar_matrizes($matriz_Nquadrada1, $matriz_Nquadrada2);

?>