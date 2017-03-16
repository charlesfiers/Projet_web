<?php 
require_once 'libs/idiorm.php';
require_once 'libs/paris.php';
require_once 'models/article.php';
ORM::configure('sqlite:Data/bidon.sqlite');

require 'libs/flight/flight/Flight.php';

function hello(){
	$articles = Model::factory('Article')->find_many();
	Flight::render('base', array('title' => 'Halle au Frais', 'articles' => $articles));

}

Flight::route('/', 'hello');


Flight::start();