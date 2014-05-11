<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta name="robots" content="index, follow" />
  <meta name="keywords" content="" />
  <meta name="title" content="" />
  <meta name="description" content="" />
<title>Jeshrun InfoSoft Solutions</title>

<!-- ////////////////////////////////// -->
<!-- //      Start Stylesheets       // -->
<!-- ////////////////////////////////// -->
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/superfish.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>    
	<link href="css/ie6.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/DD_belatedPNG.js"></script>
	<script type="text/javascript"> 
	   DD_belatedPNG.fix('#top');
	   DD_belatedPNG.fix('img');
       DD_belatedPNG.fix('.desc');
	   DD_belatedPNG.fix('.news-spacer');            
	</script>    
<![endif]-->
<!--[if IE 7]>    
	<style type="text/css">
    .maincontent{padding-bottom:50px;}
    #search .go{margin:4px 0 0 -24px;}
    </style>
<![endif]-->
<!--[if IE 8]>    
	<style type="text/css">
    #search .go{margin:4px 0 0 -24px;}
    </style>
<![endif]-->

<!-- ////////////////////////////////// -->
<!-- //      Javascript Files        // -->
<!-- ////////////////////////////////// -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript">
// initialise plugins
jQuery(function(){
	jQuery('ul.sf-menu').superfish();
});
</script>
<script src="js/jquery.cycle.all.js" type="text/javascript"></script>
<script type="text/javascript">
  $(function() {    
	$('.newsflash-text').cycle({
            timeout: 5000,  // milliseconds between slide transitions (0 to disable auto advance)
            fx:      'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...                        
            pause:   0,	  // true to enable "pause on hover"
            pauseOnPagerHover: 0 // true to pause when hovering over pager link
    });      
});
</script>
<script type="text/javascript" src="js/jqFancyTransitions.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
    $('#slide-image-type2').jqFancyTransitions({
      width: 960, 
      height: 328, 
      strips: 40,
      delay: 5000,
      stripDelay: 70	  
    });  
  });
</script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/Telegrafico_400.font.js"></script>
<script type="text/javascript">
            Cufon.replace('http://themedemo.indonez.com/Triveo/Ivory-green/h1') ('h2') ('h3') ('h4') ('h5');
</script>  
</head>
<body>
	<div id="outer-container">
    	<div id="inner-container">
        	<!-- BEGIN HEADER -->
        	<div id="header">
                <div id="top">
                    <div id="nav-menu">
                        <ul class="sf-menu">
                            <li class="current"><a href="index.php">Home</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="#">Services</a>
                            	<ul class="subnav">
                                    <li><a href="how_join.php">How to Join</a></li>
                                    <li><a href="demo.php">Demo</a></li>
                                    <li><a href="bank_details.php">Bank Details</a></li>
                                    <li><a href="portfolio.php">Payment Proofs</a></li>
                                    <li><a href="ad_post.php">AD Posting Jobs</a></li>
                                    <li><a href="free_job.php">Free Jobs</a></li>
                            	</ul>
                            </li>                          
                            <li><a href="license.php">License</a></li>
                            <li><a href="services.php">Softwares</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                    <div id="search-box">
                        <form id="search" action="#" method="get">
                                <fieldset class="search-fieldset">
                                <input type="text" id="s" value="" />
                                <input type="submit" class="go" value="" />
                                </fieldset>      						
                        </form>
                    </div>
                    <div id="logo">
                    	<a href="index.php"><img src="images/logo.png" alt="" /></a>
                    </div>