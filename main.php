<?php
require_once "./4.php";
$objectOne = new Car ("УАЗ-469","BLACK-GREEN","внедорожник");
echo "Марка машины - " . $objectOne->getBrand() . "<br>";
echo "Цвет машины - " . $objectOne->getColor() . "<br>";
echo "Типаж машины - " . $objectOne->getMachinetype() . "<br>";

require_once "./2.php";
$objectOne = new mechanicalHandle ("BRAUBERG","BLACK",0.5);
echo "Марка - " . $objectOne->getBrand() . "<br>";
echo "Цвет пасты - " . $objectOne->getPastecolor() . "<br>";
echo "Толщина пасты в мм - " . $objectOne->getPastethickness() . "<br>";