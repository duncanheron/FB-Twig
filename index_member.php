<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/templates/twig.inc.php';

echo $twig->render("index_member.html.twig",array("bodyClass" => "section-member page-index"));