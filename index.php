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
<script src="./js/full.js"></script>

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
                <li><a href="About-Us.php"><span>About Us</span></a>
                </li>
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
    
    <!-- Slider Start-->
    <div id="slider" class="grid_16">  
    	
    	<!--Arrow Navigation-->
    	<a id="prevslide" class="load-item"><img src="./image/theme/arrow1.png" alt=""></a>
    	<a id="nextslide" class="load-item"><img src="./image/theme/arrow2.png" alt=""></a>
    	
        <!--Slide captions displayed here-->
        <div id="slidecaption">
		  <script>
            jQuery(function($){			
                    $.supersized({			
                        // Functionality
                        slide_interval          :   5000,		// Length between transitions
                        transition              :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
                        transition_speed		:	1000,		// Speed of transition															   
                        // Components							
                        slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
                        slides 					:  	[			// Slideshow Images	
                        {image : './image/wall/01.jpg', title : '<h1>Business Life in The City</h1> <h2>"You can change your life"</h2>'},
                        {image : './image/wall/02.jpg', title : '<h1>The New York City</h1> <h2>"Duis eleifend suscipit pellentesque"</h2>'},
						{image : './image/wall/03.jpg', title : '<h1>A Black Night in The City</h1> <h2>"Vivamus euismod luctus tempus"</h2>'},
						{image : './image/wall/04.jpg', title : '<h1>New World in The City</h1> <h2>"Nulla augue urna, dictum eu luctus"</h2>'}												
                                                    ]	
                    });
                });
          </script>
        </div>
		
        <!--Navigation-->
    	<div id="list-slide">
        <ul id="slide-list"></ul>
    	</div>
        
    	<!--Time Bar-->
    	<div id="progress-back" class="load-item">
    	    <div id="progress-bar"></div>
    	</div>
    </div>
    <!-- Slider End-->
    
 
    
    <!-- Tab Menu Start-->
    <div id="tabmenu" class="grid_16 margin">
      
      <div id="tab-gradident"></div>
      <div id="tabback"></div>
      <div id="tabmenuback"></div>
      <script type="text/javascript">
      $(document).ready(function() {
          $('#classytabs').classytabs({ root: '', rootlink: '',showbreadcrumb:true,ontabclick:function(tab){
          if(tab == 'portfolio')							
              $('#pages').smartpaginator({ totalrecords: 3,recordsperpage: 1, datacontainer: 'my-contents', dataelement: 'div', theme: 'black' });
                      } });            
         
      });	
      </script>
      
      <div id="tabmainmenu" class="grid_16 margin">
      	  <div class="big-shadow"><img src="./image/theme/bigshadow.png" alt=""></div>
          <div id="classytabs">
            <!-- Tab Menu-->
            <ul class="tabs">
            <li> <a href="#work" class="tabbutton1 first selected"> <img src="./image/icon/1.png" alt=""> <h1> Portfolio </h1> <p>Sneak Peak</p></a> </li>
            <li><a href="#aboutus" class="tabbutton2"><img src="./image/icon/2.png" alt=""> <h1> About Us </h1><p>Who we are </p> </a> </li>
            </ul>        
          <div class="clearfix"></div>
          
          <!-- Tab Menu Content-->
          <div id="tabs-content" class="tab-contents" style="width:970px;">
          
          <!-- TAB MENU CONTENT #1  -->
          <div id="work" class="tab-content">
              
              
              <div class="three-columb">
              	<script>
				$(function(){				
				
				  $('#columb').bxSlider({
					  mode: 'fade',
					  captions: true,
					  auto: false,
					  controls: true
				  });
				  
				  $('#columb2').bxSlider({
					  mode: 'fade',
					  captions: true,
					  auto: false,
					  controls: true
				  });
				  
				  $('#columb3').bxSlider({
					  mode: 'fade',
					  captions: true,
					  auto: false,
					  controls: true
				  });
				});	
			   </script>
              	<ul id="columb" class="columb-post">
                    <li>
                    <div class="columb-shadow"><img src="./image/theme/minishadow.png" alt=""></div>
                    <div class="corner_ribbon">
                        <div class="corner_ribbon_top_left_black"><a href="./image/post/bigimage.png" title="Lorem ipsum is simply dummy data text printing." class="team corner_zoom"></a></div>
                        <h1><a href="#">Work Portfolio One</a></h1>
                        <img src="./image/post/col1.png" alt="" class="three-columb-img">
                    </div>
                    </li>
                    <li>
                    <div class="columb-shadow"><img src="./image/theme/minishadow.png" alt=""></div>
                    <div class="corner_ribbon">
                        <div class="corner_ribbon_top_left_black"><a href="./image/post/bigimage.png" title="Lorem ipsum is simply dummy data text printing." class="team corner_zoom"></a></div>
                        <h1><a href="#">The Title Two Is Here</a></h1>
                        <img src="./image/post/c1.png" alt="" class="three-columb-img">
                    </div>
                    </li>
                    <li>
                    <div class="columb-shadow"><img src="./image/theme/minishadow.png" alt=""></div>
                    <div class="corner_ribbon">
                        <div class="corner_ribbon_top_left_black"><a href="./image/post/bigimage.png" title="Lorem ipsum is simply dummy data text printing." class="team corner_zoom"></a></div>
                        <h1><a href="#">The Title Three Is Here</a></h1>
                        <img src="./image/post/c2.png" alt="" class="three-columb-img">
                    </div>
                    </li>
                    <li>
                    <div class="columb-shadow"><img src="./image/theme/minishadow.png" alt=""></div>
                    <div class="corner_ribbon">
                        <div class="corner_ribbon_top_left_black"><a href="./image/post/bigimage.png" title="Lorem ipsum is simply dummy data text printing." class="team corner_zoom"></a></div>
                        <h1><a href="#">The Title Four Is Here</a></h1>
                        <img src="./image/post/c3.png" alt="" class="three-columb-img">
                    </div>
                    </li>
                    <li>
                    <div class="columb-shadow"><img src="./image/theme/minishadow.png" alt=""></div>
                    <div class="corner_ribbon">
                        <div class="corner_ribbon_top_left_black"><a href="./image/post/bigimage.png" title="Lorem ipsum is simply dummy data text printing." class="team corner_zoom"></a></div>
                        <h1><a href="#">The Title Five Is Here</a></h1>
                        <img src="./image/post/c4.png" alt="" class="three-columb-img">
                    </div>
                    </li>
                </ul>
              </div>
              
              
              <div class="three-columb">
              	<ul id="columb2" class="columb-post">
                    <li>
                    <div class="columb-shadow"><img src="./image/theme/minishadow.png" alt=""></div>
                    <div class="corner_ribbon">
                        <div class="corner_ribbon_top_left_black"><a href="./image/post/bigimage.png" title="Lorem ipsum is simply dummy data text printing." class="team corner_zoom"></a></div>
                        <h1><a href="#">Work Portfolio Two</a></h1>
                        <img src="./image/post/col2.png" alt="" class="three-columb-img">
                    </div>
                    </li>
                    <li>
                    <div class="columb-shadow"><img src="./image/theme/minishadow.png" alt=""></div>
                    <div class="corner_ribbon">
                        <div class="corner_ribbon_top_left_black"><a href="./image/post/bigimage.png" title="Lorem ipsum is simply dummy data text printing." class="team corner_zoom"></a></div>
                        <h1><a href="#">The Title Two Is Here</a></h1>
                         <img src="./image/post/c5.png" alt="" class="three-columb-img">
                    </div>
                    </li>
                    <li>
                    <div class="columb-shadow"><img src="./image/theme/minishadow.png" alt=""></div>
                    <div class="corner_ribbon">
                        <div class="corner_ribbon_top_left_black"><a href="./image/post/bigimage.png" title="Lorem ipsum is simply dummy data text printing." class="team corner_zoom"></a></div>
                        <h1><a href="#">The Title Three Is Here</a></h1>
                         <img src="./image/post/c6.png" alt="" class="three-columb-img">
                    </div>
                    </li>
                    <li>
                    <div class="columb-shadow"><img src="./image/theme/minishadow.png" alt=""></div>
                    <div class="corner_ribbon">
                        <div class="corner_ribbon_top_left_black"><a href="./image/post/bigimage.png" title="Lorem ipsum is simply dummy data text printing." class="team corner_zoom"></a></div>
                        <h1><a href="#">The Title Four Is Here</a></h1>
                         <img src="./image/post/c7.png" alt="" class="three-columb-img">
                    </div>
                    </li>
                    <li>
                    <div class="columb-shadow"><img src="./image/theme/minishadow.png" alt=""></div>
                    <div class="corner_ribbon">
                        <div class="corner_ribbon_top_left_black"><a href="./image/post/bigimage.png" title="Lorem ipsum is simply dummy data text printing." class="team corner_zoom"></a></div>
                        <h1><a href="#">The Title Five Is Here</a></h1>
                         <img src="./image/post/c8.png" alt="" class="three-columb-img">
                    </div>
                    </li>
                    
                </ul>
              </div>
              
              
              <div class="three-columb">
              	<ul id="columb3" class="columb-post">
                    <li>
                    <div class="columb-shadow"><img src="./image/theme/minishadow.png" alt=""></div>
                    <div class="corner_ribbon">
                        <div class="corner_ribbon_top_left_black"><a href="./image/post/bigimage.png" title="Lorem ipsum is simply dummy data text printing." class="team corner_zoom"></a></div>
                        <h1><a href="#">Work Portfolio Three</a></h1>
                        <img src="./image/post/col3.png" alt="" class="three-columb-img">
                    </div>
                    </li>
                    <li>
                    <div class="columb-shadow"><img src="./image/theme/minishadow.png" alt=""></div>
                    <div class="corner_ribbon">
                        <div class="corner_ribbon_top_left_black"><a href="./image/post/bigimage.png" title="Lorem ipsum is simply dummy data text printing." class="team corner_zoom"></a></div>
                        <h1><a href="#">The Title Two Is Here</a></h1>
                         <img src="./image/post/c9.png" alt="" class="three-columb-img">
                    </div>
                    </li>
                    <li>
                    <div class="columb-shadow"><img src="./image/theme/minishadow.png" alt=""></div>
                    <div class="corner_ribbon">
                        <div class="corner_ribbon_top_left_black"><a href="./image/post/bigimage.png" title="Lorem ipsum is simply dummy data text printing." class="team corner_zoom"></a></div>
                        <h1><a href="#">The Title Three Is Here</a></h1>
                         <img src="./image/post/c10.png" alt="" class="three-columb-img">
                    </div>
                    </li>
                    <li>
                    <div class="columb-shadow"><img src="./image/theme/minishadow.png" alt=""></div>
                    <div class="corner_ribbon">
                        <div class="corner_ribbon_top_left_black"><a href="./image/post/bigimage.png" title="Lorem ipsum is simply dummy data text printing." class="team corner_zoom"></a></div>
                        <h1><a href="#">The Title Four Is Here</a></h1>
                         <img src="./image/post/c11.png" alt="" class="three-columb-img">
                    </div>
                    </li>
                </ul>
              </div>
          </div>
          
         
          
          
          </div>
        </div>
    </div>
    <!-- Tab Menu End-->
</div>
<!-- Container End-->
 <div class="clearfix"></div>
<!-- Footer 2 Start -->       
<div id="footer2-back">
	<div class="container_16">
    	<div class="grid_16 footerregister margin">
        	<p>&copy; 2014 Shreli Builders & Developers. All rights reserved. </p><p>Website Constructed by <a href="http://www.mitfsolutions.com" target="_blank">MITF Solutions</a></p>
			
			<div class="footersocial margin">
              
              <div class="footerothermedia">
              	<p>Social Media</p>
                <ul>
                	<li><a href="#"><img src="./image/icon/s1.png" alt=""></a></li>
                    <li><a href="#"><img src="./image/icon/s2.png" alt=""></a></li>
                    <li><a href="#"><img src="./image/icon/s8.png" alt=""></a></li>
                </ul>
                
              </div>
        </div>
        </div>
    </div>
</div>
</div>
</body>
</html>