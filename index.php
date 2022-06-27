<?php

require_once('Car.php');
require_once('Account.php');
require_once('UberX.php');
require_once('UberPool.php');

$uberX = new UberX("CVB123", new Account("Andrés Herrera", "AND333"), "Chevrolet", "Spark");

$uberX->printDataCar();

$uberPool = new UberPool("OED345", new Account("Andrea Rodriguez", "ERR433"), "NISSAN", "VERSA");

$uberPool->printDataCar();

?>
