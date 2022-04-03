<?php
/* array_diff_assoc()
* array_diff_assoc function compare both keys and values of both array retrun the first array key&value not match with second or third etc   
* array_diff_assoc(array1, array2, array3 ....)
*/

$arr1 = array('a'=>'cow', 'b'=> 'tiger', 'c'=> 'lion');
$arr2 = array('d'=> 'horse', 'c'=>'lion', 'm'=>'tiger');
$arr3 = array('a'=>'cow');

print_r(array_diff_assoc($arr1, $arr2, $arr3));
?>