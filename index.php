<?php
$my_img = imagecreate(15, 15);
$hexcol = htmlspecialchars($_GET['hexcol']);
$r = hexdec(substr($hexcol, 0, 2));
$g = hexdec(substr($hexcol, 2, 2));
$b = hexdec(substr($hexcol, 4, 2));
$background = imagecolorallocate($my_img, $r, $g, $b);
header("Content-type: image/png");
imagepng($my_img);
imagecolordeallocate($my_img, $background);
imagedestroy($my_img);
die();