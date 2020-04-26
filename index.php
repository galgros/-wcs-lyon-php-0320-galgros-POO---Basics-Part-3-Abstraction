<?php

require_once 'Bicycle.php';
require_once 'Skateboard.php';
require_once 'Car.php';
require_once 'Truck.php';

require_once  'MotorWay.php';
require_once  'PedestrianWay.php';
require_once  'ResidentialWay.php';

$bike = new Bicycle('blue', 2);
$rockrider = new Bicycle('yellow', 2);
$tornado = new Bicycle('black', 2);

$theHomer = new Car('grey', 3, 'electric');
$pinkSedan = new Car('pink', 5, 'gaz');
$springPolice = new Car('black&white', 4, 'gaz');

$van = new Truck('red', 5, 'gaz', 50);
$bigTruck = new Truck('white', 3, 'gaz', 250);

$overboard = new Skateboard('green', 1);

$rd66 = new MotorWay();
$pedWay = new PedestrianWay();
$resWay = new ResidentialWay();

$rd66->addVehicle($bigTruck);
$rd66->addVehicle($bike);
$rd66->addVehicle($springPolice);
//var_dump($rd66->getCurrentVehicle());

$pedWay->addVehicle($overboard);
$pedWay->addVehicle($bike);
$pedWay->addVehicle($van);
//var_dump($pedWay->getCurrentVehicle());

$resWay->addVehicle($bigTruck);
$resWay->addVehicle($bike);
$resWay->addVehicle($springPolice);
//var_dump($resWay->getCurrentVehicle());


// POO - Basics | Part 4 : Exceptions
$pinkSedan->setParkBrake(true);
//$pinkSedan->setParkBrake(false);



//TODO POO 5 INTERFACE
require_once 'ElectricBike.php';
require_once 'LightableInterface.php';

//tests for Bike
echo $bike->isIsLigthed() . "<br>";
$bike->forward();
echo 'speed = ' . $bike->getCurrentSpeed() . 'km/h<br>';
echo $bike->isIsLigthed() . "<br>";
$bike->brake();
echo 'speed = ' . $bike->getCurrentSpeed() . 'km/h<br>';
echo $bike->isIsLigthed() . "<br>";

//tests for Car
echo $pinkSedan->isIsLigthed() . "<br>";
$pinkSedan->switchOn();
echo $pinkSedan->isIsLigthed() . "<br>";
$pinkSedan->switchOff();
echo $pinkSedan->isIsLigthed() . "<br>";

/*tests for Skateboard => THIS THROW AN ERROR
echo $overboard->isIsLigthed();
$overboard->switchOn();
echo $overboard->isIsLigthed();
$overboard->switchOff();
echo $overboard->isIsLigthed();
*/











/*echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h<br>';
echo '<hr>';

echo $pinkSedan->start();
echo $pinkSedan->forward();
echo '<br> Vitesse du pink sedan ' . $pinkSedan->getCurrentSpeed() . 'km/h<br>';
echo $pinkSedan->brake();
echo '<br> Vitesse du pink sedan ' . $pinkSedan->getCurrentSpeed() . 'km/h<br>';
echo '<hr>';

echo 'capacity: ' . $bigTruck->getStorageCapacity();
echo '<br>current load: ' . $bigTruck->getLoad() . '<br>';
echo $bigTruck->start();
echo $bigTruck->forward();
echo '<br> Vitesse du big truck ' . $bigTruck->getCurrentSpeed() . 'km/h<br>';
echo $bigTruck->brake();
echo '<br> Vitesse du big truck ' . $bigTruck->getCurrentSpeed() . 'km/h<br>';
$bigTruck->setLoad(200);
echo 'new load: ' . $bigTruck->getLoad() . '<br>';
echo $bigTruck->filling() . '<br>';
$bigTruck->setLoad(300);
echo 'new load: ' . $bigTruck->getLoad() . '<br>';
echo $bigTruck->filling() . '<br>';
echo '<hr>';

try{
    echo $pinkSedan->start();
} catch (Exception $e){
    echo 'Exeption received :' . $e->getMessage() . '<br>';
    $pinkSedan->setParkBrake(false);
    echo $pinkSedan->start();
} finally {
    echo 'Ma voiture roule comme un donut';
}


// POO 5 INTERFACE | cours
require_once 'ChargingStation.php';
require_once 'ElectricBike.php';

$charginStation = new ChargingStation();
$tazerbike = new ElectricBike('black', 1);

//set charge
$tazerbike->setCharge(0);
echo 'Charge set to ' . $tazerbike->getCharge() . "%<br>";
//full charge
$charginStation->fullCharge($tazerbike);
echo 'Charge is now ' . $tazerbike->getCharge() . "%<br>";
//discharge 15%
$tazerbike->Unload(15);
echo 'Charge is now ' . $tazerbike->getCharge() . "%<br>";
*/
