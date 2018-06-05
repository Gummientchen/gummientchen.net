<?

require_once("min/lib/Minify/HTML.php");

$content = file_get_contents('index.max.html');
$cssMain = file_get_contents('css/main.css');

$content = str_replace("%mainCSS%", $cssMain, $content);
$content = \Minify_HTML::minify($content);


echo $content;

?>