<?php

$umas = array("Mambo", "Hachimi", "Golshi", "Omatsuri", "Harikitte ikkou");
$pokemon = array("Wooper", "Quagsire", "Talonflame", "Ivysaur", "vaporeon");
$sonic = array("sonic", "tails", "knuckles", "amy", "shadow");
$smash = array("Mario", "Megaman", "Samus", "Mewtwo", "Kirby");


echo "Umas: ";
foreach($umas as $valor){
    echo $valor . " | ";
}
echo "\n";
echo "Pokémon: ";
foreach($pokemon as $valor){
    echo $valor . " | ";
}
echo "\n";
echo "Sonic: ";
foreach($sonic as $valor){
    echo $valor . " | ";
}
echo "\n";
echo "Smash: ";
foreach($smash as $valor){
    echo $valor . " | ";
}
echo "\n";
