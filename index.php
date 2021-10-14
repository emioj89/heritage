<?php
/*require_once 'Bicycle.php';
$bike = new Bicycle();
echo $bike->demarrage();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();*/

require_once 'Bicycle.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->demarrage();
echo '<br> Vitesse du vélo : ' . $bicycle->getCurrentSpeed() . ' km/h' . '<br>';
echo $bicycle->brake();
echo '<br> Vitesse du vélo : ' . $bicycle->getCurrentSpeed() . ' km/h' . '<br>';
echo $bicycle->brake();


require_once 'camion.php';
$truck = new camion('red', 2);

echo $truck->demarrage();
echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';

echo $truck->brake();
echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';


echo $truck->brake();
echo '<br>';
$truck -> setLoad(50);
$truck -> setStockage(100);
echo'-------------';
echo $truck->getCharge(); 
echo '---------------';



require_once 'car.php';
$cars = new Car('red', 4, 'gasoline');

echo '<br> cayonero is a  '. $cars->getColor() .' car, it has '. $cars->getNbSeats() .' seats and it is a '. $cars->getEnergy() .'<br>';
echo $cars->demarrage();
echo '<br> speed of the car is  : ' . $cars->getcurrentSpeed() . ' km/h ' . $cars->getEnergyLevel().' liters of gasoline'. '<br>';
echo $cars->brake();
echo '<br> speed of the car is  : ' . $cars->getcurrentSpeed() . ' km/h ' . $cars->getEnergyLevel().' liters of gasoline'. '<br>';



