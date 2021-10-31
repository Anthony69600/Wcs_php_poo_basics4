<?php
// index.php bicycle

require 'Bicycle.php';

// index.php Skateboard

require_once 'Skateboard.php';
/*
$skate = new Skateboard ('white', 1);


$bicycle = new Bicycle('blue', 1);
*/
// index.php Car

require 'Car.php';

//$car = new Car('green', 4, 'electric');

// index.php Truck

require 'Truck.php';
/*
$truck = new Truck('red', 3, 35,'fuel');

$truck->setCurrentSpeed(50);
$truck->setNbWheels(8);
*/

// Les classes highway

require "MotorWay.php";
require "PedestrianWay.php";
require "ResidentialWay.php";

/*
$highway = new MotorWay();
$pedestrianway = new PedestrianWay();
$cityway = new ResidentialWay();

echo '<br><br>';

$cityway->addVehicle($car);

echo '<br><br>';

$cityway->addVehicle($truck);

echo '<br><br>';

var_dump($cityway->getCurrentVehicles());

echo '<br><br>';

$cityway->addvehicle($bicycle);

echo '<br><br>';

$highway->addvehicle($truck);

var_dump($pedestrianway->getCurrentVehicles());

echo '<br><br>';

$pedestrianway->addvehicle($skate);

echo '<br><br>';

var_dump($pedestrianway->getCurrentVehicles());
*/

// car with hand brake POO-Basics4:

try{
    $car = new Car('green', 4, 'electric');
    var_dump($car);
    $car->start();
} catch (Exception $e) {
    echo "Exception est trouvée : ". $e->getMessage() . "</br>";
    $car->setHasParkBrake(false);
    echo "Frein à main est baissé!" . "<br>";
    var_dump($car);
} finally {
    echo "Ma voiture roule comme un donut";
}





?>