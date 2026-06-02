<!DOCTYPE html>
<html>
<body>
<?php
$myfile = fopen("searchfrom_malay.xml", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);
?>


</body>
</html>