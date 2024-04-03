<?php
// Función para ordenar una lista de palabras utilizando Merge Sort
//que es el metodo merge sort
/*
El método Merge Sort es un algoritmo de ordenamiento que divide una lista en mitades recursivamente,
 ordena esas mitades y luego las fusiona de manera ordenada. Es conocido por ser eficiente y estable 
 en términos de tiempo de ejecución, con una complejidad de tiempo O(n log n), lo que lo hace adecuado 
 para grandes conjuntos de datos. En términos simples, Merge Sort divide y conquista: divide el conjunto
  de datos en mitades más pequeñas, ordena esas mitades y luego las fusiona en un conjunto ordenado. Esto 
  se logra mediante el uso de la recursión y el proceso de fusión. 
En resumen, Merge Sort es un método eficiente y ampliamente utilizado para ordenar listas.

*/
function mergeSort($arr) {
    if (count($arr) <= 1) {
        return $arr;
    }

    $middle = floor(count($arr) / 2); 
    $left = array_slice($arr, 0, $middle);
    $right = array_slice($arr, $middle);

    $left = mergeSort($left);
    $right = mergeSort($right);

    return merge($left, $right);
}

function merge($left, $right) {
    $result = [];
    while (count($left) > 0 && count($right) > 0) {
        if ($left[0] <= $right[0]) {
            $result[] = array_shift($left);
        } else {
            $result[] = array_shift($right);
        }
    }

    while (count($left) > 0) {
        $result[] = array_shift($left);
    }

    while (count($right) > 0) {
        $result[] = array_shift($right);
    }

    return $result;
}

// Lista de palabras para ordenar con Merge Sort
$words = ["banana", "apple", "orange", "grape", "pineapple"];
echo "Lista de palabras antes de ordenar: " . implode(", ", $words) . "\n";
$sortedWords = mergeSort($words);
echo "Lista de palabras después de ordenar con Merge Sort: " . implode(", ", $sortedWords) . "\n";

?>
