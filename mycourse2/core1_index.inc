<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"> <!-- The majority of the world uses UTF-8 for just about everything nowadays -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<script>
function setFocusToTextBox(){
    document.getElementById("mytext").focus();
}
</script>

<!-- without the js code below the dropdown menu won't work -->
<script>
$(document).ready( function() {
$('.dropdown-toggle').dropdown();
});
</script>

<!-- Below css style is for aligning the 8 blocks with the same height -->
<style>
.sameheight {
    margin-bottom: -99999px;
    padding-bottom: 99999px;
    background-color:#efefef;
}
#equalheight {
    overflow: hidden; 
}

</style>

<!-- Below script is for showing part of longer text Source: cssnewbiedotcom/showhide-content-css-javascript/ -->
<script language="javascript" type="text/javascript">
function showHide(shID) {
   if (document.getElementById(shID)) {
      if (document.getElementById(shID+'-show').style.display != 'none') {
         document.getElementById(shID+'-show').style.display = 'none';
         document.getElementById(shID).style.display = 'block';
      }
      else {
         document.getElementById(shID+'-show').style.display = 'inline';
         document.getElementById(shID).style.display = 'none';
      }
   }
}
</script>

<style>
.more {
	display: none;
	border-top: 1px solid #666;
	border-bottom: 1px solid #666; }
a.showLink, a.hideLink {
	text-decoration: none;
	color: #36f;
	padding-left: 8px;
	background: transparent url('down.gif') no-repeat left; }
a.hideLink {
	background: transparent url('up.gif') no-repeat left; }
a.showLink:hover, a.hideLink:hover {
	border-bottom: 1px dotted #36f; }
</style>

<link href="http://greatday.com/nmot/css/motivatorTFTD.css" rel="stylesheet" type="text/css">
    
<title>The World At Your Fingertips: a website for song lovers, news followers, cooking enthusiasts, cinema fans, language students, travellers and information seekers</title>
<meta name="description" content="The World At Your Fingertips is a website like no other. Essentially meant for song lovers, news followers, cooking enthusiasts, cinema fans, language students, travellers and information seekers, it strives to make your surfing life easier by attempting to harness all internet resources together in one place for easy access." />
</head>


<body onload='setFocusToTextBox()' style="background-color:#cccccc">

<nav class="navbar navbar-inverse"> <!-- adding navbar_fixed_top makes nav bar fixed but will screw up your CNN line as have to give margin top height -->

  <div class="container-fluid"> <!-- this part stretches width to fill whole monitor -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
<span style="color:white;font-size:10px">MENU</span>                      
      </button>
      <a class="navbar-brand" style="background-color:red;color:black;" href="http://pgoh13.com">World Fingertips&nbsp;<span class="glyphicon glyphicon-home glyphicon-large" aria-hidden="true"></span></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">

            <li><a href="http://pgoh13.com"><span style="font-size:18px !important;color:yellow">Home</span></a></li>
	    <li><a href="francais/"><span style="font-size:18px !important;color:yellow">En fran&ccedil;ais</span></a></li>
            
 <li class="dropdown">        
   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span style="font-size:18px !important;color:yellow">Travel</span><span class="caret" style="color:white;border-width: 6px;"></span></a>
                <ul class="dropdown-menu">
          <li><a href="bruges.html" rel="nofollow">Bruges</a></li>
                <li><a href="krakow.php" rel="nofollow">Krakow</a></li>
		<li><a href="riga.php" rel="nofollow">Riga</a></li>
		<li><a href="berlin.php" rel="nofollow">Berlin</a></li>
		<li><a href="milan.php" rel="nofollow">Milan</a></li>	
		<li><a href="lisbon.php" rel="nofollow">Lisbon</a></li>
			<li><a href="dublin.php" rel="nofollow">Dublin</a></li>
			<li><a href="sicily" rel="nofollow">Sicily</a></li>
			<li><a href="budapest.php" rel="nofollow">Budapest</a></li>
			<li><a href="paris_page1.php" rel="nofollow">Paris</a></li>
			<li><a href="rome.php" rel="nofollow">Rome</a></li>
			<li><a href="london.php" rel="nofollow">London</a></li>
			<li><a href="barcelona.php" rel="nofollow">Barcelona</a></li>
			<li><a href="madrid/" rel="nofollow">Madrid</a></li>
			<li><a href="venice.php" rel="nofollow">Venice</a></li>
			<li><a href="prague.php" rel="nofollow">Prague</a></li>
			<li><a href="amsterdam.php" rel="nofollow">Amsterdam</a></li>
			<li><a href="athens.php" rel="nofollow">Athens</a></li>
			<li><a href="copenhagen.php" rel="nofollow">Copenhagen</a></li>
			<li><a href="geneva.php" rel="nofollow">Geneva</a></li>
			<li><a href="andalucia.php" rel="nofollow">Andalucia</a></li>
			<li><a href="french_riviera.php" rel="nofollow">French Riviera</a></li>
<li><a href="china.php" rel="nofollow">China</a></li>
<li><a href="Malaysia_new.php" rel="nofollow">Malaysia</a></li>
<li><a href="morocco.php" rel="nofollow">Morocco</a></li>
</ul>

            
 <li class="dropdown">        
   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span style="font-size:18px !important;color:yellow">Songs</span><span class="caret" style="color:white;border-width: 6px;"></span></a>
                <ul class="dropdown-menu">
		<li><a href="top12.php" rel="nofollow" target="_blank">This week's Top 12</a></li>
		<li><a href="softsongs/" rel="nofollow" target="_blank">40 relaxing songs non-stop</a></li>
		<li><a href="mobile/" rel="nofollow" target="_blank">English Songs and Their Lyrics</a></li>
<li><a href="m.frenchsongsandlyrics.php" rel="nofollow" title="Spanish songs" target="_blank">Popular French songs</a></li>
		<li><a href="malaysongs/" rel="nofollow" target="_blank">Malay Songs</a></li>
		<li><a href="spanishsongs/" rel="nofollow" target="_blank">Spanish Songs</a></li>
		<li><a href="chinese_songs.php" rel="nofollow" target="_blank">Chinese songs</a></li>
		<li><a href="deezer/" rel="nofollow" target="_blank">Deezer playlists</a></li>
		<li><a href="oldsongs_newsingers.php" rel="nofollow" target="_blank">Old songs, new singers</a></li>
		<li><a href="songs/" rel="nofollow" target="_blank">Evergreens/Oldies</a></li>
<li><a href="blueberry_hill.html" rel="nofollow" target="_blank">Blueberry Hill</a></li>      	
</ul>


 <li class="dropdown">        
   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span style="font-size:18px !important;color:yellow">Info</span><span class="caret" style="color:white;border-width: 6px;"></span></a>
                <ul class="dropdown-menu">
	<li class="active"><a href="../new/calendar2018.html" rel="nofollow">2018 Calendar/Events</a></li>
	<li><a href="converter_xe.php" rel="nofollow">Your money converter</a></li>
	<li><a href="http://www.web-l.com/country-codes/" rel="nofollow" target="_blank">Country codes for internet</a></li>
	<li><a href="http://onlineconversion.com/" rel="nofollow" target="_blank">Conversions (length, weight, volume, temperature)</a></li>
	<li><a href="http://wwp.greenwichmeantime.com/time-zone/usa/eastern-time/convert/index.htm" rel="nofollow" target="_blank">Time Conversion:  EST to GMT</a></li>
	<li><a href="http://www.urbanrail.net/" rel="nofollow" target="_blank">World subways/metro</a></li>		
	<li><a href="http://www.infobel.com/world/default.asp" rel="nofollow" target="_blank">World telephone directories</a></li>
	<li><a href="http://embassyinformation.com/" rel="nofollow" target="_blank">World Embassies</a></li>
	<li><a href="http://www.journeymart.com/tools/world-holidays/default.aspx" rel="nofollow" target="_blank">World public holidays</a></li>
	<li><a href="http://www.seat61.com/" rel="nofollow" target="_blank">World train time-tables</a></li>
	<li><a href="http://www.timeanddate.com/worldclock/dialing.html" rel="nofollow" target="_blank">International Dialling Codes</a></li>
	<li><a href="http://www.timeanddate.com/date/weekday.html" rel="nofollow" target="_blank">What day is this date?</a></li>		</ul>

 <li class="dropdown">        
   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span style="font-size:18px !important;color:yellow">Internet</span><span class="caret" style="color:white;border-width: 6px;"></span></a>
                <ul class="dropdown-menu">
		<li class="active"><a href="control_button.php" rel="nofollow">The Ctrl button</a></li>
		<li><a href="software_progs1.php" rel="nofollow">Useful programs</a></li>
		<li><a href="internet_tips1.php" rel="nofollow">Internet/Computer tips</a></li>
		<li><a href="using_hola.php" rel="nofollow">Using Hola! to access blocked sites</a></li>
		<li><a href="using_printedit.php" rel="nofollow">Using Print Edit</a></li>
		<li><a href="using_spybot.php" rel="nofollow">Using Spybot</a></li>
		<li><a href="using_pixlr_masked.php" rel="nofollow">Using PIXLR</a></li>
		<li><a href="using_manageflitter.php" rel="nofollow">Using ManageFlitter</a></li>
		<li><a href="using_teamviewer.php" rel="nofollow">Using TeamViewer</a></li>
		<li><a href="using_partitionwizard.php" rel="nofollow">Using Partition Wizard</a></li>
		<li><a href="cobian_backup.php" rel="nofollow">Using Cobian Backup</a></li>
		<li><a href="rssreader_installation.php" rel="nofollow">Using the RssReader</a></li>
		<li><a href="copy_youtube.php" rel="nofollow">Tips for YouTube</a></li>
		<li><a href="spam_list.php" rel="nofollow">Email spams and scams</a></li>
		<li><a href="special_characters.php" rel="nofollow">Special characters</a></li>
		<li><a href="country_domains.php" rel="nofollow">Country domain initials</a></li>
	</ul>

<li class="dropdown">        
   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span style="font-size:18px !important;color:yellow">Languages</span><span class="caret" style="color:white;border-width: 6px;"></span></a>
<ul class="dropdown-menu">
		<li class="active"><a href="mycourse/" rel="nofollow" target=_blank>pgoh13's 64-lessons Malay language course</a></li>
		<li><a href="http://dictionary.pgoh13.com/" rel="nofollow" target=_blank>English-Malay dictionary by pgoh13</a></li>
		<li><a href="http://www.collinsdictionary.com/dictionary/english-french" rel="nofollow" target=_blank>French-English-French dictionary</a></li>

		<li><a href="http://www.collinsdictionary.com/dictionary/english-spanish" rel="nofollow" target=_blank>Spanish-English-Spanish dictionary</a></li>
		<li><a href="http://www.collinsdictionary.com/dictionary/english-german" rel="nofollow" target=_blank>German-English-German dictionary</a></li>
		<li><a href="http://www.collinsdictionary.com/dictionary/english-italian" rel="nofollow" target=_blank>Italian-English-Italian dictionary</a></li>
		<li><a href=http://www.mdbg.net/chindict/chindict.php rel="nofollow" target=_blank>English to Chinese dictionary</a></li>
		<li><a href=http://www.linguee.com/ rel="nofollow" target=_blank>Linguee French, Spanish, German dictionary for phrases</a></li>
		<li><a href=http://ukdataexplorer.com/european-translator/ rel="nofollow" target=_blank>European Word Translator by James Trimber</a></li>
		<li><a href=http://www.lingvozone.com/ rel="nofollow" target=_blank>Multi-lingual dictionary with pronunciation</a></li>
		
		<li><a href="http://pinyin.pgoh13.com/chinese_introduction.php" rel="nofollow">Chinese Pinyin Lessons</a></li>
		
		<li><a href="http://pinyin.pgoh13.com/chinese_characters.php" rel="nofollow">Basic Chinese Characters</a></li>
<li><a href="http://www.word2word.com/course.html" rel="nofollow" target="_blank">All World Languages</a></li>

</ul>

<li class="dropdown">        
   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span style="font-size:18px !important;color:yellow">Miscellaneous</span><span class="caret" style="color:white;border-width: 6px;"></span></a>
<ul class="dropdown-menu">
		<li class="active"><a href="recipes_list.php" rel="nofollow">Cooking Recipes</a></li>
		<li><a href="justforlaughs.php" rel="nofollow">Just for laughs</a></li>
		<li><a href="brainteasers.php" rel="nofollow">Brainteasers</a></li>
		<li><a href="quotations.php" rel="nofollow">Inspiring quotations</a></li>
		<li><a href="pensioners_page.php" rel="nofollow">Page for senior citizens</a></li>
		<li><a href="ecard_quotes.php" rel="nofollow">Motivational e-cards</a></li>
		<li><a href="health_problems.php" rel="nofollow">Layman's guide to diseases</a></li>
</ul>






<li class="dropdown">        
   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span style="font-size:18px !important;color:yellow">Sports</span><span class="caret" style="color:white;border-width: 6px;"></span></a>
<ul class="dropdown-menu">
		<li class="active"><a href="http://www.fifa.com" rel="nofollow" target="_blank">Football (FIFA)</a></li>
		<li><a href="20kms.php" rel="nofollow" target="_blank">Marathons</a></li>
		<li><a href="http://www.rugbyworldcup.com/" rel="nofollow" target="_blank">Rugby</a></li>
		<li><a href="http://www.bwfbadminton.org/" rel="nofollow" target="_blank">Badminton (BWF)</a></li>
		<li><a href="http://www.fiba.com/" rel="nofollow" target="_blank">Basketball (FIBA)</a></li>
		<li><a href="http://www.itftennis.com/home.aspx" rel="nofollow" target="_blank">Tennis (ITF)</a></li>
		<li><a href="http://worldwide.golf/" rel="nofollow" target="_blank">Golf (Worldwide Golf)</a></li>
		<li><a href="http://www.iaaf.org/home" rel="nofollow" target="_blank">Athletics (IAAF)</a></li>
		<li><a href="http://www.fina.org/" rel="nofollow" target="_blank">Swimming (FINA)</a></li>
		<li><a href="http://www.nfl.com/" rel="nofollow" target="_blank">American Football (NFL)</a></li>
		<li><a href="https://www.icc-cricket.com" rel="nofollow" target="_blank">Cricket (ICC)</a></li>
</ul>







<li><a href="about_pgoh13.php" target="_blank"><span style="font-size:18px !important;color:yellow">About</span></a></li>
<li><a href="http://www.emailmeform.com/builder/form/Vr4xzDPmb4W" target="_blank"><span style="font-size:18px !important;color:yellow">Contact</span></a></li>

</ul>



<div class="pull-right">
<form class="navbar-form" method=GET action="http://www.google.com/search" target=_blank>
<img src=google_icon.jpg height="20">
<INPUT TYPE=text id=mytext name=q value="">
</form>
</div>

<div class="pull-right">
<form class="navbar-form" method=GET action="http://www.bing.com/search" target=_blank>
<img src=bing_icon.jpg height="25">
<INPUT TYPE=text id=mytext name=q value="">
</form>
</div>



</div>
</div>
</nav>

<div class="container"> <!-- this part is not fluid so won't fill whole monitor -->

