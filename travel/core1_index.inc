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

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-4651027-4', 'auto');
  ga('send', 'pageview');
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
    
<title>The World At Your Fingertips, website that makes your surfing easier.</title>
<meta name="description" content="The World At Your Fingertips is a website that strives to make your surfing life easier.  Songs, Travel, News, Information, Computer Tips plus free online Malay language and Mandarin Pinyin courses.  Do everything from here.  Go everywhere from here." />
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

            <li><a href="http://pgoh13.free.fr"><span style="font-size:18px !important;color:yellow">Home</span></a></li>
	    
 <li class="dropdown">        
   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span style="font-size:18px !important;color:yellow">Travel</span><span class="caret" style="color:white;border-width: 6px;"></span></a>
                <ul class="dropdown-menu">
          <li><a href="http://pgoh13.free.fr/travel/bruges.php" rel="nofollow">Bruges</a></li>
                <li><a href="http://pgoh13.free.fr/travel/krakow.php" rel="nofollow">Krakow</a></li>
		<li><a href="http://pgoh13.free.fr/travel/riga.php" rel="nofollow">Riga</a></li>
		<li><a href="http://pgoh13.free.fr/travel/berlin.php" rel="nofollow">Berlin</a></li>
		<li><a href="http://pgoh13.free.fr/travel/milan.php" rel="nofollow">Milan</a></li>	
		<li><a href="http://pgoh13.free.fr/travel/lisbon.php" rel="nofollow">Lisbon</a></li>
			<li><a href="http://pgoh13.free.fr/travel/dublin.php" rel="nofollow">Dublin</a></li>
			<li><a href="http://pgoh13.free.fr/travel/sicily" rel="nofollow">Sicily</a></li>
			<li><a href="http://pgoh13.free.fr/travel/budapest.php" rel="nofollow">Budapest</a></li>
			<li><a href="http://pgoh13.free.fr/travel/paris_page1.php" rel="nofollow">Paris</a></li>
			<li><a href="http://pgoh13.free.fr/travel/rome.php" rel="nofollow">Rome</a></li>
			<li><a href="http://pgoh13.free.fr/travel/london.php" rel="nofollow">London</a></li>
			<li><a href="http://pgoh13.free.fr/travel/barcelona.php" rel="nofollow">Barcelona</a></li>
			<li><a href="http://pgoh13.free.fr/travel/madrid/" rel="nofollow">Madrid</a></li>
			<li><a href="http://pgoh13.free.fr/travel/venice.php" rel="nofollow">Venice</a></li>
			<li><a href="http://pgoh13.free.fr/travel/prague.php" rel="nofollow">Prague</a></li>
			<li><a href="http://pgoh13.free.fr/travel/amsterdam.php" rel="nofollow">Amsterdam</a></li>
			<li><a href="http://pgoh13.free.fr/travel/athens.php" rel="nofollow">Athens</a></li>
			<li><a href="http://pgoh13.free.fr/travel/copenhagen.php" rel="nofollow">Copenhagen</a></li>
			<li><a href="http://pgoh13.free.fr/travel/geneva.php" rel="nofollow">Geneva</a></li>
			<li><a href="http://pgoh13.free.fr/travel/andalucia.php" rel="nofollow">Andalucia</a></li>
			<li><a href="http://pgoh13.free.fr/travel/french_riviera.php" rel="nofollow">French Riviera</a></li>
<li><a href="http://pgoh13.free.fr/travel/china.php" rel="nofollow">China</a></li>
<li><a href="http://pgoh13.free.fr/travel/Malaysia_new.php" rel="nofollow">Malaysia</a></li>
<li><a href="http://pgoh13.free.fr/travel/morocco.php" rel="nofollow">Morocco</a></li>
</ul>

            

<div class="pull-right">
<form class="navbar-form" method=GET action="http://www.google.com/search" target=_blank>
<img src=google_icon.jpg height="20" class="hidden-xs">
<INPUT TYPE=text id=mytext name=q value="">
<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
</form>
</div>

</div>
</div>
</nav>

<div class="container"> <!-- this part is not fluid so won't fill whole monitor -->

