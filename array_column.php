<?php 
/* array_column()
* array_column function returns the value of a single column in the given array.
* array_column(array, column_key, index_key)
*/

$employee = array(
 array('name'=>'suresh', 'age'=>'48', 'dept'=>'IT'),
 array('name'=>'Rajesh','age'=>'45', 'dept'=>'PRODUCT'),
 array('name'=>'Markandey', 'age'=>'40', 'dept'=>'MARKETING'),
);

print_r(array_column($employee, 'dept','name'));
?>