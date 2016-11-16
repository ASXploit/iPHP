<?php
/* Created by Xploit */

# Store Users IP Address;
$target=$_SERVER["REMOTE_ADDR"];

# Store Filename In a Variable;
$document="Addresses.txt";

# Open our File;
$openDoc=fopen($document, "a");

# Write to our File;
fwrite($openDoc, $target);

# Close our File;
fclose($openDoc);
?>
