<?php

require_once __DIR__ . "/../vendor/autoload.php";

$date = new \DateTime;
$date->setDate(1984,9,8);
$today = new \DateTime;

$age = new \App\Age($date, $today);
?>
Minha idade é <?=$age->calculate();?>...