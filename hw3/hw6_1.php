<?php
$handle = fopen ("php://stdin","r");
echo "Enter apartment number!\n";
$apar_number = fgets($handle);
echo "Enter the number of storeys of the house!\n";
$floors = fgets($handle);
echo "Number of apartments per floor!\n";
$apartments = fgets($handle);
$front_door = ceil($apar_number/($floors*$apartments));
$floor = ceil($apar_number/$apartments) % $floors;
echo "entrance - $front_door \nfloor - $floor";