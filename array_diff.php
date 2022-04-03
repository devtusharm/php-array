<?php
/*
* array_diff()
* Array diff compare the values of two arrays and return the difference values of first array
* array_diff(array1, array2, array3 ...)
*/

$arr1 = array('a'=>'red', 'b'=>'blue', 'c'=>'green');
$arr2 = array('e'=>'green', 'f'=>'blue');
print_r(array_diff($arr1, $arr2));
?>