
<?php
$visitors=0;
$file=file_get_contents("count.txt");
$visitors=$file;
$visitors=$visitors+1;
$newfile=fopen("count.txt","w");
fwrite($newfile,$visitors);
echo "You have".$visitors."visitors.<br>";


?>
