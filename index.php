<!DOCTYPE html>

<title>38095 template preview</title>

<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	<link href="carousel_style.css" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Kotta+One' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script> 
<!--fancy box-->
	<script type="text/javascript" src="lib/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>

	<script type="text/javascript" src="lib/fancybox/jquery.fancybox-1.3.4.pack.js"></script>

	<link rel="stylesheet" type="text/css" href="lib/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
	<script type="text/javascript" src="lib/fancybox/fancybox.js"></script>
<!--closed fancy box--> 


 <!--

  jCarousel library
-->
<script type="text/javascript" src="lib/jquery.jcarousel.min.js"></script>
<!--
  jCarousel skin stylesheet
-->
<link rel="stylesheet" type="text/css" href="skins/tango/skin.css" />

<script type="text/javascript">

jQuery(document).ready(function() {
    jQuery('#mycarousel').jcarousel({
    	wrap: 'circular'
    });
});

</script>
  <script src="js/superfish.js" type="text/javascript"></script>
    <script src="js/slides.min.jquery.js"></script>
    <script src="js/FF-cash.js" type="text/javascript"></script>
    <script src="js/script.js" type="text/javascript"></script>
    <script src="js/jquery.hoverIntent.js" type="text/javascript"></script>
    <script src="js/jquery.backgroundPosition.js" type="text/javascript"></script>
    <script src="js/jquery.color.js" type="text/javascript"></script>
<script src="js/jquery.responsivemenu.js"></script>
    <script>
	$(function(){
		$(".block").hover(
			function(){
				$(this).stop().animate({color:'#fff'}, 200).find('span').stop().animate({opacity:'0'}, 200);
				$(this).find('em').css({'backgroundPosition':'bottom'});
			}, 
			function(){
				$(this).stop().animate({color:'#797979'}, 200).find('span').stop().animate({opacity:'1'}, 200);
				$(this).find('em').css({'backgroundPosition':'top'});
			}
		);
	})
