<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once('include/tmdb-api.php');
require_once('include/function.php');
require_once('include/meta.php');

define('TOPPATH', $_SERVER['DOCUMENT_ROOT'] );

/**
* Construct Class
*/
$_ocim   = new _Ocim;
$config  = new stdClass();
$config->prefix = 'ocim_';

/**
* Permalink
*/
$config->url              = 'GANTI DENGAN LINK SPAM KALIAN'; // contoh : https://movie.demoscripts.info/
$config->seo              = 'true'; // true or false
$config->url_movie        = 'movie'; // true or false
$config->url_tv           = 'tv'; // true or false

/**
* TMDB Configuration
*/
// Example array(
//	"api 1",
//	"api 2",
//	); 

$config->tmdbapi = array(
	"e0b203e42e12587b6ce507b8aa452e8c"
	); 
	
// Tutorial https://www.youtube.com/watch?v=82FsjMmP9R4

$apikey      = $config->tmdbapi[mt_rand(0, count($config->tmdbapi) - 1)];
$language    = 'en';
$tmdb        = new TMDB($apikey, $language, true);