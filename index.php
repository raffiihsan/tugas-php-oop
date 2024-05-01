<?php
require 'animal.php';
require 'frog.php';
require 'ape.php';

$sheep = new animal();
$sheep -> setName("shaun");

echo "Name: ".$sheep -> getName()."<br>";
echo "Legs : ".$sheep -> legs."<br>";
echo "Cold blooded : ".$sheep -> cold_blooded()."<br><br>";

$buduk = new frog();
$buduk -> setName("buduk");

echo "Name: ".$buduk -> getName()."<br>";
echo "Legs : ".$buduk->legs."<br>";
echo "Cold blooded : ".$buduk -> cold_blooded()."<br>";
echo "Jump : ".$buduk -> jump()."<br><br>";

$sungokong = new ape();
$sungokong -> setName("sungokong");
$sungokong -> setLegs(2);

echo "Name: ".$sungokong -> getName()."<br>";
echo "Legs: ".$sungokong -> legs."<br>";
echo "Cold blooded: ".$sungokong -> cold_blooded()."<br>";
echo "Yell : ".$sungokong -> yell();
?>
