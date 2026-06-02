<!DOCTYPE html>
<html>
<body>
 <?php
$myfile = fopen("searchfrom_malay.xml", "w") or die("Unable to open file!");
$txt = "rumah\n";
fwrite($myfile, $txt);
$txt = "hari\n";
fwrite($myfile, $txt);
fclose($myfile);
?> 


</body>
</html>