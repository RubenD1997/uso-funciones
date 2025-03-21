<?php

/*
Desarrollador: Ruben Dario Rocha Lizcano
CC: 1079185602
Programa: Desarrollo web con PHP
Evidencia: Taller "Uso de funciones"
*/


//Se incluye el archivo que contiene la función que determina y calcula el resultado
require_once 'biblioteca.php';

$numOne = 20;
$numTwo = 10;

echo 'Numero 1: ' . $numOne;

echo '<br/>';

echo 'Numero 2: ' . $numTwo;

echo '<br/>';
	
//Se llama la función y se muestra el resultado
echo 'Suma: ' . operaciones(
	$numOne, 
	$numTwo, 
	'S'
);

echo '<br/>';

echo 'Resta: ' . operaciones(
	$numOne, 
	$numTwo, 
	'R'
);

echo '<br/>';

echo 'Multiplicación: ' . operaciones(
	$numOne, 
	$numTwo, 
	'M'
);

echo '<br/>';

echo 'División: ' . operaciones(
	$numOne, 
	$numTwo, 
	'D'
);