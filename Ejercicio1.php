<?php
// Función para ordenar una lista de números utilizando Bubble Sort
//que es el metodo bubble sort 
/*En cada paso del ciclo comprobamos si el elemento actual (el que está en la posición del índice actual) es mayor que el elemento siguiente del arreglo. Es decir, comprobar si el actual es mayor al de su derecha.

Si esa comprobación se cumple entonces intercambiamos los valores: lo que hay en el índice actual lo pasamos al siguiente, y viceversa. Para esto necesitamos una variable temporal.*/
function burbuja(&$arreglo)
{
    $longitud = count($arreglo);
    for ($i = 0; $i < $longitud; $i++) {
        for ($j = 0; $j < $longitud - 1; $j++) {
            if ($arreglo[$j] < $arreglo[$j + 1]) {
                $temporal = $arreglo[$j];
                $arreglo[$j] = $arreglo[$j + 1];
                $arreglo[$j + 1] = $temporal;
            }
        }
    }
}

$miArreglo = [5, 1, 80, 10, 7, 66, 100];
echo "Antes de ordenar: ";
print_r($miArreglo);
echo "<br>";
# Lo ordenamos
burbuja($miArreglo);
echo "Después de ordenar: ";
echo "\n";
print_r($miArreglo);
?>