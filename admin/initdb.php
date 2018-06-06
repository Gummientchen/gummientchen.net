<?php

$content = array(
	'header' => array(
		'title' => "Gummientchen",
		'description' => "Gummientchen also play games",
		'themeColor' => "#ffffff",
		'maskIconColor' => "#5bbad5",
	),
	'content' => array(
		'content' => "Gummientchen, they also play games.",
		'backgroundUrl' => "images/logo.svg",
		'specsLink' => "https://pcpartpicker.com/user/Nycxin/saved/ryrVnQ",
	),
	'cards' => array(
		array(
			'section' => 'Gamertags',
			'title' => 'Steam',
			'tag' => 'Gummientchen',
			'text' => 'Praise Lord Gaben!',
			'image' => 'images/steam.svg',
			'link' => array('text' => 'Steam Profile', 'url' => 'http://steamcommunity.com/id/Gummientchen/')
		),
		array(
			'section' => 'Gamertags',
			'title' => 'Origin',
			'tag' => 'Gummientchen_ch',
			'text' => 'They will spy on you! :P',
			'image' => 'images/origin.svg',
		),
		array(
			'section' => 'Gamertags',
			'title' => 'Uplay',
			'tag' => 'Gummientchen_',
			'text' => 'These games are never finished! ;)',
			'image' => 'images/uplay.svg',
		),
		array(
			'section' => 'Gamertags',
			'title' => 'Xbox Live',
			'tag' => 'Gummientchen',
			'text' => 'One Xbox One X Box',
			'image' => 'images/xbox.svg',
		),
		array(
			'section' => 'Gamertags',
			'title' => 'Battle.net',
			'tag' => 'Gummientchen',
			'text' => 'Leeroy Jenkins!!',
			'image' => 'images/battlenet.svg',
		),
		array(
			'section' => 'Gamertags',
			'title' => 'Nintendo',
			'tag' => 'Gummientchen_ch',
			'text' => '0619 - 8903 - 4604',
			'image' => 'images/nintendo.svg',
		),
		array(
			'section' => 'Social',
			'title' => 'YouTube',
			'tag' => 'Gummientchen_ch',
			'text' => 'DRAMA!!!',
			'image' => 'images/youtube.svg',
		),
	),
	// 'socialmedia' => array(
	// 	array(
	// 		'title' => 'YouTube',
	// 		'name' => 'Gummientchen',
	// 		'text' => 'So much drama...',
	// 		'image' => 'images/youtube.svg',
	// 		'link' => array(
	// 			'text' => 'Channel',
	// 			'url' => 'https://www.youtube.com/user/steff999',
	// 		),
	// 	),
	// ),
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
	'footer' => array(
		'Wave Background Author: <a target="_blank" rel="noopener" href="http://www.webdesignhot.com/free-vector-graphics/blue-water-wave-vector-illustration/">Vector Graphics</a> modified by Gummientchen',
		'Licence: <a target="_blank" rel="noopener" href="https://creativecommons.org/licenses/by/3.0/legalcode">Creative Commons Attribution 3.0</a>'
	),

);

require __DIR__ . '/../vendor/autoload.php';

use \RedBeanPHP\R as R;
R::setup( 'sqlite:data.db' );

R::nuke();

foreach($content['header'] as $key => $value){
	$header = R::dispense( 'header' );

	$header->name = $key;
	$header->value = $value;
	R::store( $header );
}

foreach($content['footer'] as $value){
	$footer = R::dispense( 'footer' );
	$footer->value = $value;
	R::store( $footer );
}

foreach($content['content'] as $key => $value){
	$c = R::dispense( 'content' );
	$c->name = $key;
	$c->value = $value;
	R::store( $c );
}

foreach($content['specs'] as $spec){
	$s = R::dispense('spec');
	$s->part = $spec[0];
	$s->text = $spec[1];
	R::store($s);
}

foreach($content['cards'] as $card){
	$c = R::dispense( 'card' );

	$section = R::findOne('section', 'name = ?', [$card['section']]);

	if(is_null($section)){
		$section = R::dispense('section');
		$section->name = $card['section'];
		$id = R::store($section);

		$section = R::load( 'section', $id );
	}

	$c->section = $section;
	$c->title = $card['title'];
	$c->tag = $card['tag'];
	$c->text = $card['text'];

	// Get Image Content
	$image = file_get_contents("../".$card['image']);
	$c->image = $image;

	$c->title = $card['title'];
	$c->linktext = isset($card['link']['text']) ? $card['link']['text'] : null;
	$c->linkurl = isset($card['link']['url']) ? $card['link']['url'] : null;
	R::store( $c );
}



echo "meep";

?>