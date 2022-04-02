<?php
/* array_chunk()
* array_chunk function breaks a array in new arrays
* array_chunk(array, size, preserve_key)
*/
$friends = array('Raja'=>12, 'Dipu'=>10, 'Alok'=> 17, 'Pawan'=>3, 'Sunil'=>1);

//preserve_key = true
print_r(array_chunk($friends, 2, true));
echo '<br>';
//preserve_key = false (default)
print_r(array_chunk($friends, 3, false));

?>