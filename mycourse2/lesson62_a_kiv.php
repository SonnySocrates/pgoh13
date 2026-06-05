<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width = 980" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
   <meta name="description"
 content="Lesson 62 Presenting Oneself (the answers) from A basic course in Bahasa Malaysia (also known as Bahasa Melayu or the Malay language)">
   <meta name="keywords" 
content="bahasa, Malay language, Malaysian language, langue Malaisienne, bahasa Melayu, bahasa Malaysia, national language of Malaysia, lessons, course, tutorial, cours en malais"> 
<TITLE>Lesson 62 Presenting Oneself (the answers) from A basic course in Bahasa Malaysia (also known as Bahasa Melayu or the Malay language) </TITLE>
<style>
body:after {font-style:italic;border:0;content:"Copyrighted.  Not to be reproduced without permission from pgoh13";}
.blue {color:blue}
.red {color:red}
.black {color:black}
.yellow {color:yellow}
.green {color:green}
.white {color:white}
</style>
<script type="text/javascript">
function mailto(domain,user) 
{ 
document.location.href = "mailto:" + user + "@" + domain;
}
</script>
<FONT face=tahoma size=3>
<style type="text/css">
.typeface {font-family:arial;font-weight:60;}
</style>

<style type="text/css">
h1 {	font-family:"Arial";
	font-size: 30px;
	color:yellow;
	text-align:center;	
   }
h2 {	font-family:"Arial";
	font-size: 24px;
	color:yellow;
	text-align:center;	
   }
</style>

</head>

<body bgcolor="#cccccc" onload='setFocusToTextBox()'>
<center>

<table width=1000><tr>
<td colspan=2><?  include "dropdown_menu.inc";  ?></td>
</tr><tr>
<td width=180 valign=top>
<? include "leftmenu_really_noads.inc"; ?>
</td>
<td width=820 valign=top>


<?
include "copyright_noads.inc" 
?>

<h1 style="background-color:midnightblue;padding-left:10px;">Lesson 62  Telling all about yourself in Malay</h1>
<FONT face=tahoma color=black size=3>NOTE:  After having taken so much trouble to fill in the details I hope you will be able to print out this page for easy reference in future.  This page will enable you to carry out a simple but meaningful conversation in Malay.<br /><br>

<?php
$name=$_POST['name'];
echo ("<span class=typeface>Nama saya $name.<br>\n\n");
$age=$_POST['age'];
if ($age>"6" and $age<"25")
{echo ("Umur saya $age tahun.  Saya masih muda.<br>\n\n");
}
elseif ($age >= "65")
{echo ("Umur saya $age tahun.  Saya sudah tua.<br>\n\n");
}
else {
echo ("Umur saya $age tahun.<br>\n\n");
}
$sex=$_POST['sex'];
echo ("Saya $sex.<br>\n\n");
$race=$_POST['race'];
echo ("Saya orang $race.<br>\n\n");
$status=$_POST['status'];
if ($sex=="lelaki"&&$status=="mati")
{
echo ("Saya pernah berkahwin tetapi isteri saya sudah meninggal dunia.<br>\n\n");
}
elseif ($sex=="perempuan"&&$status=="mati")
{
echo ("Saya pernah berkahwin tetapi suami saya sudah meninggal dunia.<br>\n\n");
}
elseif ($status=="cerai")
{
echo ("Saya pernah berkahwin tetapi sudah bercerai.<br>\n\n");
}
else
{
echo ("Saya $status kahwin.<br>\n\n");
}
$spouse_name=$_POST['spouse_name'];
if ($sex=="lelaki"&&$status=="sudah")
{
echo ("Nama isteri saya $spouse_name.<br>\n\n");
}
else
if ($sex=="perempuan"&&$status=="sudah")
{
echo ("Nama suami saya $spouse_name.<br>\n\n");
}

$spouse_age=$_POST['spouse_age'];
if ($sex=="lelaki"&&$status=="sudah"&&$spouse_age > $age)
{
echo ("Isteri saya lebih tua daripada saya.  Umurnya $spouse_age tahun.<br>\n\n");
}
elseif
($sex=="lelaki"&&$status=="sudah"&&$spouse_age < $age)
{
echo ("Saya lebih tua daripada isteri saya.    Umurnya $spouse_age tahun.<br>\n\n");
}

elseif
($sex=="lelaki"&&$status=="sudah"&&$spouse_age == $age)
{
echo ("Umur saya sama dengan umur isteri saya.<br>\n\n");
}


