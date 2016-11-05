<?php
$address=$_SERVER['REMOTE_ADDR'];
$logs="logx.txt";
$append=fopen($logs, "a");
fwrite($logs, $address);
fclose($logs);
?>
