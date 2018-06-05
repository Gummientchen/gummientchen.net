<?php

$content = array(
	'header' => array(
		'title' => "Gummientchen",
		'description' => "Gummientchen also play games",
		'themeColor' => "#ffffff",
	),
	'title' => array(
		'content' => "Gummientchen, they also play games.",
		'backgroundUrl' => "images/logo.svg",
	),
	'gamertags' => array(
		array(
			'title' => 'Steam',
			'gamertag' => 'Gummientchen',
			'text' => 'Praise Lord Gaben!',
			'image' => 'images/steam.svg',
			'link' => array('text' => 'Steam Profile', 'url' => 'http://steamcommunity.com/id/Gummientchen/')
		),
		array(
			'title' => 'Origin',
			'gamertag' => 'Gummientchen_ch',
			'text' => 'They will spy on you! :P',
			'image' => 'images/origin.svg',
		),
		array(
			'title' => 'Uplay',
			'gamertag' => 'Gummientchen_',
			'text' => 'These games are never finished! ;)',
			'image' => 'images/uplay.svg',
		),
		array(
			'title' => 'Xbox Live',
			'gamertag' => 'Gummientchen',
			'text' => 'One Xbox One X Box',
			'image' => 'images/xbox.svg',
		),
		array(
			'title' => 'Battle.net',
			'gamertag' => 'Gummientchen',
			'text' => 'Leeroy Jenkins!!',
			'image' => 'images/battlenet.svg',
		),
		array(
			'title' => 'Nintendo',
			'gamertag' => 'Gummientchen_ch',
			'text' => '0619 - 8903 - 4604',
			'image' => 'images/nintendo.svg',
		),
	),
	// 'socialmedia' => array(
	// 	array(
	// 		'title' => 'YouTube',
	// 		'name' => 'Gummientchen',
	// 		'text' => 'Test',
	// 		'image' => 'images/origin.svg',
	// 	),
	// ),
	'specs' => array(
		'url' => 'https://pcpartpicker.com/user/Nycxin/saved/ryrVnQ',
		'specs' => array(
			array('CPU','Intel - Core i7-7700K 4.2GHz Quad-Core Processor'),
			array('GPU','Asus - GeForce GTX 1080 Ti 11GB STRIX GAMING<br />Asus - GeForce GTX 1080 Ti 11GB STRIX GAMING'),
			array('RAM','Corsair - Vengeance LPX 32GB (4 x 8GB) DDR4-2666 Memory'),
			array('Motherboard','Asus - MAXIMUS IX HERO ATX LGA1151 Motherboard'),
			array('Storage','Samsung - SM951 512GB M.2-2280 Solid State Drive<br />Samsung - 850 EVO-Series 1TB 2.5" Solid State Drive<br />Samsung - 850 EVO-Series 1TB 2.5" Solid State Drive'),
			array('CPU Cooler','be quiet! - Dark Rock 3 67.8 CFM Fluid Dynamic Bearing CPU Cooler'),
			array('Case','be quiet! - be quiet! - Silent Base 800 (Black) ATX Mid Tower Case'),
			array('Power Supply','be quiet! - STRAIGHT POWER 10 CM 800W 80+ Gold Certified Semi-Modular ATX Power Supply'),
		),
	),
	'footer' => array(
		'Wave Background Author: <a target="_blank" rel="noopener" href="http://www.webdesignhot.com/free-vector-graphics/blue-water-wave-vector-illustration/">Vector Graphics</a> modified by Gummientchen',
		'Licence: <a target="_blank" rel="noopener" href="https://creativecommons.org/licenses/by/3.0/legalcode">Creative Commons Attribution 3.0</a>'
	),

);

require __DIR__ . '/vendor/autoload.php';

$dwoo = new Dwoo\Core();
$compiler = new \Dwoo\Compiler();
$compiler->setDelimiters("{{", "}}");

$tpl = new Dwoo\Template\File('index.max.html');

$data = new Dwoo\Data();
// Fill it with some data
$data->assign('content', $content);

$content = $dwoo->get($tpl, $data, $compiler);

$content = \Minify_HTML::minify($content);


echo $content;

?>