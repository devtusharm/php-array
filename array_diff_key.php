<?php
/* array_diff_key()
* array_diff_key function compare the keys of two or multiple array return the difference from first array
* array_diff_key(array1, array2, array3...)
*/

$arr1= array('a'=>'Ram', 'b'=>'Sita', 'c'=>'Hari');
$arr2 = array('d'=>'Ram', 'B'=>'Sita', 'c'=>'Gopal');
print_r(array_diff_key($arr1, $arr2));
?>