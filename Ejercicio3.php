<?php
// Function to perform insertion sort on an array
/*
La ordenación por inserción es un algoritmo de ordenación simple que construye la matriz (o lista) ordenada final,
 un elemento a la vez. Es mucho menos eficiente en listas grandes que algoritmos más avanzados como la clasificación rápida,
 la clasificación en montón o la clasificación por combinación.

*/ 
function insertion_Sort($my_array)
{
   
    for ($i = 0; $i < count($my_array); $i++) {
        $val = $my_array[$i]; // Store the current element
        $j = $i - 1; // Initialize index for the previous element
        
        // Shift elements of my_array[0..i-1] that are greater than val
        // to one position ahead of their current position
        while ($j >= 0 && strcmp($my_array[$j], $val) > 0) {
            $my_array[$j + 1] = $my_array[$j];
            $j--;
        }
        $my_array[$j + 1] = $val; // Place val at its correct position
    }
    return $my_array; // Return the sorted array
}

$test_array = array("Charlie", "Alice", "Bob", "David", "Eve");

echo "Lista original:\n";
echo implode(', ', $test_array); // Display original array
echo "\nLista ordenada:\n";
print_r(insertion_Sort($test_array)); // Display sorted array

?>