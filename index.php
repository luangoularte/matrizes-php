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


echo "\n";
echo "MULTIPLICAÇÃO MATRIZES QUADRADAS:\n";
echo "\n";

$multi1 = multiplicar_matrizes($matriz_quadrada1, $matriz_quadrada2);
echo "\n";
formatMatriz($multi1);

echo "\n";
echo "MULTIPLICAÇÃO MATRIZES NÃO QUADRADAS:\n";
echo "\n";

$multi2 = multiplicar_matrizes($matriz_Nquadrada1, $matriz_Nquadrada2);
echo "\n";
formatMatriz($multi2);

echo "\n";
?>