if ($sex=="perempuan"&&$status=="sudah"&&$spouse_age > $age)
{
echo ("Suami saya lebih tua daripada saya.  Umurnya $spouse_age tahun.<br>\n\n");
}
elseif
($sex=="perempuan"&&$status=="sudah"&&$spouse_age < $age)
{
echo ("Saya lebih tua daripada suami saya.  Umurnya $spouse_age tahun.<br>\n\n");
}

elseif
($sex=="perempuan"&&$status=="sudah"&&$spouse_age == $age)
{
echo ("Umur saya sama dengan umur suami saya.<br>\n\n");
}

$kids=$_POST['kids'];
$kid1=$_POST['kid1'];
$kid2=$_POST['kid2'];
$kid3=$_POST['kid3'];
$kid4=$_POST['kid4'];
$kid5=$_POST['kid5'];
if ($kids=="1")
{
echo ("Saya ada seorang anak sahaja.  Namanya $kid1<br>\n\n");
}
elseif ($kids=="0")
{
echo ("Saya tidak ada anak.<br>\n\n");
}
elseif ($kids=="2")
{
echo ("Saya ada dua orang anak.  Nama mereka $kid1 dan $kid2.<br>\n\n");
}
elseif ($kids=="3")
{
echo ("Saya ada tiga orang anak.  Nama mereka $kid1, $kid2 dan $kid3.<br>\n\n");
}
elseif ($kids=="4")
{
echo ("Saya ada empat orang anak.  Nama mereka $kid1, $kid2, $kid3  dan $kid4.<br>\n\n");
}
elseif ($kids=="5")
{
echo ("Saya ada lima orang anak.  Nama mereka $kid1, $kid2, $kid3, $kid4  dan $kid5.<br>\n\n");
}
else {
echo ("Saya ada $kids orang anak.<br>\n\n");
}
$job=$_POST['job'];
$company=$_POST['company'];
if ($job=="suri rumah tangga")
{
echo ("Saya suri rumah tangga.<br>\n\n");
}

elseif ($job=="pesara")
{
echo ("Saya tidak bekerja lagi.  Saya pesara.<br>\n\n");
}

elseif ($job=="penuntut")
{
echo ("Saya  penuntut di $school.<br>\n\n");
}
elseif ($job=="menganggur")
{
echo ("Saya tidak ada pekerjaan.  Saya menganggur.<br>\n\n");
}
else {
echo ("Saya bekerja sebagai $job di $company.<br>\n\n");
}

$city=$_POST['city'];
$address=$_POST['address'];
echo ("Saya tinggal di $city.   Ini alamat rumah saya: $address.  <br>\n\n");
$since=$_POST['since'];
echo ("Saya tinggal di tempat ini sejak  tahun $since.<br>\n\n");

$hsephone=$_POST['hsephone'];
if ($hsephone=="tiada")
{
echo ("Saya tidak ada telefon di rumah.<br>\n\n");
}
else {
echo ("Ini nombor telefon rumah saya:  $hsephone<br>\n\n");
}
	
$offphone=$_POST['offphone'];
if ($offphone=="tiada")
{
echo ("Saya tidak ada telefon di pejabat.<br>\n\n");
}
else {
echo ("Ini nombor telefon pejabat saya:  $offphone<br>\n\n");
}

$handphone=$_POST['handphone'];

if ($handphone=="tiada")
{
echo ("Saya tidak ada telefon bimbit.<br>\n\n");
}
else {
echo ("Ini nombor telefon bimbit saya:  $handphone<br>\n\n");
}

if ($kereta=="ada")
{
echo ("Saya ada kereta.  Warna kereta saya $warna.<br>\n\n");
}
else
if ($kereta=="tiada")
{
echo ("Saya tidak ada kereta.<br>\n\n");
}
$dinner=$_POST['dinner'];
echo ("Saya makan malam pada pukul $dinner,  biasanya.<br>\n\n");
$smoke=$_POST['smoke'];
if ($smoke=="hisap")
{
echo ("Saya hisap rokok.<br>\n\n");
}
else
if ($smoke=="tidak")
{
echo ("Saya tidak hisap rokok.<br>\n\n");
}


$eat=$_POST['eat'];
$drink=$_POST['drink'];
echo ("Saya suka makan $eat dan minum $drink.<br>\n\n");
$adj1=$_POST['adj1'];
$adj2=$_POST['adj2'];
echo ("Saya $adj1 dan $adj2.<br>\n\n");
$bedtime=$_POST['bedtime'];
echo ("Saya masuk tidur pada pukul $bedtime,  biasanya.<br>\n\n");
?>

</td></tr></table>

</center>
</body>
</html>