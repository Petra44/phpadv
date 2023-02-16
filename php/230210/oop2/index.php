<?php
require "Planet.class.php";

$Mercurius = new Planet("Mercurius", 4880, 57910000);
$Venus = new Planet("Venus", 12104, 108208930);
$aarde = new Planet("Aarde", 12756	, 149597870);
$Mars = new Planet("Mars", 6794, 227936640);
$Jupiter = new Planet("Jupiter", 142984, 778412010);
$Saturnus = new Planet("Saturnus", 120536, 1426725400);
$Uranus = new Planet("Uranus", 51118, 2870972200);
$Neptunus = new Planet("Neptunus", 49572, 4498252900);

$planets = [
    $Mercurius, $Venus, $aarde, $Mars, $Jupiter, $Saturnus, $Uranus, $Neptunus
];

foreach($planets as $planet) {
    echo "<li>". $planet->getName(). " : " . $planet->getDiameter() . "</li>";
    // echo $planet->renderNameMass();
}

print '<pre>';
var_dump($planets);