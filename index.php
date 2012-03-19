<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/templates/twig.inc.php';

echo $twig->render("index.html.twig",array("bodyID" => "home"));