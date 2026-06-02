
<!DOCTYPE html>
<html>
<head>


<script type="text/javascript" src="/static/js/analytics.js"></script>
<script type="text/javascript">archive_analytics.values.server_name="wwwb-app7.us.archive.org";archive_analytics.values.server_ms=171;</script>
<link type="text/css" rel="stylesheet" href="/static/css/banner-styles.css"/>


<TITLE>Visiting Prague.  A page for those who are visiting Prague or who plan to visit Prague.</TITLE>
<META http-equiv=Content-Type content="text/html; charset=iso-8859-1" >
<META name=description content="Visiting Prague.  A page for those who are visiting Prague or who plan to visit Prague.">
<meta name="keywords" content="Prague, Old Town Square, Staromestske Namesti, Charles Bridge, Karluv Most, Prague Castle, Prazsky Hrad, Petrin Hill, Petrinske Sady, TV Tower, Televizni Vez, Wenceslas Square, Vaclavske Namesti, St. John Nepomucene statue, Dancing House, Tancici dum, Tyn Church, Church of Our Lady Before Tyn">


<style type="text/css"> 
table.copenhagen {border-collapse:collapse;width:"750px";}
table.copenhagen td, th
{
border:1px solid black;
width:33%;font-family:tahoma,verdana,arial;color:darkblue;}
 
 
div.cadre {color:darkblue;position:absolute;
  border:solid black 2px;
  }
</style> 


<style type="text/css">
div.boxtest { 
  border:1px solid black;

  padding:2px;
  background: beige;
  width:350px;
margin-right: 2px;
//float:right;
//use float to take it to the right side
}
table.pleasenote2 {
border-color: darkblue; border-width:0; border-style:solid;
margin: 0px}
table.pleasenote2 td {
font: normal 22pt verdana, arial, sans-serif;
color:yellow; background-color:black} 
table.heading td {
font: bold 32pt verdana, arial, sans-serif;
color:red; background-color:yellow}
table.pleasenote3 td {
font: normal 10pt verdana, arial, sans-serif;
color:yellow; background-color:black} 
table.heading td {
font: bold 18pt verdana, arial, sans-serif;
color:red; background-color:yellow}
</style>
<style type="text/css">
p {text-align:justify;font-family:tahoma;font-size:3;}
H1{font-size:30pt;font-family:helvetica;color:darkblue;}
H2{font-size:24pt;font-family:helvetica;color:black;align:left;}
H3{font-size:18pt;font-family:helvetica;color:darkblue;text-align:left}
img {margin-left:10px;}
img.floatright {float:right;}<!--
A{text-decoration:none}
-->
</style>

<script type="text/javascript" src="/web/20130803021906js_/https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript" src="jquery.kwicks-1.5.1.pack.js"></script>
<style type="text/css">
#accordion-slider-wrap{background:#FFF url('slider-shadow.png') bottom center no-repeat;padding:0 0 34px 0;}ul#accordion-slider{margin:0;padding:0;list-style:none;position:relative;}ul#accordion-slider li{display:block;overflow:hidden;padding:0;float:left;width:230px;height:300px;}
}
</style>
<link rel="stylesheet" href="accordion-slider.css" type="text/css" media="screen" />
<script type="text/javascript">
 $().ready(function() {
 $('#accordion-slider').kwicks({
 max : 750,
 spacing : 2
 });
});
</script>

</head>
<!-- google_ad_section_start(weight=ignore) -->

<body bgcolor=#cccccc>


<!-- BEGIN WAYBACK TOOLBAR INSERT -->
<script type="text/javascript" src="/static/js/disclaim-element.js" ></script>
<script type="text/javascript" src="/static/js/graph-calc.js" ></script>
<script type="text/javascript">//<![CDATA[
var __wm = (function(imgWidth,imgHeight,yearImgWidth,monthImgWidth){
var wbPrefix = "/web/";
var wbCurrentUrl = "http://pgoh13.com/prague.php";

var firstYear = 1996;
var displayDay = "3";
var displayMonth = "août";
var displayYear = "2013";
var prettyMonths = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];
var $D=document,$=function(n){return document.getElementById(n)};
var trackerVal,curYear = -1,curMonth = -1;
var yearTracker,monthTracker;
function showTrackers(val) {
  if (val===trackerVal) return;
  var $ipp=$("wm-ipp");
  var $y=$("displayYearEl"),$m=$("displayMonthEl"),$d=$("displayDayEl");
  if (val) {
    $ipp.className="hi";
  } else {
    $ipp.className="";
    $y.innerHTML=displayYear;$m.innerHTML=displayMonth;$d.innerHTML=displayDay;
  }
  yearTracker.style.display=val?"inline":"none";
  monthTracker.style.display=val?"inline":"none";
  trackerVal = val;
}
function trackMouseMove(event,element) {
  var eventX = getEventX(event);
  var elementX = getElementX(element);
  var xOff = Math.min(Math.max(0, eventX - elementX),imgWidth);
  var monthOff = xOff % yearImgWidth;

  var year = Math.floor(xOff / yearImgWidth);
  var monthOfYear = Math.min(11,Math.floor(monthOff / monthImgWidth));
  // 1 extra border pixel at the left edge of the year:
  var month = (year * 12) + monthOfYear;
  var day = monthOff % 2==1?15:1;
  var dateString = zeroPad(year + firstYear) + zeroPad(monthOfYear+1,2) +
    zeroPad(day,2) + "000000";

  $("displayYearEl").innerHTML=year+firstYear;
  $("displayMonthEl").innerHTML=prettyMonths[monthOfYear];
  // looks too jarring when it changes..
  //$("displayDayEl").innerHTML=zeroPad(day,2);
  var url = wbPrefix + dateString + '/' +  wbCurrentUrl;
  $("wm-graph-anchor").href=url;

  if(curYear != year) {
    var yrOff = year * yearImgWidth;
    yearTracker.style.left = yrOff + "px";
    curYear = year;
  }
  if(curMonth != month) {
    var mtOff = year + (month * monthImgWidth) + 1;
    monthTracker.style.left = mtOff + "px";
    curMonth = month;
  }
}
function hideToolbar() {
  $("wm-ipp").style.display="none";
}
function bootstrap() {
  var $spk=$("wm-ipp-sparkline");
  yearTracker=$D.createElement('div');
  yearTracker.className='yt';
  with(yearTracker.style){
    display='none';width=yearImgWidth+"px";height=imgHeight+"px";
  }
  monthTracker=$D.createElement('div');
  monthTracker.className='mt';
  with(monthTracker.style){
    display='none';width=monthImgWidth+"px";height=imgHeight+"px";
  }
  $spk.appendChild(yearTracker);
  $spk.appendChild(monthTracker);

  var $ipp=$("wm-ipp");
  $ipp&&disclaimElement($ipp);
}
return{st:showTrackers,mv:trackMouseMove,h:hideToolbar,bt:bootstrap};
})(525, 27, 25, 2);//]]>
</script>
<style type="text/css">
body {
  margin-top:0 !important;
  padding-top:0 !important;
  min-width:800px !important;
}
</style>
<div id="wm-ipp" lang="en" style="display:none;">

