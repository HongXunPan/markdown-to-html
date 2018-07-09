<?php

require_once './vendor/autoload.php';
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.bootcss.com/bootstrap/3.3.1/css/bootstrap.min.css\" />";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"./css/me.css\" />";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"./css/index.css\" />";
//echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"./css/markdown.scss\" />";


$parser = new HyperDown\Parser;
$parser->_commonWhiteList .= '|center';
$md = file_get_contents('../resume/README.md');

$html = $parser->makeHtml($md);
echo '<div class="main">';
echo $html;
echo '</div>';
