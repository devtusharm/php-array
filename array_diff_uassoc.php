<?php
/* array_diff_uassoc()
* array_diff_uassoc function compare two arrays keys and values return the difference. Use user defined fun to compare the keys
* array_diff_uassoc(array1, array2, array3, 'myFunction')
*/

function myFunction($a, $b){
  if($a===$b){
      return 0;
  }
  return ($a>$b)?1:-1;
}

$arr1 = array('a'=>'mango', 'b'=>'apple', 'c'=>'coconut');
$arr2 = array('a'=>'orange','c'=>'coconut');
$result = array_diff_uassoc($arr1, $arr2, 'myFunction');
print_r($result);
?>