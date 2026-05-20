<?php

$pokemon = array("nome" => "Pikachu", "tipo" => "Eletrico");
$pokemon2 = array("nome" => "Wooper", "tipo" => "Água");
$pokemon3 = array("nome" => "Scarbunny", "tipo" => "Fogo");

$pokemons = array($pokemon, $pokemon2, $pokemon3);

echo "Nome do segundo pokémon: " . $pokemons[1]["nome"];