</script>
    <!--[if lt IE 8]>
        <div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
             <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
            </a>
        </div>
    <![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
        <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
	<![endif]-->
</head>
<body id="page1">
	<!--==============================header=================================-->
    <header>
    	<div class="header-main">
	    	<div class="row-1">
	        	<div class="container_12">
	                <nav id="main-menu">
	                    <ul class="menu responsive-menu">
	                        <li class="item-1"><a class="active" href="index.php">Home</a></li>
	                        <li class="item-2"><a href="index-1.html">Company<strong></strong></a>
	                        	<ul>
	                            	<li><a href="#">Company Overview</a></li>
	                                <li><a href="#">Our Standards</a>
	                                	<ul>
	                                    	<li><a href="#">Analyze</a></li>
	                                        <li><a href="#">Maintain</a></li>
	                                        <li><a href="#">Grow</a></li>
	                                        <li class="last"><a href="#">Develop</a></li>
	                                    </ul>
	                                </li>
	                                <li><a href="#">Our Mission</a></li>
	                                <li class="last"><a href="#">Meet Our Team</a></li>
	                            </ul>
	                        </li>
	                        <li class="item-3"><a href="index-2.html">Services</a></li>
	                        <li class="item-4"><a href="index-3.html">Clients</a></li>
	                        <li class="item-5"><a href="index-4.html">Contacts</a></li>
	                    </ul>
	                    <div class="clear"></div>
	                    <span></span>
	                </nav>
	                <div class="user-login">
	                    <a  id="login" href="login.php">login</a>&nbsp;&nbsp;
						<a id="signup" href="signup.php">sign up</a>
	                </div>
	                <div class="clear"></div>
	            </div>
	        </div>
	        <div class="row-2">
	        	<div class="container_12">
	            	<div class="wrapper">
		        		<h1><a href="index.html">Goodwin Solution</a></h1>
		                <form id="search">
		                    <label class="input-bg">
		                        <input type="text">
		                    </label>
		                    <a class="searchbutton" onClick="document.getElementById('search').submit()"></a>
		                </form>
	                </div>
	            </div>
	        </div>
	        <div id="slides">
	            <div class="slides_container">
	                <div class="slide">
	                    <img src="images/image-1.jpg" alt="">
	                    <div class="caption">
	                        <span>Give us a chance and we will prove our efficiency!</span>
	                        <a class="button-more" href="#">More</a>
	                    </div>
	                </div>
	                <div class="slide">
	                    <img src="images/image-2.jpg" alt="">
	                    <div class="caption">
	                        <span>We will show you the way to success!</span>
	                        <a class="button-more" href="#">More</a>
	                    </div>
	                </div>
	                <div class="slide">
	                    <img src="images/image-3.jpg" alt="">
	                    <div class="caption">
	                        <span>A driving force in your business!</span>
	                        <a class="button-more" href="#">More</a>
	                    </div>
	                </div>
	            </div>
	            <div class="slider-separator"></div>
	        </div>
	    </div>
    </header>
    
	<!--==============================content================================-->
    <section id="content">
    	<div class="container_12">
        	<div class="wrapper bot-indent">
				<div id="wrap">
  <ul id="mycarousel" class="jcarousel-skin-tango">
   <li>
			<div class="grid_4 indent-sw-1">
                	<div class="block ico1">
                    	<span></span>
                        <em></em>
                        <div class="block-text">
	                        <strong class="block-title">Step #1</strong>
	                        <p>Lorem ipsum dolor sit amcons ctetuer adipiscing elsd diam non. ummy nibh euismo.</p>
                            <a class="button-more" href="#">More</a>
                        </div>
                    </div>
                </div>
	</li>
	<li>
		<div class="grid_4 indent-sw-1">
                	<div class="block ico2">
                    	<span></span>
                        <em></em>
                        <div class="block-text">
	                        <strong class="block-title">Step #2</strong>
	                        <p>Lorem ipsum dolor sit amcons ctetuer adipiscing elsd diam non. ummy nibh euismo.</p>
                            <a class="button-more" href="#">More</a>
                        </div>
                    </div>
                </div>
	</li>
	<li>
		<div class="grid_4 indent-sw-1">
                	<div class="block ico3">
                    	<span></span>
                        <em></em>
                        <div class="block-text">
	                        <strong class="block-title">Step #3</strong>
	                        <p>Lorem ipsum dolor sit amcons ctetuer adipiscing elsd diam non. ummy nibh euismo.</p>
                            <a class="button-more" href="#">More</a>
                        </div>
                    </div>
                </div>
	</li>
  </ul>

</div>

			</div>
            <div class="wrapper">
            	<div class="grid_8 indent-sw-1">
                				<div id="wrap">
  <ul id="mycarousel" class="jcarousel-skin-tango">
   <li>
			<div class="grid_4 indent-sw-1">
                	<div class="block ico1">
                    	<span></span>
                        <em></em>
                        <div class="block-text">
	                        <strong class="block-title">Step #1</strong>
	                        <p>Lorem ipsum dolor sit amcons ctetuer adipiscing elsd diam non. ummy nibh euismo.</p>
                            <a class="button-more" href="#">More</a>
                        </div>
                    </div>
                </div>
	</li>
	<li>
		<div class="grid_4 indent-sw-1">
                	<div class="block ico2">
                    	<span></span>
                        <em></em>
                        <div class="block-text">
	                        <strong class="block-title">Step #2</strong>
	                        <p>Lorem ipsum dolor sit amcons ctetuer adipiscing elsd diam non. ummy nibh euismo.</p>
                            <a class="button-more" href="#">More</a>
                        </div>
                    </div>
                </div>
	</li>
	<li>
		<div class="grid_4 indent-sw-1">
                	<div class="block ico3">
                    	<span></span>
                        <em></em>
                        <div class="block-text">
	                        <strong class="block-title">Step #3</strong>
	                        <p>Lorem ipsum dolor sit amcons ctetuer adipiscing elsd diam non. ummy nibh euismo.</p>
                            <a class="button-more" href="#">More</a>
                        </div>
                    </div>
                </div>
	</li>
  </ul>

</div>

                </div>
                <div class="grid_4">
                	<h3 class="p2">Latest News</h3>
                    <div class="wrapper indent-sw-2">
	                    <div class="wrapper border-4 bot-pad indent-bot2 width-sw-4 indent-r2-sw float-sw-5 style-sw-1">
	                    	<figure class="img-pos img-style"><a class="img-border" href="#"><img src="images/page1-img4.jpg" alt=""></a></figure>
	                        <div class="extra-wrap overflow-sw-1 overflow-sw-3">
	                        	<time class="date-style" datetime="2012-12-12">12-12-2012</time>
                                <div class="p1">
	                            	<a class="link-1" href="#">Lorem ipsum dolor sit amet</a>
                                </div>
	                            <div>Lorem ipsum dolor sit amet consectetuer adipiscing elit, sedam nonummy nibh euis.</div>
	                        </div>
	                    </div>
	                    <div class="wrapper border-4 bot-pad p3 width-sw-4 float-sw-5 style-sw-1">
	                    	<figure class="img-pos img-style"><a class="img-border" href="#"><img src="images/page1-img5.jpg" alt=""></a></figure>
	                        <div class="extra-wrap overflow-sw-1 overflow-sw-3">
	                        	<time class="date-style" datetime="2012-12-12">12-12-2012</time>
                                <div class="p1">
	                            	<a class="link-1" href="#">Lorem ipsum dolor sit amet</a>
                                </div>
	                            <div>Lorem ipsum dolor sit amet consectetuer adipiscing elit, sedam nonummy nibh euismo.</div>
	                        </div>
	                    </div>
                    </div>
                    <a class="button-more" href="#">More</a>
                </div>
            </div>
        </div>
    </section>
    
	<!--==============================aside=================================-->
    <aside>
    	<div class="container_12">
        	<div class="wrapper">
	        	<div class="grid_4 indent-sw-1 width-sw-4 indent-r2-sw">
	            	<h4 class="bot-indent4">About Us</h4>
	                <div class="wrapper">
	                	<figure class="img-pos img-style"><a class="img-border" href="#"><img src="images/page1-img6.jpg" alt=""></a></figure>
	                    <div class="extra-wrap right-pad overflow-sw-1 overflow-sw-2">
	                    	<p class="p3">Lorem ipsum dolor sit ames ectetuer adipiscing elit, sed dia m nonummy nibh euismod tincidunt laordolore magna aiqu  am erat volutpattwisi enimad minimveniam.</p>
	                        <a class="button-more" href="#">More</a>
	                    </div>
	                </div>
	            </div>
	        	<div class="grid_4 indent-sw-1 width-sw-4">
	            	<h4 class="bot-indent4">Services</h4>
	                <ul class="list-1">
	                	<li><a href="#">Lorem ipsum dolor sit amet</a></li>
	                    <li><a href="#">Consectetuer adipiscing elit sed diam</a></li>
	                    <li><a href="#">Nibh euismod tincidunt ut</a></li>
	                    <li><a href="#">Laoreet dolore magna aliquam erat</a></li>
	                    <li class="last"><a href="#">Ut wisi enim ad</a></li>
	                </ul>
	            </div>
	        	<div class="grid_4 display-sw-1">
	            	<h4 class="indent-bot2">Newsletter Sign Up</h4>
	                <form id="subscribe">
	                    <label class="input-bg">
	                        <input type="text" onBlur="if(this.value=='') this.value='Enter your email:'" onFocus="if(this.value =='Enter your email:' ) this.value=''"  value="Enter your email:">
	                    </label>
	                    <a class="button" onClick="document.getElementById('search').submit()"><span><span>Subscribe</span></span></a>
	                    <a class="unsubscribe" href="#">Unsubscribe</a>
	                </form>
	            </div>
            </div>
        </div>
    </aside>
    
	<!--==============================footer=================================-->
    <footer>
    	<div class="container_12">
        	<div class="wrapper">
            	<div class="grid_12">
                	<div class="footer-inner">
				    	Goodwin Solutions &copy; 2012 <a class="link" href="index-5.html">Privacy Policy</a>
				        <div><!-- {%FOOTER_LINK} --></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

<!--LIVEDEMO_00 -->

<script type="text/javascript">
 var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-7078796-5']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();</script>

</body>
</html>