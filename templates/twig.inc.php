<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Twig-1.6.1/lib/Twig/Autoloader.php';

	Twig_Autoloader::register();
	$loader = new Twig_Loader_Filesystem($_SERVER['DOCUMENT_ROOT'] . '/templates');
	$twig = new Twig_Environment($loader, array(				
	        autoescape => false,
	));