<?php

require __DIR__ . '/vendor/autoload.php';
use \RedBeanPHP\R as R;
R::setup( 'sqlite:admin/data.db' );

function getHeader(){
	$headers = R::findAll('header');

	$h = array();
	foreach($headers as $header){
		$h[$header->name] = $header->value; 
	}

	return $h;
}

function getContent(){
	$contents = R::findAll('content');

	$c = array();
	foreach($contents as $content){
		$c[$content->name] = $content->value; 
	}

	return $c;
}

function getSpecs(){
	$specs = R::findAll('spec');

	return $specs;
}

function getFooters(){
	$footers = R::findAll('footer');

	return $footers;
}


function getSections(){
	$sections = R::findAll('section');

	$s = array();
	foreach($sections as $section){
		$cards = $section->ownCardList;

		$c = array();

		foreach($cards as $card){
			$c[] = array(
				'title' => $card->title,
				'tag' => $card->tag,
				'text' => $card->text,
				'image' => $card->image,
				'linktext' => $card->linktext,
				'linkurl' => $card->linkurl,
			);
		}

		$s[] = array(
			'title' => $section->name,
			'cards' => $c
		);
	}

	return $s;
}


$dwoo = new Dwoo\Core();
$compiler = new \Dwoo\Compiler();
$compiler->setDelimiters("{{", "}}");

$tpl = new Dwoo\Template\File('index.max.html');

$data = new Dwoo\Data();

$data->assign('header', getHeader());
$data->assign('content', getContent());
$data->assign('sections', getSections());
$data->assign('specs', getSpecs());
$data->assign('footers', getFooters());

$content = $dwoo->get($tpl, $data, $compiler);

$content = \Minify_HTML::minify($content);

file_put_contents("index.html", $content);

echo "updated index.html";

?>