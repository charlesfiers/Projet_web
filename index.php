<!-- CODE DES ROUTES ET PARAMETRES DEPENDANTS DE LA ROUTE SUIVIE -->

<?php 
session_start();

include 'config.php'; //fichier à configurer et à mettre dans le .gitignore


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
	$paragraphe = Model::factory('Boutique')->distinct()->select('type_boutique')->find_many();
	Flight::render('commercants',array('paragraphe' => $paragraphe),'main_content');
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


function contacts(){
	$Informations = Model::factory('Informations')->find_many();
	$newsletter = Model::factory('newsletter')->find_many();
	Flight::render('contact',array('Informations' => $Informations,'newsletter' => $newsletter),'main_content');
	Flight::render('base', array('icon' => '<link rel="icon" type="image/png" href="Medias/logoHaF.png" />',
					'title' => '<title>Contacts - Halle au Frais</title>',
					'animback' => 'backfixe',
					'position' => 'Contacts', ));
}

function mailing(){
	$newsletter = Model::factory('newsletter')->find_many();
	Flight::render('mailing',array('newsletter' => $newsletter),'main_content');
	Flight::render('base', array('icon' => '<link rel="icon" type="image/png" href="Medias/logoHaF.png" />',
					'title' => '<title>Contacts - Halle au Frais</title>',
					'animback' => 'backfixe',
					'position' => 'Mail', ));
}

function admin(){
	if (isset($_SESSION['id'])) {
		$admin = Model::factory('Administrateur')->find_one($_SESSION['id']);
		$Informations = Model::factory('Informations')->find_many();
		$commercants = Model::factory('Commercant')->find_many();
		$boutiques = Model::factory('Boutique')->find_many();
		$articles = Model::factory('Article')->find_many();
		Flight::render('admin',array('admin' => $admin,'infos' => $Informations,'commercants' => $commercants,'boutiques' => $boutiques,'articles' => $articles),'main_content');
	}
	Flight::render('admin',array(),'main_content');
	Flight::render('base', array('icon' => '<link rel="icon" type="image/png" href="Medias/logoHaF.png" />',
					'title' => '<title>Admin - Halle au Frais</title>',
					'animback' => 'backfixe',
					'position' => 'Admin', ));
}

function boucherie(){
	$paragraphe = Model::factory('Boutique')->where('type_boutique','Boucherie')->select('type_boutique')->find_many();
	Flight::render('commercants',array('paragraphe' => $paragraphe),'main_content');
	Flight::render('base',array('icon' => '<link rel="icon" type="image/png" href="Medias/logoHaF.png" />',
					'title' => '<title>Boucherie - Halles au Frais</title>',
					'animback' => 'backfixe',
					'position' => 'Commercants',));
}

function boulangerie(){
	$paragraphe = Model::factory('Boutique')->where('type_boutique','Boulangerie')->select('type_boutique')->find_many();
	Flight::render('commercants',array('paragraphe' => $paragraphe),'main_content');
	Flight::render('base',array('icon' => '<link rel="icon" type="image/png" href="Medias/logoHaF.png" />',
					'title' => '<title>Boulangerie - Halles au Frais</title>',
					'animback' => 'backfixe',
					'position' => 'Commercants',));
}

function poissonnerie(){
	$paragraphe = Model::factory('Boutique')->where('type_boutique','Poissonnerie')->select('type_boutique')->find_many();
	Flight::render('commercants',array('paragraphe' => $paragraphe),'main_content');
	Flight::render('base',array('icon' => '<link rel="icon" type="image/png" href="Medias/logoHaF.png" />',
					'title' => '<title>Poissonnerie - Halles au Frais</title>',
					'animback' => 'backfixe',
					'position' => 'Commercants',));
}

function primeur(){
	$paragraphe = Model::factory('Boutique')->where('type_boutique','Primeur')->select('type_boutique')->find_many();
	Flight::render('commercants',array('paragraphe' => $paragraphe),'main_content');
	Flight::render('base',array('icon' => '<link rel="icon" type="image/png" href="Medias/logoHaF.png" />',
					'title' => '<title>Primeur - Halles au Frais</title>',
					'animback' => 'backfixe',
					'position' => 'Commercants',));
}

function caviste(){
	$paragraphe = Model::factory('Boutique')->where('type_boutique','Caviste')->select('type_boutique')->find_many();
	Flight::render('commercants',array('paragraphe' => $paragraphe),'main_content');
	Flight::render('base',array('icon' => '<link rel="icon" type="image/png" href="Medias/logoHaF.png" />',
					'title' => '<title>Caviste - Halles au Frais</title>',
					'animback' => 'backfixe',
					'position' => 'Commercants',));
}

function traiteur(){
	$paragraphe = Model::factory('Boutique')->where('type_boutique','Traiteur')->select('type_boutique')->find_many();
	Flight::render('commercants',array('paragraphe' => $paragraphe),'main_content');
	Flight::render('base',array('icon' => '<link rel="icon" type="image/png" href="Medias/logoHaF.png" />',
					'title' => '<title>Traiteur - Halles au Frais</title>',
					'animback' => 'backfixe',
					'position' => 'Commercants',));
}

Flight::route('/', 'hello');
Flight::route('/actualites', 'actualites');
Flight::route('/commercants','commercants');
Flight::route('/contacts','contacts');
Flight::route('/mailing','mailing');

Flight::route('/login','login');
Flight::route('/check','check');
Flight::route('/logout','logout');
Flight::route('/admin','admin');
Flight::route('/Boucherie','boucherie');
Flight::route('/Boulangerie','boulangerie');
Flight::route('/Poissonnerie','poissonnerie');
Flight::route('/Primeur','primeur');
Flight::route('/Caviste','caviste');
Flight::route('/Traiteur','traiteur');

Flight::start();