<?php
require __DIR__ . '/vendor/autoload.php';

$dwoo = new Dwoo\Core();
$compiler = new \Dwoo\Compiler();
$compiler->setDelimiters("{{", "}}");

$tpl = new Dwoo\Template\File('index.max.html');

$data = new Dwoo\Data();
// Fill it with some data
$data->assign('foo', 'BAR');
$data->assign('bar', 'BAZ');

$content = $dwoo->get($tpl, $data, $compiler);

$content = \Minify_HTML::minify($content);


echo $content;

?>