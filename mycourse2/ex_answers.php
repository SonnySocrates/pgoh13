<HTML><head><title>Answers to exercise</title></head>

<body bgcolor=peachpuff>
<b><u><font color=red>ANSWERS:</u></font>

<font color="black" size=2><br>

<?
$yesterday= strftime ("%A",time()-86400);
if ($yesterday=="Sunday") $yesterday="hari Ahad";
if ($yesterday=="Monday") $yesterday="hari Isnin";
if ($yesterday=="Tuesday") $yesterday="hari Selasa";
if ($yesterday=="Wednesday") $yesterday="hari Rabu";
if ($yesterday=="Thursday") $yesterday="hari Khamis";
if ($yesterday=="Friday") $yesterday="hari Jumaat";
if ($yesterday=="Saturday") $yesterday="hari Sabtu";
echo "<B>Kelmarin ".$yesterday;
?>
<br>
<?
$tomorrow= strftime ("%A",time()+86400);
if ($tomorrow=="Sunday") $tomorrow="hari Ahad";
if ($tomorrow=="Monday") $tomorrow="hari Isnin";
if ($tomorrow=="Tuesday") $tomorrow="hari Selasa";
if ($tomorrow=="Wednesday") $tomorrow="hari Rabu";
if ($tomorrow=="Thursday") $tomorrow="hari Khamis";
if ($tomorrow=="Friday") $tomorrow="hari Jumaat";
if ($tomorrow=="Saturday") $tomorrow="hari Sabtu";
echo "Esok ".$tomorrow;
?>
<br>
<?
$lusa= strftime ("%A",time()+172800);
if ($lusa=="Sunday") $lusa="hari Ahad";
if ($lusa=="Monday") $lusa="hari Isnin";
if ($lusa=="Tuesday") $lusa="hari Selasa";
if ($lusa=="Wednesday") $lusa="hari Rabu";
if ($lusa=="Thursday") $lusa="hari Khamis";
if ($lusa=="Friday") $lusa="hari Jumaat";
if ($lusa=="Saturday") $lusa="hari Sabtu";
echo "Lusa ".$lusa;
?>
</td></tr></table>
</body></table>