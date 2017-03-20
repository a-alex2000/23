<?php
header("Content-type: image/png");
$image  = imagecreatefrompng("images/button1.png");
if ( isset( $_GET['question'] ) ) $test = htmlspecialchars( $_GET['question'] ); else {echo "Error 404";die();}
if ( isset( $_GET['username'] ) ) $username = urldecode( $_GET['username'] ); else {echo "Error 404";die();}
$text = $_GET['username']." успешно здал тест 
".$_GET['question'];
$colors['white']        = imagecolorallocate ($image,   255,    255,    255);
$colors['black']        = imagecolorallocate ($image,   0,      0,      0);
$colors['red']          = imagecolorallocate ($image,   255,    0,      0);
 
$font = __DIR__."/fonts/a_Albionic.ttf";
 
imagettftext($image, 21, 0, 90, 170, $colors['black'], $font, $text);
 
imagepng($image); # выводим картинку
 
imagedestroy($image);
?>