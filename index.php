<?php 
require 'libs/flight/Flight.php';
	Flight::route('/', function(){
    echo 'hello world!';});
	Flight::start();