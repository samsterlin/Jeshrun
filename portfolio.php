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
<link href="css/colorbox.css" rel="stylesheet" type="text/css" media="screen" />
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
    #content-inner{padding-top:45px;}
    #search .go{margin:4px 0 0 -24px;}
    #mainportfolio{padding-bottom:590px;}
}    
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
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript">
// initialise plugins
jQuery(function(){
	jQuery('ul.sf-menu').superfish();
});
</script>
<script type="text/javascript" src="js/jquery.colorbox.js"></script>
<script type="text/javascript">
	$(document).ready(function(){				
		$("a[rel='portfolio']").colorbox({transition:"fade"});				
	});
</script>
<script src="js/jquery.cycle.all.js" type="text/javascript"></script>
<script type="text/javascript">
   $(function(){     
        $('#mainportfolio').cycle({
            fx:     'scrollHorz', // You can choose effect do you like, for reference : http://www.malsup.com/jquery/cycle/browser.html
			speed:  'slow',
			timeout: 0,
			pager:  '.pf-menu',
			pagerAnchorBuilder: function(idx, slide) {
            // return sel string for existing anchor
            return '.pf-menu li:eq(' + (idx) + ') a';
        }			    
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
	<div id="outer-container2">
    	<div id="inner-container2">
        	<!-- BEGIN HEADER -->
        	<div id="header-inner">
                <div id="top">
                    <div id="nav-menu">
                        <ul class="sf-menu">
                            <li><a href="index.php">Home</a></li>
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
                </div>
                <div id="sitemap">
                	<strong>You are here</strong> : <a href="index.php">Home</a> &raquo; Company proofs
                </div>
            </div>
            <!-- END OF HEADER -->
            
            <!-- BEGIN CONTENT -->
            <div id="content-inner">          
                <div class="maincontent-fullwidth">
                	<div id="portfolio-main">
                    	<ul class="pf-menu">
                            <li><a href="#">Payment Proof 1</a></li>
                            <li><a href="#">Payment Proof 2</a></li>
                            <li><a href="#">Payment Proof 3</a></li>                                
                            <li><a href="#">Payment Proof 4</a></li>
							<li><a href="#">Payment Proof 4</a></li>
                        </ul>
                    </div>
                	<div id="mainportfolio">
                    <div class="page-portfolio"><!-- PAGE 1 -->
                        <div class="pf-box"><!-- portfolio 1 -->
                        <a href="images/proof/daanamma 2nd payment.jpg" rel="portfolio" title="Payment Proof"><img src="images/proof/feb_2014 (1).jpg" alt="" class="pf-img" width="262" height="171"/></a>
                        <h4>Payment Proof</h4>
                        <p>It's a ICICI Bank payment Proof Reciept. Just Click it and see the full view.</p>
                        </div>
                        <div class="pf-box"><!-- portfolio 2 -->
                        <a href="images/proof/danalakshmi 26-11-2013 (1).jpg" rel="portfolio" title="Payment Proof"><img src="images/proof/feb_2014 (2).jpg" alt="" class="pf-img" width="262" height="171" /></a>
                        <h4>Payment Proof</h4>
                        <p>It's a ICICI Bank payment Proof Reciept. Just Click it and see the full view.</p>
                        </div>
                        <div class="pf-box"><!-- portfolio 3 -->
                        <a href="images/proof/danalakshmi 26-11-2013.jpg" rel="portfolio" title="Payment Proof"><img src="images/proof/feb_2014 (3).jpg" alt="" class="pf-img" width="262" height="171" /></a>
                        <h4>Payment Proof</h4>
                        <p>It's a ICICI Bank payment Proof Reciept. Just Click it and see the full view.</p>
                        </div>
                        <div class="pf-box"><!-- portfolio 4 -->
                        <a href="images/proof/danamma payment proof.jpg" rel="portfolio" title="Payment Proof"><img src="images/proof/feb_2014 (4).jpg" alt="" class="pf-img" width="262" height="171" /></a>
                        <h4>Payment Proof</h4>
                        <p>It's a Indian Bank payment Proof Reciept. Just Click it and see the full view.</p>
                        </div>
                        <div class="pf-box"><!-- portfolio 5 -->
                        <a href="images/proof/ICICI CAPTCHA WORK PAYMENT PROOF...jpg" rel="portfolio" title="Payment Proof"><img src="images/proof/feb_2014 (5).jpg" alt="" class="pf-img" width="262" height="171" /></a>
                        <h4>Payment Proof</h4>
                       <p>It's a Indian Bank payment Proof Reciept. Just Click it and see the full view.</p>
                        </div>
                        <div class="pf-box"><!-- portfolio 6 -->
                        <a href="images/proof/madan 5 th payment.jpg" rel="portfolio" title="Payment Proof"><img src="images/proof/madan 5 th payment.jpg" alt="" class="pf-img" width="262" height="171" /></a>
                        <h4>Payment Proof</h4>
                        <p>It's a ICICI Bank payment Proof Reciept. Just Click it and see the full view.</p>
                        </div>
                    </div><!-- END OF PAGE 1 -->
					
                    <div class="page-portfolio"><!-- PAGE 1 -->
                        <div class="pf-box"><!-- portfolio 1 -->
                        <a href="images/proof/daanamma 2nd payment.jpg" rel="portfolio" title="Payment Proof"><img src="images/proof/daanamma 2nd payment.jpg" alt="" class="pf-img" width="262" height="171"/></a>
                        <h4>Payment Proof</h4>
                        <p>It's a ICICI Bank payment Proof Reciept. Just Click it and see the full view.</p>
                        </div>
                        <div class="pf-box"><!-- portfolio 2 -->
                        <a href="images/proof/danalakshmi 26-11-2013 (1).jpg" rel="portfolio" title="Payment Proof"><img src="images/proof/danalakshmi 26-11-2013 (1).jpg" alt="" class="pf-img" width="262" height="171" /></a>
                        <h4>Payment Proof</h4>
                        <p>It's a ICICI Bank payment Proof Reciept. Just Click it and see the full view.</p>
                        </div>
                        <div class="pf-box"><!-- portfolio 3 -->
                        <a href="images/proof/danalakshmi 26-11-2013.jpg" rel="portfolio" title="Payment Proof"><img src="images/proof/danalakshmi 26-11-2013.jpg" alt="" class="pf-img" width="262" height="171" /></a>
                        <h4>Payment Proof</h4>
                        <p>It's a ICICI Bank payment Proof Reciept. Just Click it and see the full view.</p>
                        </div>
                        <div class="pf-box"><!-- portfolio 4 -->
                        <a href="images/proof/danamma payment proof.jpg" rel="portfolio" title="Payment Proof"><img src="images/proof/danamma payment proof.jpg" alt="" class="pf-img" width="262" height="171" /></a>
                        <h4>Payment Proof</h4>
                        <p>It's a ICICI Bank payment Proof Reciept. Just Click it and see the full view.</p>
                        </div>
                        <div class="pf-box"><!-- portfolio 5 -->
                        <a href="images/proof/ICICI CAPTCHA WORK PAYMENT PROOF...jpg" rel="portfolio" title="Payment Proof"><img src="images/proof/ICICI CAPTCHA WORK PAYMENT PROOF...jpg" alt="" class="pf-img" width="262" height="171" /></a>
                        <h4>Payment Proof</h4>
                       <p>It's a ICICI Bank payment Proof Reciept. Just Click it and see the full view.</p>
                        </div>
                        <div class="pf-box"><!-- portfolio 6 -->
                        <a href="images/proof/madan 5 th payment.jpg" rel="portfolio" title="Payment Proof"><img src="images/proof/madan 5 th payment.jpg" alt="" class="pf-img" width="262" height="171" /></a>
                        <h4>Payment Proof</h4>
                        <p>It's a ICICI Bank payment Proof Reciept. Just Click it and see the full view.</p>
                        </div>
                    </div><!-- END OF PAGE 1 -->
                    
                    <div class="page-portfolio"><!-- PAGE 2 -->
                        <div class="pf-box"><!-- portfolio 7 -->
                        <a href="images/proof/nambi 2-12-2013.jpg" rel="portfolio" title="Payment Proof"><img src="images/proof/nambi 2-12-2013.jpg" alt="" class="pf-img" width="262" height="171" /></a>
                        <h4>Payment Proof</h4>
                        <p>It's a ICICI Bank payment Proof Reciept. Just Click it and see the full view.</p>
                        </div>
                        <div class="pf-box"><!-- portfolio 8 -->
                        <a href="images/proof/nambi 6th payment.jpg" rel="portfolio" title="Payment Proof"><img src="images/proof/nambi 6th payment.jpg" alt="" class="pf-img" width="262" height="171" /></a>
                        <h4>Payment Proof</h4>
                        <p>It's a ICICI Bank payment Proof Reciept. Just Click it and see the full view.</p>
                        </div>
                        <div class="pf-box"><!-- portfolio 9 -->
                        <a href="images/proof/nambi sir 2nd.jpg" rel="portfolio" title="Payment Proof"><img src="images/proof/nambi sir 2nd.jpg" alt="" class="pf-img" width="262" height="171" /></a>
                        <h4>Payment Proof</h4>
                        <p>It's a ICICI Bank payment Proof Reciept. Just Click it and see the full view.</p>
                        </div>
                        <div class="pf-box"><!-- portfolio 10 -->
                        <a href="images/proof/nambi sir 3rd payment.jpg" rel="portfolio" title="Payment Proof"><img src="images/proof/nambi sir 3rd payment.jpg" alt="" class="pf-img" width="262" height="171" /></a>
                        <h4>Payment Proof</h4>
                        <p>It's a ICICI Bank payment Proof Reciept. Just Click it and see the full view.</p>
                        </div>
                        <div class="pf-box"><!-- portfolio 11 -->
                        <a href="images/proof/nambi sir 4 th proof.jpg" rel="portfolio" title="Payment Proof"><img src="images/proof/nambi sir 4 th proof.jpg" alt="" class="pf-img" width="262" height="171" /></a>
                        <h4>Payment Proof</h4>
                       <p>It's a ICICI Bank payment Proof Reciept. Just Click it and see the full view.</p>
                        </div>
                        <div class="pf-box"><!-- portfolio 12 -->
                        <a href="images/proof/Payment proof.jpg" rel="portfolio" title="Payment Proof"><img src="images/proof/Payment proof.jpg" alt="" class="pf-img" width="262" height="171" /></a>
                        <h4>Payment Proof</h4>
                       <p>It's a ICICI Bank payment Proof Reciept. Just Click it and see the full view.</p>
                        </div>
                    </div><!-- END OF PAGE 2 -->
                    
                    <div class="page-portfolio"><!-- PAGE 3 -->
                        <div class="pf-box"><!-- portfolio 7 -->
                        <a href="images/proof/payment.jpg" rel="portfolio" title="Payment Proof"><img src="images/proof/payment.jpg" alt="" class="pf-img" width="262" height="171" /></a>
                        <h4>Payment Proof</h4>
                        <p>It's a ICICI Bank payment Proof Reciept. Just Click it and see the full view.</p>
                        </div>
                        <div class="pf-box"><!-- portfolio 8 -->
                        <a href="images/proof/Punmani payment proof.jpg" rel="portfolio" title="Payment Proof"><img src="images/proof/Punmani payment proof.jpg" alt="" class="pf-img" width="262" height="171" /></a>
                        <h4>Payment Proof</h4>
                        <p>It's a ICICI Bank payment Proof Reciept. Just Click it and see the full view.</p>
                        </div>
                        <div class="pf-box"><!-- portfolio 9 -->
                        <a href="images/proof/raaji kerala.jpg" rel="portfolio" title="Payment Proof"><img src="images/proof/raaji kerala.jpg" alt="" class="pf-img" width="262" height="171" /></a>
                        <h4>Payment Proof</h4>
                        <p>It's a ICICI Bank payment Proof Reciept. Just Click it and see the full view.</p>
                        </div>
                        <div class="pf-box"><!-- portfolio 10 -->
                        <a href="images/proof/ramkumar payment.jpg" rel="portfolio" title="Payment Proof"><img src="images/proof/ramkumar payment.jpg" alt="" class="pf-img" width="262" height="171" /></a>
                        <h4>Payment Proof</h4>
                        <p>It's a ICICI Bank payment Proof Reciept. Just Click it and see the full view.</p>
                        </div>
                        <div class="pf-box"><!-- portfolio 11 -->
                        <a href="images/proof/Sangeetha payment 14th.jpg" rel="portfolio" title="Payment Proof"><img src="images/proof/Sangeetha payment 14th.jpg" alt="" class="pf-img" width="262" height="171" /></a>
                        <h4>Payment Proof</h4>
                        <p>It's a ICICI Bank payment Proof Reciept. Just Click it and see the full view.</p>
                        </div>
                        <div class="pf-box"><!-- portfolio 12 -->
                        <a href="images/proof/saranya payment.jpg" rel="portfolio" title="Payment Proof"><img src="images/proof/saranya payment.jpg" alt="" class="pf-img" width="262" height="171" /></a>
                        <h4>Payment Proof</h4>
                        <p>It's a ICICI Bank payment Proof Reciept. Just Click it and see the full view.</p>
                        </div>
                    </div><!-- END OF PAGE 3 -->
                    
                    <div class="page-portfolio"><!-- PAGE 4 -->
                        <div class="pf-box"><!-- portfolio 7 -->
                        <a href="images/proof/saraswathi payment proof.jpg" rel="portfolio" title="Payment Proof"><img src="images/proof/saraswathi payment proof.jpg" alt="" class="pf-img" width="262" height="171" /></a>
                        <h4>Payment Proof</h4>
                        <p>It's a ICICI Bank payment Proof Reciept. Just Click it and see the full view.</p>
                        </div>
                        <div class="pf-box"><!-- portfolio 8 -->
                        <a href="images/proof/saraswathi payment prrof 4.jpg" rel="portfolio" title="Payment Proof"><img src="images/proof/saraswathi payment prrof 4.jpg" alt="" class="pf-img" width="262" height="171" /></a>
                        <h4>Payment Proof</h4>
                        <p>It's a ICICI Bank payment Proof Reciept. Just Click it and see the full view.</p>
                        </div>
                        <div class="pf-box"><!-- portfolio 9 -->
                        <a href="images/proof/Saraswathy payment 14th.jpg" rel="portfolio" title="Payment Proof"><img src="images/proof/Saraswathy payment 14th.jpg" alt="" class="pf-img" width="262" height="171" /></a>
                        <h4>Payment Proof</h4>
                       <p>It's a ICICI Bank payment Proof Reciept. Just Click it and see the full view.</p>
                        </div>
                        <div class="pf-box"><!-- portfolio 10 -->
                        <a href="images/proof/saravanan 4-12-2013.jpg" rel="portfolio" title="Payment Proof"><img src="images/proof/saravanan 4-12-2013.jpg" alt="" class="pf-img" width="262" height="171" /></a>
                        <h4>Payment Proof</h4>
                        <p>It's a ICICI Bank payment Proof Reciept. Just Click it and see the full view.</p>
                        </div>
                        <div class="pf-box"><!-- portfolio 11 -->
                        <a href="images/proof/sreemadi.jpg" rel="portfolio" title="Payment Proof"><img src="images/proof/sreemadi.jpg" alt="" class="pf-img" width="262" height="171" /></a>
                        <h4>Payment Proof</h4>
                        <p>It's a ICICI Bank payment Proof Reciept. Just Click it and see the full view.</p>
                        </div>
                        <div class="pf-box"><!-- portfolio 12 -->
                        <a href="images/proof/sumathy madam 4-12-2013.jpg" rel="portfolio" title="Payment Proof"><img src="images/proof/sumathy madam 4-12-2013.jpg" alt="" class="pf-img" width="262" height="171" /></a>
                        <h4>Payment Proof</h4>
                        <p>It's a ICICI Bank payment Proof Reciept. Just Click it and see the full view.</p>
                        </div>
                    </div><!-- END OF PAGE 4 -->
                    
                    </div>
                    <div class="two-column">
                    	<div class="pf-icon"><img src="images/portfolio-icon1.jpg" alt="" /></div>
                    <h4>make more efficient time</h4>
                    <p>We collects your information in order to record and support your participation in the activities you select. The information that you provide is also used as part of our effort to keep you informed about special offers and other products and services of JESHURUN SOFT SOLUTIONS and selected third parties.</p>
                    </div>
                    <div class="front-spacer">&nbsp;</div>
                    <div class="two-column">
                    	<div class="pf-icon"><img src="images/portfolio-icon2.jpg" alt="" /></div>
                    <h4>make your data safe</h4>
                    <p>We will not sell, rent or lease to others telephone numbers or e-mail addresses. We will share the personal data you provide only with other Jeshurun entities and/or business partners who are acting on our behalf for the uses described above, except as provided below (see Consent).</p>
                    </div>                       
                </div>
                         
            </div>
            <!-- END CONTENT --> 
                       
        </div>
        <!-- BEGIN OF FOOTER -->
 <!--Advertise ment-->
 
 <!--      
    <div style="position:fixed; top:54%; right:1%;fixed;z-index:100;" id="img11">
    	<a href=""><img src="images/cheap-domain-offer.jpg" alt="cheap_domain_offer"></a>
    	<img src="images/close_button.png" alt="close" style="position:absolute; top:3px; right:1px; z-index:1000;" id="img22" onclick="$('#img11').hide('slow');"> 
    </div> 
-->       
  <!--End Advertise ment-->             
<?php 
include_once('footer.php');
?>