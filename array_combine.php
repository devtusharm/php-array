<?php
/* array_combine()
 * array combine function create a new array by combinging two arrays one keys array and one values array.
 * Both keys array and values array must have same number of elements
 * array_combine($keyarray,$valuearray)
*/

$names = array('Asish', 'Sarat');
$age = array(33,35);
print_r(array_combine($names, $age));
?>