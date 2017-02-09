<?php 
require 'libs/flight/flight/Flight.php';

function hello(){
	Flight::render('base', array('title' => 'Halle au Frais'));
}

Flight::route('/', 'hello');


Flight::start();