<div style="position:fixed;left:0;top:0;width:100%!important">
<div id="wm-ipp-inside">
   <table style="width:100%;"><tbody><tr>
   <td id="wm-logo">
       <a href="/web/" title="Wayback Machine home page"><img src="/static/images/toolbar/wayback-toolbar-logo.png" alt="Wayback Machine" width="110" height="39" border="0" /></a>
   </td>
   <td class="c">
       <table style="margin:0 auto;"><tbody><tr>
       <td class="u" colspan="2">
       <form target="_top" method="get" action="/web/form-submit.jsp" name="wmtb" id="wmtb"><input type="text" name="url" id="wmtbURL" value="http://pgoh13.com/prague.php" style="width:400px;" onfocus="this.focus();this.select();" /><input type="hidden" name="type" value="replay" /><input type="hidden" name="date" value="20130803021906" /><input type="submit" value="Go" /><span id="wm_tb_options" style="display:block;"></span></form>
       </td>
       <td class="n" rowspan="2">
           <table><tbody>
           <!-- NEXT/PREV MONTH NAV AND MONTH INDICATOR -->
           <tr class="m">
           	<td class="b" nowrap="nowrap">
		
		    <a href="/web/20130602163838/http://pgoh13.com/prague.php" title="2 juin 2013">JUIN</a>
		
		</td>
		<td class="c" id="displayMonthEl" title="You are here: 2:19:06 août 3, 2013">AOÛT</td>
		<td class="f" nowrap="nowrap">
		
		    <a href="/web/20130904171748/http://pgoh13.com/prague.php" title="4 sept. 2013"><strong>SEPT.</strong></a>
		
                </td>
	    </tr>
           <!-- NEXT/PREV CAPTURE NAV AND DAY OF MONTH INDICATOR -->
           <tr class="d">
               <td class="b" nowrap="nowrap">
               
                   <a href="/web/20130602163838/http://pgoh13.com/prague.php" title="16:38:38 juin 2, 2013"><img src="/static/images/toolbar/wm_tb_prv_on.png" alt="Previous capture" width="14" height="16" border="0" /></a>
               
               </td>
               <td class="c" id="displayDayEl" style="width:34px;font-size:24px;" title="You are here: 2:19:06 août 3, 2013">3</td>
	       <td class="f" nowrap="nowrap">
               
		   <a href="/web/20130806014125/http://pgoh13.com/prague.php" title="1:41:25 août 6, 2013"><img src="/static/images/toolbar/wm_tb_nxt_on.png" alt="Next capture" width="14" height="16" border="0" /></a>
	       
	       </td>
           </tr>
           <!-- NEXT/PREV YEAR NAV AND YEAR INDICATOR -->
           <tr class="y">
	       <td class="b" nowrap="nowrap">
               
                   2012
               
               </td>
               <td class="c" id="displayYearEl" title="You are here: 2:19:06 août 3, 2013">2013</td>
	       <td class="f" nowrap="nowrap">
               
	           <a href="/web/20140918194646/http://pgoh13.com/prague.php" title="18 sept. 2014"><strong>2014</strong></a>
	       
	       </td>
           </tr>
           </tbody></table>
       </td>
       </tr>
       <tr>
       <td class="s">
           <a class="t" href="/web/20130803021906*/http://pgoh13.com/prague.php" title="See a list of every capture for this URL">33 captures</a>
           <div class="r" title="Timespan for captures of this URL">6 oct. 12 - 4 avr. 16</div>
       </td>
       <td class="k">
       <a href="" id="wm-graph-anchor">
       <div id="wm-ipp-sparkline" title="Explore captures for this URL">
	 <img id="sparklineImgId" alt="sparklines"
		 onmouseover="__wm.st(1)" onmouseout="__wm.st(0)"
		 onmousemove="__wm.mv(event,this)"
		 width="525"
		 height="27"
		 border="0"
		 src="/web/jsp/graph.jsp?graphdata=525_27_1996:-1:000000000000_1997:-1:000000000000_1998:-1:000000000000_1999:-1:000000000000_2000:-1:000000000000_2001:-1:000000000000_2002:-1:000000000000_2003:-1:000000000000_2004:-1:000000000000_2005:-1:000000000000_2006:-1:000000000000_2007:-1:000000000000_2008:-1:000000000000_2009:-1:000000000000_2010:-1:000000000000_2011:-1:000000000000_2012:-1:000000000410_2013:7:100021021121_2014:-1:020002001201_2015:-1:021001011100_2016:-1:100100000000" />
       </div>
       </a>
       </td>
       </tr></tbody></table>
   </td>
   <td class="r">
       <a href="#close" onclick="__wm.h();return false;" style="background-image:url(/static/images/toolbar/wm_tb_close.png);top:5px;" title="Close the toolbar">Close</a>
       <a href="http://faq.web.archive.org/" style="background-image:url(/static/images/toolbar/wm_tb_help.png);bottom:5px;" title="Get some help using the Wayback Machine">Help</a>
   </td>
   </tr></tbody></table>
</div>
</div>
</div>
<script type="text/javascript">__wm.bt();</script>
<!-- END WAYBACK TOOLBAR INSERT -->


<head>
<!-- Start css3menu.com HEAD section -->
<link rel="stylesheet" href="/web/20130803021906cs_/http://pgoh13.com/test_menu_files/css3menu1/style.css" type="text/css" />
<!-- End css3menu.com HEAD section -->


<script>
function getFocusGoogleCustomSearch()
{
 document.customsearchbox.q.focus();
}
</script>

</head>

<body>
&nbsp;&nbsp;&nbsp;&nbsp;<strong><font color=red>pgoh</font> = <font color=red>p</font>rominent <font color=red>g</font>uest <font color=red>o</font>f <font color=red>h</font>onour</strong>
<br>
<em style="text-align:left;margin-left:0;">&nbsp;&nbsp;&nbsp;&nbsp;Clicking on the banner below will take you to the</em> <strong>HOME</strong> <em>page of this site, the URL of which is  http://pgoh13.com</em>
<!-- Start css3menu.com BODY section id=1 -->

