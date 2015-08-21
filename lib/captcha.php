<?php
    $image=imagecreate(50,30);
    $bgcolor=imagecolorallocate($image,204,255,102);
    imagefill($image,0,0,$bgcolor);
//$black=imagecolorallocate($image,0,0,0);
//imagerectangle($image,0,0,49,29,$black);
$textcolor=imagecolorallocate($image,210 ,100,40);
$code="";
for($i=0;$i<4;$i++){
    $str=rand(0,9);
    $code=$code.$str;
}
session_start();
$_SESSION['code']=$code;
imagestring($image,5,7,8,$code,$textcolor);
header("content-type:image/jpeg");
imagejpeg($image);
imagedestroy($image);

?>