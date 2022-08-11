<?php

require_once 'classes/FirstClass.php';

$object1 = new FirstClass();
$object2 = new FirstClass;

var_dump($object1);
var_dump($object2);
