<!DOCTYPE HTML>
<html>
<head>

<title>Shreli Builders & Developers</title>

<!-- Style CSS -->
<link rel="stylesheet" href="./css/grid/main.css" />

<!-- Google Font -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet'>
<link href='http://fonts.googleapis.com/css?family=Mate+SC' rel='stylesheet'>
<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet'>
<link href='http://fonts.googleapis.com/css?family=Marvel' rel='stylesheet'>
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
<link href='http://fonts.googleapis.com/css?family=Pinyon+Script' rel='stylesheet'>
<link href='http://fonts.googleapis.com/css?family=Cabin:400italic' rel='stylesheet'>

<!-- JS Min -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="./js/general.js"></script>

<!-- JS Theme Style -->
<script>
if (document.layers) { document.write('<link rel=stylesheet href="./css/style/style.css">') } 
else { document.write('<link rel=stylesheet href="./css/style/style.css">') }
if (document.layers) { document.write('<link rel=stylesheet href="./css/color/default.css">') } 
else { document.write('<link rel=stylesheet href="./css/color/default.css">') }
if (document.layers) { document.write('<link rel=stylesheet href="./css/app/supersized.css">') } 
else { document.write('<link rel=stylesheet href="./css/app/supersized.css">') }
if (document.layers) { document.write('<link rel=stylesheet href="./css/app/hover_effects.css">') } 
else { document.write('<link rel=stylesheet href="./css/app/hover_effects.css">') }
if (document.layers) { document.write('<link rel=stylesheet href="./fancybox/jquery.fancybox-1.3.4.css">') } 
else { document.write('<link rel=stylesheet href="./fancybox/jquery.fancybox-1.3.4.css">') }
</script>

<!--[if lt IE 10]>
<link rel="stylesheet" href="css/app/hover_effects_ie.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/style/ie9.css" type="text/css" media="screen" />
<![endif]-->

<script src="./fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script src="./fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="./js/framework.js"></script>

<meta charset="UTF-8"></head>
<body>

<!-- Container Start-->
<div class="container_16" style="padding-left:15px;">
	
    <div id="topdot" class="grid_16 margin"></div>
    
    <!-- Top Menu -->
    <div class="grid_16 margin">
      <div id="topmenu">
      	<ul>
        	<li><a id="contactline1" href="#contactline"><img src="./image/icon/mail.png" alt=""></a></li>
            <li><a id="contactline2" href="#contactadress"><img src="./image/icon/phone.png" alt=""></a></li>
            <li><input name="Search" type="text" value="Search:" onfocus="if(this.value=='Search:')this.value='';" onblur=	"if(this.value=='')this.value='Search:';"/></li>
        </ul>
        <!-- Popup Contact Form -->
        <div  class="dnone">
          <div id="contactline" class="popupcontact">
              <h1>Contact Form</h1>
              <form>
              <fieldset><input name="Name" type="text" value="Name:" onfocus="if(this.value=='Name:')this.value='';" onblur=	"if(this.value=='')this.value='Name:';"/></fieldset>  
              <fieldset><input name="Mail" type="text" value="E-Mail:" onfocus="if(this.value=='E-Mail:')this.value='';" onblur=	"if(this.value=='')this.value='E-Mail:';"/></fieldset>
              <fieldset><input name="Web" type="text" value="Web:" onfocus="if(this.value=='Web:')this.value='';" onblur=	"if(this.value=='')this.value='Web:';"/></fieldset>
              <fieldset><textarea name="Message" onfocus="if(this.value=='Message:')this.value='';" onblur=	"if(this.value=='')this.value='Message:';">Message:</textarea></fieldset>
              <fieldset><input type="submit" value="Send" /></fieldset>
              </form>
          </div>
		</div>
        <!-- Popup Contact Adress -->
        <div  class="dnone">
          <div id="contactadress" class="popupcontact">
              <h1>City Address Detail</h1>
              <p>#.74, 2nd Cross, Naidu's Layout, </br>Behind Abbaiah Naidu Studio,Subramanyapura Post,</br> BSK 3rd Stage, Bangalore-560 061.</p>
              <h5>Telephone:</h5>
              <p>(080) 26723330, (+91) 9880680432, 94498802328, 9740427942</p>              
              <h5>E-Mail:</h5>
              <p>info@sherli.com</p>
          </div>
		</div>
      </div>
    </div>
    
    <!-- Navigation Start-->
    <div id="navigation" class="grid_16 margin">
        
        <!-- #Logo-->
        <div class="grid_4 logo margin">
        	<a href="index.php"><img src="./image/theme/logo.png" alt=""></a>
        </div>
        
        <!-- #Menu-->
        <div class="grid_12 topmenu">
        	<ul id="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="About-Us.php"><span>About Us</span></a></li>
                <li><a href="projects.php">Projects</a>
				<ul>
                	<li><a href="portfolio.php">Completed Projects</a></li>
                    <li><a href="portfolio.php">Ongoing Projects</a></li>
                    <li><a href="portfolio.php">Upcoming Projects</a></li>                    
                </ul>				
				</li>                 
                <li><a href="portfolio.php">Portfolio</a></li>               
                <li><a href="Enclave.php">Shreli Enclave</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>        
    </div>