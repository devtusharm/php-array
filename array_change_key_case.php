<?php
/* array_change_key_case()
* array_change_key_case function change all the keys of an array to lowercase or uppercase.
* CASE_UPPER & CASE_LOWER
*/

/* Change to upper case key */
$people = array('Tushar'=>32, 'Pinky'=>31);
print_r(array_change_key_case($people, CASE_UPPER));
echo '<br>';
/* change to lower case key  */
print_r(array_change_key_case($people, CASE_LOWER));

?>