<nav>
<a href="/web/20130803021906/http://pgoh13.com/" rel="nofollow"><img alt="The World At Your Fingertips banner" title="The World At Your Fingertips banner" src="/web/20130803021906im_/http://pgoh13.com/site_banner.gif"></a>
<br>
<ul id="css3menu1" class="topmenu">
	<li class="topfirst"><a href="/web/20130803021906/http://pgoh13.com/tourist_destinations.php" style="height:18px;line-height:18px;"><span>TRAVEL</span></a>
	<ul>
		<li><a href="/web/20130803021906/http://pgoh13.com/europe.php"><span>Europe</span></a>
		<ul>
			<li><a href="/web/20130803021906/http://pgoh13.com/budapest.php">Budapest</a></li>
			<li><a href="/web/20130803021906/http://pgoh13.com/paris_intro.php">Paris</a></li>
			<li><a href="/web/20130803021906/http://pgoh13.com/rome.php">Rome</a></li>
			<li><a href="/web/20130803021906/http://pgoh13.com/london.php">London</a></li>
			<li><a href="/web/20130803021906/http://pgoh13.com/barcelona.php">Barcelona</a></li>
			<li><a href="/web/20130803021906/http://pgoh13.com/madrid/">Madrid</a></li>
			<li><a href="/web/20130803021906/http://pgoh13.com/venice.php">Venice</a></li>
			<li><a href="/web/20130803021906/http://pgoh13.com/prague.php">Prague</a></li>
			<li><a href="/web/20130803021906/http://pgoh13.com/amsterdam.php">Amsterdam</a></li>
			<li><a href="/web/20130803021906/http://pgoh13.com/athens.php">Athens</a></li>
			<li><a href="/web/20130803021906/http://pgoh13.com/copenhagen.php">Copenhagen</a></li>
			<li><a href="/web/20130803021906/http://pgoh13.com/geneva.php">Geneva</a></li>
			<li><a href="/web/20130803021906/http://pgoh13.com/andalucia.php">Andalucia</a></li>
			<li><a href="/web/20130803021906/http://pgoh13.com/french_riviera.php">French Riviera</a></li>
			
		</ul></li>
		<li><a href="/web/20130803021906/http://pgoh13.com/china.php"><span>China</span></a>
		<ul>
			<li><a href="/web/20130803021906/http://pgoh13.com/zhouzhuang.php">Zhouzhuang</a></li>
			<li><a href="/web/20130803021906/http://pgoh13.com/hangzhou.php">Hangzhou</a></li>
			<li><a href="/web/20130803021906/http://pgoh13.com/xian.php">Xian</a></li>
			<li><a href="/web/20130803021906/http://pgoh13.com/shanghai1.php">Shanghai</a></li>
			<li><a href="/web/20130803021906/http://pgoh13.com/beijing_introduction.php">Beijing</a></li>
		</ul></li>
		<li><a href="/web/20130803021906/http://pgoh13.com/Malaysia_new.php"><span>Malaysia/Singapore</span></a>
		<ul>
			<li><a href="/web/20130803021906/http://pgoh13.com/visit_perhentian.php">Perhentian Islands</a></li>
			<li><a href="/web/20130803021906/http://pgoh13.com/visit_cameron.php">Cameron Highlands</a></li>
			<li><a href="/web/20130803021906/http://pgoh13.com/visit_kb.php">Kota Bharu</a></li>
			<li><a href="/web/20130803021906/http://pgoh13.com/visit_melaka.php">Malacca</a></li>
			<li><a href="/web/20130803021906/http://pgoh13.com/visit_penang1.php">Penang</a></li>
			<li><a href="/web/20130803021906/http://pgoh13.com/visit_kl.php">Kuala Lumpur</a></li>
			<li><a href="/web/20130803021906/http://pgoh13.com/singapore.php">Singapore</a></li>
		</ul></li>
		<li><a href="/web/20130803021906/http://pgoh13.com/morocco.php"><span>Morocco</span></a>
		<ul>
			<li><a href="/web/20130803021906/http://pgoh13.com/agadir.php">Agadir</a></li>
			<li><a href="/web/20130803021906/http://pgoh13.com/rabat.php">Rabat</a></li>
			<li><a href="/web/20130803021906/http://pgoh13.com/casablanca.php">Casablanca</a></li>
			<li><a href="/web/20130803021906/http://pgoh13.com/marrakesh.php">Marrakesh</a></li>
		</ul></li>
	
<li><a href="/web/20130803021906/http://www.worldtravelguide.net/" target="_blank">World destinations</a></li>
	</ul></li>


	<li class="topmenu"><a href="#" style="height:18px;line-height:18px;"><span>SONGS</span></a>
	<ul>
		<li><a href="/web/20130803021906/http://blog.pgoh13.com/lyrics/">English Songs</a></li>
		<li><a href="/web/20130803021906/http://blog.pgoh13.com/chansons/">French Songs</a></li>
		
	</ul></li>

	<li class="topmenu"><a href="#" style="height:18px;line-height:18px;"><span>LANGUAGES</span></a>
	<ul>
		<li><a href="/web/20130803021906/http://malay.pgoh13.com/index.php">Malay Lessons</a></li>
		<li><a href="/web/20130803021906/http://pinyin.pgoh13.com/chinese_introduction.php">Chinese Pinyin Lessons</a></li>
		<li><a href="/web/20130803021906/http://dictionary.pgoh13.com/">English-Malay Dictionary</a></li>
		<li><a href="/web/20130803021906/http://pinyin.pgoh13.com/chinese_characters.php">Basic Chinese Characters</a></li>
<li><a href="/web/20130803021906/http://www.word2word.com/course.html" target="_blank">All World Languages</a></li>
		
	</ul></li>

	<li class="topmenu"><a href="#" style="height:18px;line-height:18px;"><span>USEFUL INFO</span></a>
	<ul>
	<li><a href="/web/20130803021906/http://pgoh13.com/2014_calendar.php">2014 Calendar and Agenda</a></li>
	<li><a href="/web/20130803021906/http://pgoh13.com/2013_calendar.php">2013 Calendar and Agenda</a></li>
	<li><a href="/web/20130803021906/http://www.web-l.com/country-codes/" target="_blank">Country codes for internet</a></li>
	<li><a href="/web/20130803021906/http://onlineconversion.com/" target="_blank">Conversions (length, weight, volume, temperature)</a></li>
	<li><a href="/web/20130803021906/http://wwp.greenwichmeantime.com/time-zone/usa/eastern-time/convert/index.htm" target="_blank">Time Conversion:  EST to GMT</a></li>
	<li><a href="/web/20130803021906/http://www.urbanrail.net/" target="_blank">World subways/metro</a></li>		
	<li><a href="/web/20130803021906/http://www.infobel.com/world/default.asp" target="_blank">World telephone directories</a></li>
	<li><a href="/web/20130803021906/http://embassyinformation.com/" target="_blank">World Embassies</a></li>
	<li><a href="/web/20130803021906/http://www.journeymart.com/tools/world-holidays/default.aspx" target="_blank">World public holidays</a></li>
	<li><a href="/web/20130803021906/http://www.seat61.com/" target="_blank">World train time-tables</a></li>
	<li><a href="/web/20130803021906/http://www.timeanddate.com/worldclock/dialing.html" target="_blank">International Dialling Codes</a></li>
	<li><a href="/web/20130803021906/http://www.timeanddate.com/date/weekday.html">What day is this date?</a></li>		
	</ul></li>
	
	<li class="topmenu"><a href="#" style="height:18px;line-height:18px;"><span>INTERNET</span></a>
	<ul>
		<li><a href="/web/20130803021906/http://pgoh13.com/software_progs1.php">Useful programs</a></li>
		<li><a href="/web/20130803021906/http://pgoh13.com/internet_tips1.php">Internet/Computer tips</a></li>
		<li><a href="/web/20130803021906/http://pgoh13.com/cobian_backup.php">Using Cobian Backup</a></li>
		<li><a href="/web/20130803021906/http://pgoh13.com/rssreader_installation.php">Using the RssReader</a></li>
		<li><a href="/web/20130803021906/http://pgoh13.com/copy_youtube.php">Tips for YouTube</a></li>
		<li><a href="/web/20130803021906/http://pgoh13.com/spam_list.php">Email spams and scams</a></li>
		<li><a href="/web/20130803021906/http://pgoh13.com/special_characters.php">Special characters</a></li>
	</ul></li>

	<li class="topmenu"><a href="#" style="height:18px;line-height:18px;"><span>LEISURE</span></a>
	<ul>
		<li><a href="/web/20130803021906/http://pgoh13.com/justforlaughs.php">Just for laughs</a></li>
		<li><a href="/web/20130803021906/http://pgoh13.com/brainteasers.php">Brainteasers</a></li>
		<li><a href="/web/20130803021906/http://pgoh13.com/quotations.php">Inspiring quotations</a></li>
		<li><a href="/web/20130803021906/http://pgoh13.com/pensioners_page.php">Page for senior citizens</a></li>
		<li><a href="/web/20130803021906/http://pgoh13.com/ecard_quotes.php">Motivational e-cards</a></li>
