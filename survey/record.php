<?php 
$myfile = fopen("testfile.txt", "a") or die("Unable to open file!");
$txt = $_REQUEST['data'];
fwrite($myfile, "\n". "=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=");
fwrite($myfile, "\n". date("Y-m-d h:i:sa", $d));
fwrite($myfile, "\n". json_encode($txt));
fwrite($myfile, "\n". "=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=");
fclose($myfile);
?>