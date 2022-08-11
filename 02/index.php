<?php

require_once 'classes/Car.php';

function debug($data) {
  echo '<pre>'.print_r($data, 1).'</pre>';
}

$car1 = new Car();
$car2 = new Car();

//debug($car1);

$car1->color = 'black';
$car1->brand = 'volvo';
$car1->speed = '200';
$car1->year = '2018';
$car1->colour = 'red';

$car2->color = 'white';
$car2->brand = 'toyota';
$car2->speed = '220';
$car1->year = '2022';

//debug($car1);
//debug($car2);

echo "<h3>I have: {$car1->brand}</h3>";
