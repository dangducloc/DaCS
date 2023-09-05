<?php 
require_once('../simple_html_dom.php');
$html = file_get_html('https://daotao.vku.udn.vn/');
foreach($html->find('.region a img') as $element) {
    echo $element;//->src, "n";
}
?>