</ul></li>

<li class="topmenu"><a href="#" style="height:18px;line-height:18px;"><span>NEWS</span></a>
	<ul>
<li><a href="/web/20130803021906/http://www.bbc.com/" target="_blank">BBC (News headlines)</a></li>
<li><a href="/web/20130803021906/http://edition.cnn.com/WORLD/" target="_blank">CNN World News</a></li>
<li><a href="/web/20130803021906/http://www.aljazeera.com/" target="_blank">Al Jazeera News</a></li>
<li><a href="/web/20130803021906/http://www.huffingtonpost.com/?country=US" target="_blank">Huffington Post US</a></li>
<li><a href="/web/20130803021906/http://www.huffingtonpost.co.uk/" target="_blank">Huffington Post UK</a></li>
<li><a href="/web/20130803021906/http://www.twentyfoursevenheadlines.com/" target="_blank">Twenty Four Seven Headlines</a></li>
<li><a href="/web/20130803021906/http://www.newsy.com/categories/world/" target="_blank">News from Newsy.com</a></li> 
<li><a href="/web/20130803021906/http://www.buzzfeed.com/" target="_blank">BuzzFeed</a></li>
<li><a href="/web/20130803021906/http://gawker.com/" target="_blank">Gawker</a></li>
<li><a href="/web/20130803021906/http://www.thedailybeast.com/" target="_blank">The Daily Beast/Newsweek</a></li>
<li><a href="/web/20130803021906/http://www.slate.com/" target="_blank">Slate magazine</a></li>
<li><a href="/web/20130803021906/http://mashable.com/" target="_blank">Mashable</a></li>
<li><a href="/web/20130803021906/http://pgoh13.com/4news_agencies.html" target="_blank">International news agencies</a></li> 
<li><a href="/web/20130803021906/http://www.cbc.ca/news/" target="_blank">Top Canadian news</a></li> 
<li><a href="/web/20130803021906/http://www.news.com.au/" target="_blank">Top Australian news</a></li>
<!-- <li><a href="/web/20130803021906/http://pgoh13.com/periodicos.html" target="_blank">Spanish newspapers</a></li> 
<li><a href="/web/20130803021906/http://pgoh13.com/deux_journaux.html" target="_blank">French newspapers</a></li> 
<li><a href="/web/20130803021906/http://youtube-trends.blogspot.com/" target="_blank">YouTube trends</a></li> 
<li><a href="/web/20130803021906/http://www.tmz.com" target="_blank">TMZ entertainment news</a></li> -->
</ul></li>

<li class="topmenu"><a href="/web/20130803021906/http://pgoh13.com/health_page.php" style="height:18px;line-height:18px;">HEALTH</a></li>

<li class="topmenu"><a href="/web/20130803021906/http://pgoh13.com/recipes_page.php" style="height:18px;line-height:18px;">FOOD</a></li>


<li class="topmenu"><a href="/web/20130803021906/http://www.emailmeform.com/builder/form/Vr4xzDPmb4W" target="_blank" style="height:18px;line-height:18px;">CONTACT</a></li>


<li class="toplast"><a href="/web/20130803021906/http://pgoh13.com/about_pgoh13.php" target="_blank" style="height:18px;line-height:18px;">ABOUT</a></li>



</ul>
</nav>



<table border="0"><tbody><tr></tr><tr>

<td>
<form name="customsearchbox" action="/web/20130803021906/http://www.google.co.uk/" id="cse-search-box" target="_blank">
  <div>
    <input type="hidden" name="cx" value="partner-pub-3250339308164521:5475463726" />
    <input type="hidden" name="ie" value="UTF-8" />
    <input type="text" name="q" size="30" />
    <input type="submit" name="sa" value="Search Google" />
  </div>
<script type="text/javascript" src="/web/20130803021906js_/http://www.google.co.uk/coop/cse/brand?form=cse-search-box&amp;lang=en"></script>
</form>
</td>

