<!-- CODE DES ROUTES ET PARAMETRES DEPENDANTS DE LA ROUTE SUIVIE -->

<?php 
session_start();

define('BASE_URI', 'http://127.0.0.1:8080/edsa-PROJETTUT/'); // attention ne correspond qu'à la machine locale

require_once 'libs/idiorm.php';
require_once 'libs/paris.php';
require_once 'models/class.php';
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
//Création de commercants
function commercants(){
	$commercants = Model::factory('Commercant')->find_many();
	$boutiques = Model::factory('Boutique')->find_many();
	Flight::render('commercants',array('commercants' => $commercants, 'boutiques'=> $boutiques),'main_content');
	Flight::render('base',array('icon' => '<link rel="icon" type="image/png" href="Medias/logoHaF.png" />',
					'title' => '<title>Commerçants - Halles au Frais</title>',
					'animback' => 'backfixe',
					'position' => 'Commercants',));
}
function login(){
	Flight::render('login',NULL);
}
function check(){
	$log_check = Model::factory('Log_check')->find_many();
	Flight::render('check',array('log_check' => $log_check));
}
function logout(){
	Flight::render('logout',NULL);
}


Flight::route('/', 'hello');
Flight::route('/actualites', 'actualites');
Flight::route('/commercants','commercants');
Flight::route('/login','login');
Flight::route('/check','check');
Flight::route('/logout','logout');

Flight::start();