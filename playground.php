<?php

include('Car.php');

$myCar = new Car('Trabant');

$myCar
	->setEngine('v12')
	->setHP(200)
	->setVMax(400,20)
	->setAcceleration()
	->helloCar()
;

echo ' Pretkosc = '. $myCar->getVMax().' Przyspieszenie = ' . $myCar->getAcceleration();
echo ' ' . $myCar->getEngine();
$myCar->drive();