<td>&nbsp;&nbsp;Share site in:&nbsp;
<!-- Created using the Imagination Image Map Editor (/web/20130803021906/http://www.mmaus.com/imagination.html)-->
<map name="sharesitemap">
<area shape="rect" coords="4,0,24,22" title="StumbleUpon" href="/web/20130803021906/http://www.stumbleupon.com/refer.php?url=http://pgoh13.com/" alt="StumbleUpon" target="_blank">
<area shape="rect" coords="25,2,48,22" title="Del.icio.us" href="/web/20130803021906/http://del.icio.us/post?url=http://pgoh13.com/" alt="Del.icio.us" target="_blank">
<area shape="rect" coords="52,1,69,19" title="Tweet it!" href="/web/20130803021906/http://twitter.com/share" alt="Tweet it!" target="_blank">
<area shape="rect" coords="73,2,94,20" title="Digg" href="/web/20130803021906/http://digg.com/submit?url=http://pgoh13.com/" alt="Digg" target="_blank">
<area shape="rect" coords="95,1,116,21" title="Reddit" href="/web/20130803021906/http://www.reddit.com/submit?url=http://pgoh13.com/" alt="Reddit" target="_blank">
<area shape="rect" coords="117,2,138,32" title="Facebook" href="/web/20130803021906/http://www.facebook.com/share.php?u=http://pgoh13.com/" alt="Facebook" target="_blank">
<area shape="rect" coords="141,0,181,19" title="Pin it!" href="/web/20130803021906/http://pinterest.com/pin/create/button/?url=http://pgoh13.com/" alt="Pin it!" target="_blank">
<area shape="rect" coords="183,0,212,22" title="Send link by email" href="mailto:?subject=The World At Your Fingertips website&amp;body=This is the URL of the above website:  http://pgoh13.com" alt="Send link by email" target="_blank">
<area shape="rect" coords="214,1,235,22" title="Share on Google+" href="/web/20130803021906/http://plus.google.com/share?url=http://pgoh13.com" alt="Share on Google+" target="_blank">
<area shape="rect" coords="235,1,260,23" title="Linkedin" href="/web/20130803021906/http://www.linkedin.com/shareArticle?mini=true&amp;url=http://pgoh13.com&amp;title=The%20World%20At%20Your%20Fingertips%20&amp;summary=The%20World%20At%20Your%20Fingertips%20is%20your%20one-stop%20internet%20site%20from%20pgoh13.%20&amp;%20source=%20The%20World%20At%20Your%20Fingertips" alt="LinkedIn" target="_blank">
<area shape="rect" coords="263,2,283,21" title="Myspace" href="/web/20130803021906/http://www.myspace.com/index.cfm?fuseaction=postto&amp;t=The%20World%20At%20Your%20Fingertips&amp;c=The%20World%20At%20Your%20Fingertips%20is%20your%20one-stop%20internet%20site%20from%20pgoh13.&amp;u=http://pgoh13.com" alt="Myspace" target="_blank">
</map>
<!-- The line below displays the actual image map and can be modified. IMPORTANT: The file location below must be modified to reflect the correct location of the image it has been once uploaded to the Internet. -->
<img src="share_site.gif" width="284" height="21" usemap="#sharesitemap" border="0"></td>

</tr></tbody></table>

</center>



<body onload="getFocusGoogleCustomSearch()">
<!-- End css3menu.com BODY section --><br>

<strong>&nbsp;&nbsp;&nbsp;Put your mouse over segment of photo to see the whole photo.</strong>
<ul id="accordion-slider">
<li><img src="image1.jpg" width="750" height="300" alt="Prague's Old Town Square during the daytime" title="Prague's Old Town Square during the daytime"/></li>
<li><img src="image2.jpg" width="750" height="300" alt="Prague's Old Town Square at night" title="Prague's Old Town Square at night"/></li>
<li><img src="image3.jpg" width="750" height="300" alt="Changing of the guards at Prague Castle" title="Changing of the guards at Prague Castle"/></li>
<li><img src="image4.jpg" width="750" height="300" alt="Stalls at Prague's Wenceslas Square" title="Stalls at Prague's Wenceslas Square"/></li>
</ul>
                 
<table width="980" span style="border:1px solid black;"><tr><td width="180" valign="top">
<html><head>
<link rel="shortcut icon" href="/web/20130803021906im_/http://pgoh13.com/favicon.ico" rel="nofollow"> 

<script language="javascript" type="text/javascript" src="/web/20130803021906js_/http://pgoh13.com/scripts/jquery.js"></script>
            <script language="javascript" type="text/javascript">$.noConflict();</script>
            <script language="javascript" type="text/javascript" src="/web/20130803021906js_/http://pgoh13.com/scripts/doubleclick.js"></script>

<style>
.gray {color:gray}
.green {color:green}
.lightgreen {color:lightgreen}
.darkorange {color:darkorange}
.orange {color:yellow}
.blue {color:blue}
.red {color:red}
.white {color:white}
.silver {color:silver}
.yellow1 {color:#FFFC17}
.darkpurple {color:darkpurple}
.black {color:black}
.midnightblue {color:midnightblue}
.malayword {font-family: "century gothic"; color: "#0000FF"; font-size:18px}
.yellow {font-family: "century gothic"; color: red; font-size:18px}
.yellow2 {color:yellow}
.inmalay {font-family: "century gothic"; color: "#0000FF"; font-size:18px}
</style>

<STYLE TYPE="text/css">
<!--
 .al { text-align : justify; font-family : verdana,arial,times}
 A:hover {background:yellow; color : blue}
A {text-decoration:none }
-->
</STYLE>



<script language="JavaScript">
function focusIt(ele)
{
ele.focus();
}
</script>

<script type="text/javascript">
function mailto(domain,user) 
{ 
document.location.href = "mailto:" + user + "@" + domain;
}
</script>

<style type="text/css">
table.pleasenote2 {
border-color: darkblue; border-width:0; border-style:solid;
margin: 5px}
table.pleasenote2 td {
font: bold 10pt verdana, arial, sans-serif;
color:yellow; background-color:black}
table.heading td {
font: bold 20pt verdana, arial, sans-serif;
color:red; background-color:yellow}
table.pleasenote3 td {text-align:left;
font: normal 8pt verdana, arial, sans-serif;
color:red; background-color:yellow; border-style:solid;
	border-width:1px;
	border-color:black;} 
table.heading td {
font: bold 12pt verdana, arial, sans-serif;
color:red; background-color:yellow}
table.pleasenote4 {
border-color: darkblue; border-width:2; border-style:solid;
margin: 2px}
table.pleasenote4 td {
font: normal 12pt verdana, arial, sans-serif;
color:midnightblue; background-color:beige} 
table.heading td {
font: bold 32pt verdana, arial, sans-serif;
color:red; background-color:yellow}
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
h3 {	font-family:"Arial";
	font-size: 18px;
	color:#00FF00;
	text-align:center;	
   }
</style>

<style type="text/css">
.typeface {font-family:tahoma;
font-size: 16px;
font-weight:bold;}
</style>
</head>

<body bgcolor=#cccccc onload="setupDoubleClick('/web/20130803021906/http://www.macmillandictionary.com/', 'british', null, false, null);">


<div id="google_translate_element"></div><script>
function googleTranslateElementInit() {
  new google.translate.TranslateElement({
    pageLanguage: 'en',
    autoDisplay: false,
    layout: google.translate.TranslateElement.InlineLayout.SIMPLE
  }, 'google_translate_element');
}
</script><script src="/web/20130803021906js_/http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


<table bgcolor=black width="180" border=0><tr><td>
<font face=arial size=2>
<b><A href="/web/20130803021906/http://pgoh13.com/" rel="nofollow" title="The world at your fingertips"  class=white target=_blank>HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=/web/20130803021906/http://feeds.feedburner.com/RssFeedsFromPgoh13com rel="nofollow" title="RSS feeds" target=_blank><img src=/web/20130803021906im_/http://pgoh13.com/rss_combined.gif rel="nofollow"></a>
<br /><a href="/web/20130803021906/http://pgoh13.com/francais" rel="nofollow" target=_blank class=white>En fran&ccedil;ais &nbsp;<img src=flag_french.gif></a>
<br /><a href="/web/20130803021906/http://pgoh13.com/2013_calendar.php" rel="nofollow" title="2013 Calendar and Events" class=white>2013 Calendar/Events</a>
<br /><a href="/web/20130803021906/http://pgoh13.com/fifa_worldcup2014.php" rel="nofollow" title="2014 FIFA World Cup" class=white>2014 FIFA World Cup</a>
<br /><a href="/web/20130803021906/http://pgoh13.com/timeat_aglance.php" rel="nofollow" class=white>Get exact time</a>
<br /><a href="/web/20130803021906/http://www.timeanddate.com/weather/" rel="nofollow" target=_blank class=white>Get present weather</a>
<br /><a href="/web/20130803021906/http://pgoh13.com/converter_xe.php" rel="nofollow" target=_blank class=white>Your money converter</a>
<br />
<a href="/web/20130803021906/http://pgoh13.com/location_address.php" rel="nofollow" target=_blank class=white>Type address for map:</a>
<form name="location" action="/web/20130803021906/http://maps.google.co.uk/maps" method="get" target="_blank">
<input type="text" size="15" maxlength="255" name="saddr" id="saddr" value="" />
<input type="submit" value="GO" />
</form>
<br />
<form method="get" target="_blank" action="/web/20130803021906/http://dictionary.reference.com/search">
<table width="170" border="0" cellspacing="4" cellpadding="4" bgcolor="#000000">
<tr>
<td valign="middle" align="left">
<span style="font-family: arial,helvetica,sans-serif; font-size: 100%; color: #ffffff;">English dictionary:</span>
<input type="text" name="q" size="10" maxlength="50" style="font-size:11pt;">
<input type="submit" value="GO" style="font-weight:normal; font-size:11pt; font-family: arial,helvetica,sans-serif;">
</td>
</tr>
</table>
</form>
</td></tr></table>

<table width=180><tr><td width="100%" bgcolor=black>
<font face=arial size=2>
<b><A href="/web/20130803021906/http://translate.google.com/" rel="nofollow" title="Anything to translate?"  class=white target=_blank>Anything to translate?</a>
<br /><a href="/web/20130803021906/http://pgoh13.com/site_index.html" rel="nofollow" title="Sitemap of The World At Your Fingertips"  class=white target=_blank>Sitemap (Index to site)</a>
<br /><A href="/web/20130803021906/http://pgoh13.com/worlds_myhome.php" rel="nofollow" title="The World's My Home"  class=white target=_blank>The World's My Home</a>
<br /><A href="/web/20130803021906/http://pgoh13.com/europe.php" rel="nofollow" title="Visiting Europe's top cities"  class=white target=_blank>Visiting Europe</a>
<br /><A href="/web/20130803021906/http://pgoh13.com/china.php" rel="nofollow" title="Visiting China"  class=white target=_blank>Visiting China</a>
<br /><A href="/web/20130803021906/http://pgoh13.com/morocco.php" rel="nofollow" title="Visiting Morocco"  class=white target=_blank>Visiting Morocco</a>
<br /><A href="/web/20130803021906/http://pgoh13.com/Malaysia_new.php" rel="nofollow" title="Visiting Malaysia"  class=white target=_blank>Visiting Malaysia</a>
</td></tr></table>

<table width=180><tr><td width="100%" bgcolor=black>
<font face=arial size=2>
<b><A href="/web/20130803021906/http://pgoh13.com/copy_youtube.php" rel="nofollow" title="How to copy YouTube clips to your hard disk" class=white>Useful tips for YouTube</a>
<br /><A href="/web/20130803021906/http://pgoh13.com/password_creating.php" rel="nofollow" title="How to create your own password" class=white>Your own password</a>
<br /><A href="/web/20130803021906/http://pgoh13.com/rssreader_installation.php" rel="nofollow" title="Using RssReader" class=white>Using RssReader</a>
<br /><A href="/web/20130803021906/http://pgoh13.com/cobian_backup.php" rel="nofollow" title="Using Cobian Backup" class=white>Using Cobian Backup</a>
<br /><A href="/web/20130803021906/http://pgoh13.com/internet_tips1.php" rel="nofollow" title="Getting the most out of Internet" class=white>Internet/Computer tips</a>
<br /><A href="/web/20130803021906/http://pgoh13.com/software_progs1.php" rel="nofollow" title="Free and useful software to install" class=white>Useful software</a>
<br /><A href="/web/20130803021906/http://pgoh13.com/quotations.php" rel="nofollow" title="Inspiring quotations and ideas" class=white>Inspiring quotes/ideas</a>
</td></tr></table>

<table width=180><tr><td width="100%" bgcolor=black>
<font face=arial size=2>
<b><a href="/web/20130803021906/http://pgoh13.com/health_page.php" rel="nofollow" title="Health topics" class=white>Health topics</a>
<br /><a href="/web/20130803021906/http://pgoh13.com/recipes_page.php" rel="nofollow" title="Food recipes" class=white>Food recipes</a>
<br /><a href="/web/20130803021906/http://pgoh13.com/brainteasers.php" rel="nofollow" title="Brainteasers 1" class=white>Brainteasers</a>
<br /><A href="/web/20130803021906/http://pgoh13.com/justforlaughs.php" rel="nofollow" title="No kidding: this is the world's funniest joke"  class=white>Just for laughs</a>
<br /><a href="/web/20130803021906/http://pgoh13.com/pensioners_page.php" rel="nofollow" class=white>Page for senior citizens</a>
<br /><A href="/web/20130803021906/http://pgoh13.com/spam_list.php" rel="nofollow" title="Email spams and scams" class=white>Email spams and scams</a>
<br /><A href="/web/20130803021906/http://pgoh13.com/special_characters.php" rel="nofollow" title="How to type special characters" class=white>Those special characters</a>
<br><A href="/web/20130803021906/http://pgoh13.com/search4sites.php" rel="nofollow" title="Check 4 search engines at one go!" class=white>Six search engines</a>
</td></tr></table>

<table width=180><tr><td width="100%" bgcolor=black>
<font face=arial size=2>
<b><a href="/web/20130803021906/http://pgoh13.com/oldsongs_newsingers.php" rel="nofollow" title="Old songs new singers" class=white>Old songs new singers</a>
<br /><A href="/web/20130803021906/http://pgoh13.com/deezer/" rel="nofollow" title="Deezer playlists" class=white>Deezer playlists</a>
<br /><a href="/web/20130803021906/http://pgoh13.com/greatest_french_songs.php" target="_blank" title="The greatest French songs of all time" class=white>Greatest French songs</a>
<br /><a href="/web/20130803021906/http://pgoh13.com/greatest_english_songs.php" target="_blank" title="List of the 700 English songs in Songs and Lyrics" class=white>700 English songs</a>
<br /><A href="/web/20130803021906/http://pgoh13.com/chinese_songs.php" rel="nofollow" title="Chinese songs" class=white>Chinese songs</a>
<br /><A href="/web/20130803021906/http://pgoh13.com/malaysongs/" rel="nofollow" title="Malay songs" class=white>Malay songs</a>
<br /><A href="/web/20130803021906/http://pgoh13.com/spanishsongs/" rel="nofollow" title="Spanish songs" class=white>Spanish songs</a>
</td></tr></table>

<table width=180><tr><td width="100%" bgcolor=black>
<font face=arial size=2>
<b><A href="/web/20130803021906/http://pinyin.pgoh13.com/chinese_introduction.php" rel="nofollow" title="Learn to speak Chinese"  class=white target=_blank>Learn Chinese pinyin</a>
<br /><A href="/web/20130803021906/http://pinyin.pgoh13.com/chinese_characters.php" rel="nofollow" title="Chinese characters" class=white>Chinese characters</a>
<br /><A href="/web/20130803021906/http://dictionary.pgoh13.com/" rel="nofollow" title="English-Malay Dictionary" class=white>English-Malay Dictionary</a>
<br /><A href="/web/20130803021906/http://malay.pgoh13.com/" rel="nofollow" title="Malay language course" class=white>Malay language course</a>
<br /><a href="/web/20130803021906/http://www.emailmeform.com/builder/form/Vr4xzDPmb4W" rel="nofollow" class="white" target=_blank>Contact &nbsp;<img src=envelope.gif></a>
<br /><a href="/web/20130803021906/http://pgoh13.com/about_pgoh13.php" class="white" target="_blank">About</a>
</font>

<br /><br />
<script type="text/javascript"><!--
google_ad_client = "ca-pub-3250339308164521";
/* vertical_imageonly */
google_ad_slot = "0385628217";
google_ad_width = 160;
google_ad_height = 600;
//-->
</script>
<script type="text/javascript"
src="/web/20130803021906js_/http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

<script type="text/javascript"><!--
google_ad_client = "ca-pub-3250339308164521";
/* 160x90_leftcolumn */
google_ad_slot = "8267464144";
google_ad_width = 160;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="/web/20130803021906js_/http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

</b></td></tr></table>


<!-- google_ad_section_end(weight=ignore) -->
<!-- google_ad_section_start -->

</td>
<td width="750" valign="top">


<table width=150 align=right><tr><td><a href="/web/20130803021906/http://maps.google.co.uk/maps?saddr=prague+city+center" target=_blank><img src=prague_minimap.gif width=150 class=floatright><br />Map of Prague.</a></td></tr></table>
<br />
<b><a href="prague_metro.gif" target="_blank">Metro map</a> | <a href="/web/20130803021906/http://www.weather-forecast.com/locations/Prague/forecasts/latest" target="_blank">Weather outlook</a> | <a href="prague.php#praguelinks">Useful links for Prague</a> | <a href=prague_part2.php>Prague (Part 2)</a> | <a href="visiting_europe.php">Visiting Europe</a></b>

<h1><span style="background-color:midnightblue;">&nbsp;&nbsp;Visiting Prague, Czech Republic* (1)&nbsp;&nbsp;</span></h1>

<p><table align=right><tr><td width=450><a href="/web/20130803021906/http://pgoh13.com/prague/clock_closeup.jpg" target=_blank><img alt="Astronomical clock at the Old Town Hall in Prague" title="Astronomical clock at the Old Town Hall in Prague" src=/web/20130803021906im_/http://pgoh13.com/prague/clock_closeup.jpg width=450></a><br /><font size=2><em>Close-up of the astronomical clock at the Old Town Hall in Prague.  Would you believe it,  it's been there for 600 years!  And it still keeps on chiming on the hour!</em></font></td></tr></table>

<FONT face=tahoma color=black size=3>Prague is only one hour and twenty minutes from Paris and is one of East Europe's most-visited  tourist destinations as well as one of the world's top romantic cities.  Its architecture plus that undescribable atmosphere (the medieval past in the present?) is enough to take anyone's breath away.
<br />Birthplace of Franz Kafka, one of the most influential writers of the 20th century, its principal attractions which no visitor to Prague on a short visit should miss are:  the animated Old Town Square (<em>Staromestske Namesti</em>) and neighbouring Charles Bridge (<em>Karluv Most</em>) as well as Prague Castle (<em>Prazsky Hrad</em>) and Petrin Hill (<em>Petrinske Sady</em>), both of which are on the same side of the Vltava river.
<br />Architecture enthusiasts will certainly want to visit the futuristic TV Tower (<em>Televizni Vez</em>) to have a 360&deg; panoramic view of the city or look for examples of gothic or cubist architecture.  But even for no reason at all, Prague is a great city simply to wander around.
<br />Nothing less than a whole afternoon though should be set aside for a visit to the Prague Castle and its annexes which constitute a little town by themselves.  But apart from its monuments, the charm of Prague is to be found in its meandering alleys and cobbled lanes (ladies, think of leaving your high-heels behind at the hotel!) that run from all parts of the Old Town Square where the ever-present horse-drawn carriages make you feel that you are living in another epoch (the pavements even smell of their droppings)!  But though its numerous alleys are sure to make you lose your way every now and then, yet getting lost here can be considered more of a luxury, as thanks to serendipity, you will end up discovering things that are not mentioned in your guide book.   At the end of the day you will thank yourself for not having followed your initial programme to a T!
<br />But if it is modernity that you are after, then head for Narodni street or Na Prikope street or Wenceslas Square (<em>Vaclavske Namesti</em>), all of which are in the same neighbourhood, and you will not be disappointed.
<br /><br>
<script type="text/javascript"><!--
google_ad_client = "pub-3250339308164521";
/* 728x90image_only, created 5/10/11 */
google_ad_slot = "6321909081";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="/web/20130803021906js_/http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<br /><br>
<table width=750><tr><td width=200 valign=top><a href=/web/20130803021906/http://pgoh13.com/prague/statue_night.jpg target="_blank"><img alt="The St John Nepomucene statue in Prague at night" title="The St John Nepomucene statue in Prague at night" src=/web/20130803021906im_/http://pgoh13.com/prague/statue_night200.jpg></a><br /><font size=2><em>Touching a plaque at St John Nepomucene statue to make a wish.</em></font></td><td valign=top align=justify><FONT face=tahoma color=black size=3>The St. John Nepomucene statue near one end of Charles Bridge (<em>Karluv Most</em>) constitutes one of its major attractions.   There is often a queue in front of it as touching one of the two plaques below the statue is supposed to bring good luck and make your wishes come true.  A ritual that tourists willingly join in.  The two shiny patches at the bottom of the statue (photo on right, click to enlarge) <img src=shiny.gif style="float:none;" width=19 height=25> are caused by the thousands of tourists whose hands rubbed against them over the years.
<br />The statue is in fact one of 30 statues lining both sides of the strictly pedestrian bridge.  Don't leave Prague without visiting this bridge!
</td><td width=200 valign=top><a href=/web/20130803021906/http://pgoh13.com/prague/statue_day.jpg target="_blank"><img alt="The St John Nepomucene statue in Prague in the morning" title="The St John Nepomucene statue in Prague in the morning" src=/web/20130803021906im_/http://pgoh13.com/prague/statue_day200.jpg></a><br /><font size=2><em>The same statue early morning before the tourists start coming in.</em></font>
</td></tr></table>

<hr color=black />
<table width=750><tr><td width=200 valign=top><a href=/web/20130803021906/http://pgoh13.com/prague/castle_outside.jpg target="_blank"><img style="float:left;" alt="Prague Castle as seen from the outside." title="Prague Castle as seen from the outside." src="/web/20130803021906im_/http://pgoh13.com/prague/castle_outside200.jpg" /></a><br /><font size=2><em>Prague Castle as seen from the outside.</em></font></td><td width=10></td><td valign=top width=290><FONT face=tahoma color=black size=3>The best way to go to the Prague Castle is to get off at the Malostranska metro station and then take Tram 22, alighting at the 2nd stop.  Once you enter the Castle courtyard (after passing by the guards at the entrance), turn right to get the entrance tickets (they sell two types of tickets - for a full visit or a short visit).  Some of the places to visit there are the Old Royal Palace, the Basilica of St. George, the Golden Lane, the Powder Tower, St. Vitus's Cathedral and the Rosenberg Palace (the short visit ticket entitles you to visit only the first four places).</td><td width=200 valign=top>
<a href=/web/20130803021906/http://pgoh13.com/prague/castle_inside.jpg target="_blank"><img style="float:right;" alt="View of Prague Castle from the inside." title="View of Prague Castle from the inside." src="/web/20130803021906im_/http://pgoh13.com/prague/castle_inside200.jpg" /></a><br /><font size=2><em>What it's like from the inside.</em></font></td></tr></table>

<hr color=black />
<font size=2>Please click on the photos for a larger version.</font>
<table width=750><tr>
<td rowspan=2 width=400 valign=top><a href="/web/20130803021906/http://pgoh13.com/prague/dancing_house.jpg" target=_blank><img src="/web/20130803021906im_/http://pgoh13.com/prague/dancing_house400.jpg" title="Prague's unique Dancing House along the embankment and not far from the Karlovo Namesti metro station" alt="Prague's unique Dancing House along the embankment and not far from the Karlovo Namesti metro station"></a><br /><font size=2 color=black><em>Prague's unique Dancing House (Tancici dum) along the embankment near the Karlovo Namesti metro station.  Originally named <em>Ginger & Fred</em> after the renowned dancers because of the building's "dancing" theme, the structure was built by two architects, Vlado Milunic and Frank Gehry in 1992 and took four years to complete.</em></font></font></td>
<td width=250 valign=top><a href="/web/20130803021906/http://pgoh13.com/prague/street_art.jpg" target=_blank><img src="/web/20130803021906im_/http://pgoh13.com/prague/street_art250.jpg" title="Street art along Na Prikope street" alt="Street art along Na Prikope street"></a><br /><font size=2 color=black><em>Street art in the form of a maze along the busy Na Prikope street.  The warning of danger ("Entry at your own risk") that you can see in the picture (if you click on it) is not so much a warning that you might lose your way as to warn you against shaving the ungummed brick wall and making it fall down like a pack of cards!  But the wall will not fall easily as each of the bricks piling up in the picture weighs 1-2 kg.</em></font></font></td></tr><tr>
<td width=250 valign=top><a href="/web/20130803021906/http://pgoh13.com/prague/airport_creatures.jpg" target=_blank><img src="/web/20130803021906im_/http://pgoh13.com/prague/airport_creatures250.jpg" title="Five eye-catching but weird creatures just outside Prague airport" alt="Five eye-catching but weird creatures just outside Prague airport"></a><br /><font size=2 color=black><em>Five eye-catching but weird-looking creatures stand guard outside Vaclav Havel Airport , new name (since 05 Oct. 2012) of Prague's international airport.</em></font></font></td></tr></table>

<br />
<a href=/web/20130803021906/http://pgoh13.com/prague/oldtown_squareday.jpg target=_blank><img src="/web/20130803021906im_/http://pgoh13.com/prague/oldtown_squareday.jpg" width=750 title="Prague's Old Town Square during the day" alt="Prague's Old Town Square during the day" /></a><br /><font size=2 color=black><em>Prague's Old Town Square at 18h30 in the evening with the two spires of Tyn Church (or to give its full name,  the Church of Our Lady Before Tyn) dominating the square.</em></font></font>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=prague_part2.php><font face=arial size=3 color=red>Go to Part 2</font></font></font></a>


<br /><br />
<a name="praguelinks">
<font face=arial size=5><b>Some Useful Links For Prague:</b></font><font face=arial size=3>
<br /><a href="/web/20130803021906/http://www.praguewelcome.cz/en/" target="_blank">Prague's official tourist portal</a>
 <br /><a href="/web/20130803021906/http://www.jewishmuseum.cz/en/ainfo.htm" target="_blank">Jewish Museum in Prague</a>
 <br /><a href="/web/20130803021906/http://www.newpraguetours.com/daily-tours/new-prague-free-tour.html" target="_blank">Free daily tours of Prague</a>
 <br /><a href="/web/20130803021906/http://www.myczechrepublic.com/prague/tickets_fares.html" target="_blank">Bus and metro tickets</a>
<br /><a href="/web/20130803021906/http://www.livingprague.com/praguecard.htm" target="_blank">Prague Tourist Cards</a>
<br /><a href="/web/20130803021906/http://www.towerpark.cz/en/tower-park-prague/" target="_blank">Tower Park Prague</a>

<br /><br />
<table width=750><tr><td width=350><div class="boxtest">
<b>SURVIVAL VOCABULARY:</b>
<br />Hello = Ahoj (pronounced as ahoy)
<br />Yes = Ano
<br />No = Ne (pron. neh)
<br />Good-bye = Cau (pron. chow)
<br />I don´t understand = Nerozumim (pron. neh-rozoo-meem)
<br />Excuse me/Pardon = Prominte (pron. promeenta)
<br />Thank you = Dekuji (pron. daykooyee)
<br />How much is it? = Kolik to stoji? (pron. koleek toh stoyee)
<br />Beer = Pivo (pron. pee-vo)
<br />Wine = Vino
<br />Water = Voda
<br />Coffee = Kava
<br />Toilet = Toaleta (pron. toh-ah-lehta)
<br />Help! = Pomoc! (pron. po-mo)</div>
</td><td span style="border:1px solid black;"><script type="text/javascript"><!--
google_ad_client = "pub-3250339308164521";
/* 336x280replace300x250 */
google_ad_slot = "0656356433";
google_ad_width = 336;
google_ad_height = 280;
//-->
</script>
<script type="text/javascript"
src="/web/20130803021906js_/http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</td></tr></table>

<br />
<b>*Since 1 January 1993, the former Czechoslovakia has been split into the Czech Republic and Slovakia.</b>
</td></tr></table>


</body></html>




























<!--
     FILE ARCHIVED ON 2:19:06 août 3, 2013 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 20:33:03 nov. 26, 2016.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
-->
