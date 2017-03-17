<?php 

define('BASE_URI', 'http://localhost/Projet/Projet_web/'); // attention ne correspond qu'à la machine locale

require_once 'libs/idiorm.php';
require_once 'libs/paris.php';
require_once 'models/article.php';
ORM::configure('sqlite:Data/bidon.sqlite');

require 'libs/flight/flight/Flight.php';

function hello(){
	Flight::render('base', array('title' => 'Halle au Frais', 'footer' => 'yes'));

}

function actualites(){
	$articles = Model::factory('Article')->find_many();
	Flight::render('news', array('articles' => $articles), 'main_content');
	Flight::render('base', array('title' => 'Halle au Frais',));
}


Flight::route('/', 'hello');
Flight::route('/actualites', 'actualites');

Flight::start();