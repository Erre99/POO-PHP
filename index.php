<?php

require_once('Car.php');
require_once('Driver.php');
require_once('UberX.php');
require_once('UberPool.php');
require_once('Account.php');
require_once('User.php');
require_once('UberVan.php');

$uberX = new UberX("CVB1253", new Account("Andrés Herrera", "AND333", "ederr@rgrd.com", "*****"), "Chevrolet", "Spark");

$uberX->printDataCar();

$uberPool = new UberPool("OED345", new Account("Andrea Rodriguez", "ERR433", "q13w@gmail.com", "******"), "NISSAN", "VERSA");

$uberPool->printDataCar();

$user1 = new User("Ricardo Dumas", "RGT678", "rodo@gmail.com", "*******");

$user1->showUser();

$uberVan = new UberVan("RGT443", new Account("Raúl Ramirez", "ERT433", "raarr@gmail.com", "**E*E*E"));
$uberVan->setPassenger(6);
$uberVan->printDataCar();




?>
