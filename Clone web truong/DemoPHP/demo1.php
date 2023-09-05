<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vnexpress Clone</title>
</head>
<body>
<?php 
require_once'../simple_html_dom.php';
$html = file_get_html('https://vnexpress.net');
//echo $html;
$li = $html->find('div[id="automation_TV0"]',0);
//echo $li;
$info = $li->find('article[class="item-news item-news-common"]');
$a=  $html->find('img[class="lazy"]');
for( $i = 0 ; $i<sizeof($a);$i++){
    // $pic =  $info[$i]->find('a[class="thumb thumb-5x3"]',0);
   echo $a[$i];
   // echo "<br>";
}

?>
</body>
</html>


