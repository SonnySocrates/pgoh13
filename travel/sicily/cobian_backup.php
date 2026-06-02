<!DOCTYPE html>
<html><head><title>Cobian Backup: Step-by-step instructions on installing and using Cobian Backup</title>
<meta name="viewport" content="width = 980" />
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

<meta name="description" content="Cobian Backup: Step-by-step instructions on installing and using Cobian Backup">

<meta name="keywords" content="free backup program, cobian backup, how to use cobian backup">
<style type="text/css">
h2 {
text-align:left;
font-size: 20px;
color: #FFFFFF;
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
<? include "leftmenu.inc"; ?><br />
<? include "600vertical_imageonly.inc"; ?>

</td>
<td width=800 valign=top>

<table><tr><td bgcolor="beige"><font face="Arial" size="2"><b><font color=midnightblue><a href=http://pgoh13.com/using_manageflitter.php rel="nofollow">Using ManageFlitter</a> | <a href=http://pgoh13.com/using_teamviewer.php rel="nofollow">Using TeamViewer</a> | <a href=http://pgoh13.com/using_partitionwizard.php rel="nofollow">Using Partition Wizard</a> | <a href=http://pgoh13.com/rssreader_installation.php rel="nofollow">Using RssReader</a> | <a href=http://pgoh13.com/using_printedit.php rel="nofollow">Using Print Edit</a>&nbsp;&nbsp;</td></tr></table>

<h1><span style="background-color:midnightblue;">&nbsp;&nbsp;Cobian Backup: Step-by-step instructions&nbsp;&nbsp;</span></h1>

<img src=backup_59644files.gif width=750>
<p><em>Before selling off my old PC, I used Cobian Backup to copy everything from my D: Drive to my external hard disk.  All the 59,644 files (including image, audio and video files) were copied without any problem in hardly 1 hour and 4 minutes (see screenshot above).  I will now be able to copy them to my new PC easily.  By the way please do not try to backup the whole of your C: Drive where the Operating System is.  You could run into difficulties because of the numerous system files there.   - Webmaster</em>
<!-- must put the h2 heading below AFTER the include file above as it's the latest instruction that counts -->
<style type="text/css">
h2 {
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

<table width=750><tr><td colspan=2>
<h2>INTRODUCTION</h2>
<FONT face=tahoma color=black size=3>Any computer user knows the importance of having a second copy of one's personal files.  Ideal places to keep them are in an external hard disk, a USB key, a CD Rom or even in an online storage site (what is popularly known as cloud computing) but certainly not in another folder of the same computer, as it could break down unexpectedly without rhyme or reason.
<br />If you work on several computers (desktop, laptop and notebook) I still think the best place to save your working files to is at Dropbox.com (already mentioned in my "Useful Software" page) but if you are only working on a single computer then you should install Cobian Backup by Luis Cobian (it's free!) to ensure that all your files will not be lost even if your PC should suddenly break down one day.</font></font></font>
</td></tr><tr><td width=375><img src=cobian_defaultoptions.gif width=375></td>
<td width=375><img src=cobian_application.gif width=375></td></tr>
<tr><td colspan=2>

<h2>INSTALLING IT</h2>
<FONT face=tahoma color=black size=3>Before you can install Cobian Backup you have to download the cbSetup10.exe file from its site  <a href=http://www.cobiansoft.com/cobianbackup.htm target=_blank>here</a>  (this article is based on Version 10 Boletus).  You can click on the heading "Download Cobian Backup 10".
<br />After downloading the program from there, install it like any other program (i.e. by accepting the terms and conditions, etc.)   To make things simple don't worry too much about the various options, some of which are quite technical (see screenshots above), but just accept them as they are,  as the default options will not get you into trouble.  As this article is intended for the layman and not for the geek I will only deal with the most important options in order to get you going.  Once you understand how it works it is very easy to go to the other settings.
<br />When you come to "Installation Type" I would suggest you select "Application (Auto-start for everyone)" so you will be sure it is always running anytime you need to use it.

<table width=60 align=left><tr><td><img src=cobian_icon.gif width=60></td></tr></table>
  If you choose this option, all the other options will be greyed out.  Having done this click OK and it will install automatically.  When the installation is completed, a small "mushroom" icon
 will appear in your taskbar (bottom right of your computer window).   When you see this you know that you have correctly installed the program.</font></font></font>
</td></tr><tr><td width=375><img src=cobian_taskname.gif width=375></td>
<td width=375><img src=cobian_source.gif width=375></td></tr>
<tr><td colspan=2>


<h2>USING IT</h2>
<FONT face=tahoma color=black size=3>To start using it, right-click on the "mushroom" icon in the taskbar then click normally on "Open" (i.e. with the left click this time).  Its main window will then open. 
The key word in using Cobian Backup is "Task".  Whether you want to back up just a single file or a folder or why not a whole drive, it is still considered as a single task.  As you can have as many tasks as you want, you are the one to decide how big each "task" is going to be.
<br />Since we have just installed it, it has not a single task displayed yet on the left frame.  So we are going to create our very first task.  From the menu bar at the top click on "Task", then "New task".  A new window will open for you to type in the name of this task.  Let's say you want to do a backup of your folder containing your 21st birthday photos.  Don't complicate matters, just name the task "21st birthday photos" (or some other meaningful title).
<br />After that go to the "Backup type" heading and choose "Incremental".  You can be sure that even if "Incremental" is selected, it will still do a complete backup the very first time (which is our case here).  Actually in this particular case you are not likely to add any more photos but selecting "Incremental" will not make any difference as there just wouldn't be any new backups if there are no new photos, that's all.
<br />In fact, if you had selected "Complete" it will backup every single file again each time it runs the task.  This is quite tedious and really unnecessary and besides, will take up a lot of megabytes of your remaining space.  Now go to the last line of the window and under "Full copies to keep" type 1.  Don't click on OK yet although you might be tempted to do so!

<p><? include "banner_ad_single.inc"; ?></p>

Let's continue with the configuration settings by going from the "General" option to the "Files" option on the left frame.  This is an important part of the process as it is here that you name the folder that you want to be backed up.    You do this by clicking on the first "Add" button (for the "Source"), then browse your computer directory to find where the folder you want to backup is located.   In this example, as can be seen from the second screenshot above, my folder is called "birthday" and it's in my D: drive.  Do the same for the Destination part (in my case my USB key is in the "J" drive - if you are using an external hard disk it will certainly be another letter, maybe "K").

<h2>NO WORRIES FOR DAILY BACKUPS</h2>

The next thing to do is to go to the "Schedule" option on the left frame.  This will open up a new window where under "Schedule type" you can choose whether you want to do the backup just "once" (because you know that no more additions or changes will be made to the files), "daily" (if it is a folder containing your working files that you update often), "weekly", etc.  You can now click on OK.<table width=55 align=left><tr><td><img src=cobian_foldericon.gif width=55></td></tr></table> 
Once you click on OK you will see an icon named "21st birthday photos" on the left side where the tasks are.  So you have created a task.  Do the same for other "tasks".
<br />If you want to make any changes later on, for example, from an "Incremental" to a "Complete" backup, you can do so by double clicking on the task's name or by highlighting the task's name and going to "Task", then  "Edit task".
<br />The same procedure applies if you want to change the time or frequency (eg. from "daily" to "weekly") of your regular backups.  Choose a time when you are likely to be working on your PC as your computer has to be on for the automatic backup to take place "behind the scene".  Make sure your USB key (or external hard disk) is already in the drive before the scheduled time (I prefer to leave it there all the time).  At the appointed time it will just open by itself and start copying any files that have been modified since the previous backup (i.e. if you had selected "Incremental").  In fact this is the best part of the program, for although we all know how important it is to backup our files, we often forget to do so, human memory being not as dependable as that of a machine.

</td></tr><tr><td width=375 valign=top><img src=cobian_schedule.gif width=375></td>
<td width=375><img src=cobian_engine.gif width=375></td></tr>

<tr><td colspan=2>
<FONT face=tahoma color=black size=3>
<br />For certain folders that contain files that you might or might not modify, you might prefer to choose "Manually" instead of "Daily" or "Weekly".  In such a case, whenever you want to do a backup you have to double click on your "task" icon or else highlight the selected task then go to Task - Run selected tasks and Ok. But it's simpler to choose "Run all tasks NOW!"  &nbsp;&nbsp;If you should do this at the end of the day and you know that it is going to take some time you could check "Shutdown your computer" and it will do that once its work is done.
<br />In case you see some empty folders (this can be quite irritating) it is because you have not checked the option "Delete empty directories" earlier.  It is not too late to correct this.  To do this you have to go to the wheelcog icon (or Tools - Options) and click on the "Engine" option then put a tick on "Delete empty directories".  And if the date does not appear in the format that you are familiar with, go to the "Advanced" option in this same window and under "Date/Time format" change it to the format that you prefer i.e. whether dd-mm-yyyy or yyyy-mm-dd.  It is also here (under "Management") that you can protect your interface with a password by putting a check on "Protect the user interface".

<table width=375 align=right><tr><td>
<img src=cobian_4tasks.gif width=375>
</td></tr></table>

<br />That's about it.  From now on, each time you want to backup something new you just have to go to Task - New Task and carry on from there.  In the final screenshot on the right you will see that I have created four "tasks" (21st birthday photos, Personal files, D drive, My Website files), each of which has its own image on the left side.

<br />And if the Cobian Backup icon is missing you can always find it by going to Start - Programs - Cobian Backup - Cobian Backup interface.

<br />I have only touched on the basics to get you started.  There are many other functions too numerous to mention, such as the compressing/encrypting functions (though you don't really need to compress your mp3 files nor your text files) but once you get the above going, you should be able to play around with the other functions according to your needs.

<br />One last thing.  After your first attempt you should go to your USB key or external hard disk to see if the all the folders and files are correctly copied.
<br />(<u>Note:</u> <em>The above article is based on Version 10 of Cobian Backup.</em>)
</font></font></font>
</td></tr></table>
</td></tr></table>
</td></tr></table>

</center>
</body></html>
<?/* http://www.bleepingcomputer.com/tutorials/tutorial127.html */?>