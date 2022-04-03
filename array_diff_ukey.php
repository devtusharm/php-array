<?php
/* array_diff_ukey()
* array_diff_ukey function compare two array keys using user defined function
* array_diff_ukey(array1, array2, array3, 'myFunction')
*/
function myFunction($a, $b){
  if($a===$b){
      return 0;
  }
  return ($a>$b)?1:-1;

}
$arr1 = array('a'=>'Bus', 'b'=>'Truck', 'c'=>'Auto');
$arr2 = array('d'=>'Scooty', 'e'=>'Truck', 'a'=>'Car');

$result = array_diff_ukey($arr1, $arr2, 'myFunction');
print_r($result);
?>