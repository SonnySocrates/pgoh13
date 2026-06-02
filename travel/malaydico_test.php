<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("searchfrom_malay.xml", "r") or die("Unable to open file!");
echo fread($myfile,filesize("searchfrom_malay.xml"));
fclose($myfile);
?>

</body>
</html>