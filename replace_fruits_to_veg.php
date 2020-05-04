<?php 

$html_string = '
<html>
<body>
<p>This article explains about Fruits.</p>
<p>Fruits are good for health.</p>
</body>
</html>
';

echo $html_string;
?>

<?php

$doc = new DOMDocument();
$doc->loadHTML($html_string);
$xpath = new DOMXPath($doc);
$tags = $xpath->query('//p');

foreach ($tags as $tag) {
	$str = trim($tag->nodeValue);
	$tag->nodeValue = str_replace("Fruits", "Vegetables", $str);
    
}
echo $doc->saveHTML();
?>