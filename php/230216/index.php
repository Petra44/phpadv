<?php

require "Animal.class.php";
require "Bird.class.php";

$vogelbekdier = new Animal("Jos");
$vogelbekdier->setNoise("brrrrr");

$merel = new Bird("Mirlo");
$merel->setNoise("tweet tweet", 2);

print "<pre>";
print $vogelbekdier->getName();
print "<br />";
print $vogelbekdier->makeNoise();
print "<br />";
print_r($vogelbekdier);
print "<br />";


print "<pre>";
print $merel->getName();
print "<br />";
print $merel->makeNoise();
print "<br />";
print $merel->fly();
print "<br />";
print_r($merel);
print "<br />";