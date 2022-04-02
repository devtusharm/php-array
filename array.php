<?php
/* There are 3 types of array in PHP 
 * Indexed Array - (indexes like 0, 1, 2 etc)
 * Associative array (named index array)
 * Multidimentional array (more than one arrays inside a array)
*/

/* Indexed array */
$fruits = array('Mangos', 'Grapes', 'Apples');
echo $fruits[0] .', '. $fruits[1].', '. $fruits[2].'<br>';

/* Indexed array looping */
for($i = 0; $i < count($fruits); $i++ ){
    echo $fruits[$i].'<br>';
}

/*Associative Array */
$person = array('tushar' => 32, 'pinky'=> 31, 'pratyush' => 5);
echo $person['tushar'].', '.$person['pinky'].', '.$person['pratyush'].'<br>';

/*Associative array in loop */
foreach($person as $key=>$value){
    echo 'Name ='.$key.' & Age = '.$value.'<br>';
}

/* Multidimentioanl Array */
$cars = array(
  array('Tatota', 100, 200),
  array('Maruti', 200, 500),
  array('Tata', 700, 100)
);
echo $cars[0][0].','.$cars[0][1].','.$cars[0][2].'<br>';
echo $cars[1][0].','.$cars[1][0].','.$cars[1][2].'<br>';
echo $cars[2][0].','.$cars[2][1].','.$cars[2][2].'<br>';

/* Multidimentional array in loop*/

foreach ($cars as $keys => $elements){
    foreach ($elements as $childkeys => $car){
        echo $cars[$keys][$childkeys];
    }
    echo '<br>';
}

?>


