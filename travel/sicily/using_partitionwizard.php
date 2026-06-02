<!DOCTYPE html>
<html>
<head>
<title>How to use Partition Wizard to create an extra drive</title>
<meta name="viewport" content="width = 980" />
<meta name="description" content="How to use Partition Wizard to create an extra drive" /> 

<link rel="shortcut icon" href="http://pgoh13.com/favicon.ico" rel="nofollow"> 
<!-- without the link rel= below the dropdown menu will not work -->
<link rel="stylesheet" href="http://pgoh13.com/test_menu_files/css3menu1/style.css" type="text/css" />
<!-- without script below the focus will not be on the searchbox -->
<script>
function setFocusToTextBox(){
    document.getElementById("mytext").focus();
}
</script>
<style type="text/css">
h2 {
width:280px;
text-align:left;
font-size: 20px;
color: #FFFF00;
background-color: #000000;
padding-top: 2px;
padding-left: 4px;
font-family: Arial, Georgia, "Times New Roman", Times, serif;
font-weight: normal;
} 
</style>
</head>


<body bgcolor=#cccccc onload='setFocusToTextBox()'>
<center>

<table width="980"><tr>
<td colspan=2>
<?  include "dropdown_menu.inc";  ?>
<?  include "oneclick_away.inc";  ?>
</td></tr><tr>
<td width="180" valign="top">
<? include "leftmenu.inc";  ?>
</td>

<td width="800" valign="top">

<table><tr><td bgcolor="beige"><font face="Arial" size="2"><b><font color=midnightblue><a href=http://pgoh13.com/using_manageflitter.php rel="nofollow">Using ManageFlitter</a> | <a href=http://pgoh13.com/using_teamviewer.php rel="nofollow">Using TeamViewer</a> | <a href=http://pgoh13.com/cobian_backup.php rel="nofollow">Using Cobian Backup</a> | <a href=http://pgoh13.com/rssreader_installation.php rel="nofollow">Using RssReader</a> | <a href=http://pgoh13.com/using_printedit.php rel="nofollow">Using Print Edit</a>&nbsp;&nbsp;</td></tr></table>

<center><h1 style="background-color:midnightblue;color:yellow;font-family:arial;font-size:30px;width:700px;">Using Partition Wizard to create an extra drive</h1></center>

<FONT face=tahoma color=black size=3>If your new PC or your present one has only one main drive (C:) you might want to consider creating another drive to put all your personal files there so that in case your PC breaks down and Drive C: has to be reformatted in order to reinstall Windows (or any other operating system), all your personal files (photos, video clips, songs, Word and Excel files etc.) will not be lost.  You can easily do this with the help of a free software called <a href="http://www.partitionwizard.com" target=_blank>Partition Wizard</a> (or to give its full name MiniTool Partition Wizard).
<br>When you start the program, Partition Wizard will first display the current drives on your computer.  You then highlight the drive you want to divide into two eg. the C: drive.  On the left menu you will find many Operations.  Choose <strong>Split Partition</strong> for our purpose.  It is here where you decide how big each partition is going to be.  In my case the C: Drive has over 900Gb so  I decided to remove 600Gb from there to create a new partition (drive if you like), leaving 300Gb (which is way and above what is sufficient) for Windows and all the other system program files.  Partition Wizard will attribute the name of this new drive automatically eg. if there is already a D: drive containing the factory's image files for Windows, your newly-created drive could be named F: or G: or H: (Drive E: is normally reserved for the DVD/RW drive).  As you can see from the screenshot below my newly-created partition is called Drive F: and contains 616 Gb.  You can download the free Partition Wizard from <a href="http://download.cnet.com/MiniTool-Partition-Wizard-Home-Edition/3000-2094_4-10962200.html" target=_blank>here.</a>

<br><br>
<img src=after_partition.jpg width=700><br><em>From the above you can see that the F Drive has been created.  The 616GB in the F Drive formerly belonged to the C Drive which then had 917GB and now has only 300GB.  (The addition is only to facilitate the explanation.  Informaticians know that the figures do not really add up as your arithmetic does!)</em>
<br>

<h2>Let's do it step by step</h2>

To give confidence to the more timid among you I have created a few screenshots using Partition Wizard on my laptop.  As my laptop is less "powerful" than my desktop, the size of the C: drive (also called partition) is of course smaller than that mentioned earlier.  The image below is what you see when you first launch the "Partition Wizard" programme.  You start by clicking on "Launch application".
<br><img src=partition_wizard1.jpg>
<br><br>This will open a new page which gives the state of the hard disks that are in your laptop (you can see that there are 69.77GB for the C: drive and 69.51GB for the D: drive).  As I am going to split the C: drive I click on it to highlight it.  When I do this a new page will open, giving all kinds of options on the left pane.  Since we are going to create a new drive we will have to choose the "Split Partition" option from there.  You will see that in the highlighted C: drive, 33.34GB have already been used by the Windows Operating System, leaving 36.43GB free.  
<br><img src=partition_wizard2.jpg width=700>
<br><br>
The screenshot below is what you see when you click on "Split Partition".  You don't have to accept the sizes of the two proposed drives that you see (52.05GB for C: and 17.72GB for F: which is the name of the new drive that has been attributed).  It is completely up to you to decide how much data space you want to give to the new drive you are going to create.
<br><img src=partition_wizard3.jpg>
<br><br>
In my case I have decided to give 30GB to the new drive (F:), leaving 40GB for the repartitioned C: drive.  To do this I "seize" the handle at the middle and "pull" it a bit more towards the left.  This will decrease the size of C: and increase the size of the F: drive proportionately.  The result is what you see in the screenshot below:
<br>
<img src=partition_wizard4.jpg>
<br><br>
Having gone through all the above steps, if for some reason you are worried and prefer not to make any changes, all you have to do is to close the programme and no changes will be made.  But if you want to make the changes make sure you click on "Apply" on the top left corner.  Only then will your changes be validated.  You will be asked to restart your computer so that Partition Wizard will be able to repartition the C: drive into two.  It might take some time (nearly 15 minutes in my case) for it to do this.  And that's it!  The screenshot below shows the new state of the hard disks that are available in my laptop.  You might want to compare it with the screenshot when we first started to see the difference.
<br>
<img src=partition_wizard5.jpg>
<br><br>
<em>Note: It might be a good idea to copy the above steps on a piece of paper before you start.</em>
<br>
<?  include "footer_cities728.inc";  ?>
</td></tr></table>

</td></tr></table>

</center>
</body>
</html>
