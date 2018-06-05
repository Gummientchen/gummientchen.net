<?

require __DIR__ . '/vendor/autoload.php';

$dwoo = new Dwoo\Core();
$tpl = new Dwoo\Template\File('index.max.tpl');

$data = new Dwoo\Data();
// Fill it with some data
$data->assign('foo', 'BAR');
$data->assign('bar', 'BAZ');

$content = $dwoo->get($tpl, $data);
$cssMain = file_get_contents('css/main.css');

$content = str_replace("%mainCSS%", $cssMain, $content);
$content = \Minify_HTML::minify($content);


echo $content;

?>