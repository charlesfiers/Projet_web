<!-- CODE DES ROUTES ET PARAMETRES DEPENDANTS DE LA ROUTE SUIVIE -->

<?php 

define('BASE_URI', 'http://localhost/Projet/Projet_web/'); // attention ne correspond qu'à la machine locale

require_once 'libs/idiorm.php';
require_once 'libs/paris.php';
require_once 'models/article.php';
ORM::configure('sqlite:Data/bidon.sqlite');

require 'libs/flight/flight/Flight.php';

function hello(){
	Flight::render('base', 
		array('icon' => '<link rel="icon" type="image/png" href="Medias/logoHaF.png" />',
				'title' => ' <title>Halle au Frais</title>' , 
				'footer' => 'yes',
				'animback' => 'header_background',
				'position' => 'Infos'));

}

function actualites(){
	$articles = Model::factory('Article')->find_many();
	Flight::render('news', array('articles' => $articles), 'main_content');
	Flight::render('base', array('icon' => '<link rel="icon" type="image/png" href="Medias/logoHaF.png" />',
					'title' => '<title>News - Halle au Frais</title>',
					'animback' => 'backfixe',
					'position' => 'News', ));
}


Flight::route('/', 'hello');
Flight::route('/actualites', 'actualites');

Flight::start();