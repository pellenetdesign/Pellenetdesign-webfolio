<!DOCTYPE html>
<!--[if IE 7]>         <html class="ie7 lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="ie8 lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="ie9 lt-ie10"> <![endif]-->
<!--[if gt IE 10]><!--> <html class="version10"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="Jarl HELIN, Infographiste, int&eacute;grateur et  Frontend web designer. Sp&eacute;cialis&eacute; dans le UX, IA et d'appliquer un code semantique suivant le standard du W3 Consortium">
        <meta name="viewport" content="width=device-width" initial-scale="1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="publisher" content="Pellenet Design"/>
		<meta name="Keywords" lang="en-us" content="jarl helin, recherche un emploi, musicien, graphique et web design, entrepreneur, Rhone Alpes, Grenoble, Lyon, Valence, Romans sur Isere, trilingue, anglais, suedois, francais, flash, cinema 4d, curriculume vitae, cv,  multi platforme, compatible, compatibilite"/>
		<meta name="robots" content="index, follow"/>
		<meta name="revisit-after" content="7 days"/>
		<meta name="author" lang="en" content="Jarl Pelle Helin"/>
		<meta name="generator" content="Drupal 7"/>
		<!--<meta name="msvalidate.01" content="454340E71315CEC340C6935C700AD047" />-->
		<!--no highlight in IE
		<meta name="msapplication-tap-highlight" content="no" />-->
		<!--https://developers.facebook.com/docs/opengraph/tutorial/
		<meta property="og:title" content="">
		<meta property="og:description" content="">	
		<meta property="og:image" content="">-->
		<!--https://dev.twitter.com/docs/cards -->
		<!--<meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="@pellenetdesign">
		<meta name="twitter:creator" content="@pellenetdesign">-->
		<!--<meta name="twitter:url" content="http://www.example.com/path/to/page.html">
		<meta name="twitter:title" content="">
		<meta name="twitter:description" content="">
		<meta name="twitter:image" content="http://www.example.com/path/to/image.jpg">-->
		<!--Canonical URL - Signal to search engines and others "Use this URL for this page!" Useful when parameters after a # or ? is used to control the display state of a page. http://www.example.com/cart.html?shopping-cart-open=true can be indexed as the cleaner, more accurate http://www.example.com/cart.html.-->
		<link rel="canonical" href="http://pellenetdesign.fr/">
		<!--http://www.rssboard.org/rss-specification-->
		<link rel="alternate" type="application/rss+xml" title="RSS" href="/rss.xml">
		<!--Your server may be notified when another site links to yours. The href attribute should contain the location of your pingback service.
		<link rel="pingback" href="">-->
		<!--Give your Pinned Site a tooltip - You know — a tooltip. A little textbox that appears when the user holds their mouse over your Pinned Site's icon.
		<meta name="msapplication-tooltip" content="I Make Ideas Become Websites">-->
      
       <!-- media-queries.js (fallback) -->
        <!--[if lt IE 9]>
            <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
        <![endif]-->
        
        <!-- html5.js -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->      
        
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<script src="js/packages/cssfx.min.js"></script> 
        <!--[if lt IE 8]>
          <script src="less/bootstrap/font-awesome-ie7.less"></script>
         <![endif]-->      
		<link rel=”shortcut icon” href=”favicon.ico”>
		<link rel=”icon” href=”animated_favicon.gif”>
        <script src="js/distributions/modernizr.custom.full.min.js"></script>
    	</head>
		<body>
<div class="shell">        
    <div class="container-fluid">
        <aside class="row-fluid hidden-phone topbar">
                <ul class="unstyled span2 row-fluid">
                    <li class="span3"><a href="#" title="Fran&ccedil;ais"><img src="img/icons/FRA.png" class="img-circle" alt="French"></a></li>
                    <li class="span3 offset1"><a href="#" title="English"><img src="img/icons/ENG.png" class="img-circle" alt="English"></a></li>
                    <li class="span3 offset1"><a href="#" title="Svenska"><img src="img/icons/SWE.png" class="img-circle" alt="Swedish"></a></li>
                </ul>
            <div id="userdetails" class="span6"><!--User ID in Desktop Mode-->
                <ul class="unstyled row-fluid">
                    <li class="span2 hidden-tablet">
                        <div class="icon-flag"></div>
                        <?php echo $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 5); ?>
                    </li>
                    <li class="span2 hidden-tablet">
                        <div class="icon-globe"></div>
                                    <?php
                                    $ua = $_SERVER["HTTP_USER_AGENT"];
                                    /* ==== Detect the UA ==== */
                                    // Chrome
                                    $chrome = strpos($ua, 'Chrome') ? true : false; // Google Chrome
                                    // Firefox
                                    $firefox = strpos($ua, 'Firefox') ? true : false; //  Firefox
                                    // Opera
                                    $opera = preg_match("/\bOpera\b/i", $ua); //  Opera
                                    // Safari
                                    $safari = strpos($ua, 'Safari') ? true : false; //  Safari
                                    
                                    if ($ua) {
                                    // ---- Test if Firefox ----
                                    if ($firefox) {echo 'Firefox';}
                                    // ---- Test if Safari or Chrome ----
                                    elseif ( ($safari || $chrome) && !$iphone) {
                                    if ($safari && !$chrome) { // Test if Safari and not Chrome
                                    echo 'Safari';}
                                    elseif ($chrome) { echo 'Chrome';}
                                        }
                                    // ---- Test if Opera ----
                                    elseif ($opera) { echo 'Opera';}
                                    // ---- If none of the above ----
                                    else {echo 'IE';}
                                    }
                                ?>
                    </li>
                    <li class="span3 hidden-tablet">
                        <div class="icon-desktop"></div>
                               <?php
                                            $OSList = array
                                            (
                                                    // Match user agent string with operating systems
                                                    'Windows 3.11' => 'Win16',
                                                    'Windows' => 'Windows',
                                                    'Open BSD' => 'OpenBSD',
                                                    'Sun OS' => 'SunOS',
                                                    'Mac OS' => 'Macintosh',
                                                    'QNX' => 'QNX',
                                                    'BeOS' => 'BeOS',
                                                    'OS/2' => 'OS/2',
                                                    'Search Bot'=>'(nuhk)|(Googlebot)|(Yammybot)|(Openbot)|(Slurp)|(MSNBot)|(Ask Jeeves/Teoma)|(ia_archiver)'
                                            );
                                             
                                            // Loop through the array of user agents and matching operating systems
                                            foreach($OSList as $CurrOS=>$Match)
                                            {
                                                    // Find a match
                                                    if (eregi($Match, $_SERVER['HTTP_USER_AGENT']))
                                                    {
                                                            // We found the correct match
                                                            break;
                                                    }
                                            }
                                            // You are using Windows Vista
                                            echo $CurrOS;
                                            
                                            ?>
                    </li>
                    <li class="span4">
                        <div class="icon-user"></div>
                        Hello <a href="#" title="Login">Guest</a>
                    </li>
                </ul>
            </div>
            <nav class="span4 icons"><!--Social buttons in Desktop Mode-->
                <ul class="unstyled row-fluid ttBottom">
                    <li class="span2"><a href="http://www.linkedin.com/pub/jarl-helin/28/693/954/" title="Jarl on LinkedIn">&#xf08c;</a></li>
                    <li class="span2"><a href="https://plus.google.com/u/0/116184257452506507653/posts?tab=XX" title="Jarl on Google+">&#xf0d4;</a></li>
                    <li class="span2"><a href="https://twitter.com/pellenetDesign" title="Tweet Me!">&#xf081;</a></li>
                    <li class="span2"><a href="http://pinterest.com/pellehelin/" title="Pin Me!">&#xf0d3;</a></li>
                    <li class="span3"><a href="http://www.flickr.com/photos/pellenet" title="Jarl on Flickr">&#xf111;&#xf111;</a></li>
                </ul>
            </nav>
        </aside>
        <!--[if lt IE 7]>
        <aside class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.
        </aside>--><!--<![endif]-->
        <header role="banner" class="row-fluid">
            <div role="img" class="span1">
                <a href="#" title="Logo Home">
                    <img src="img/icons/logo1024.png" class="visible-desktop" alt="Logotype Desktop">
                    <img src="img/icons/logoTablet.png" class="visible-tablet" alt="Logotype Tablet">
                </a>
            </div>
        <div class="navbar span11">
            <div class="navbar-inner">
                <div class="row-fluid">  
                    <ul id="mainNav" class="nav">
                        <li class="active"><a class="active" href="#">Home</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Resume</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                    <ul class="nav connect">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Connect
                            <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li role="application">
                                    <a href="#">
                                    <div class="icon-comments-alt"></div>
                                    Live chat 
                                    </a>
                                </li>
                                <li role="application">
                                    <a href="#">
                                    <div class=" icon-cog"></div>
                                    Login
                                    </a>
                                </li>
                                <li role="application">
                                    <a href="facetime://jarl@pellenetdesign.com">
                                    <div class=" icon-facetime-video"></div>
                                    Facetime
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul><!--end nav dropdown-->
                    <form class="navbar-search pull-right visible-desktop">  
                        <input type="text" class="search-query" placeholder="Search"> 
                    </form>  
                </div><!--end row-->
            </div>
        </div>  <!--end navbar-->
        </header>
        <section id="main">
            <article class="row-fluid"  role="main">
                <div id="mainCarousel" class="span8 mainCarousel slide ttTop">
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <div class="active item">
                            <img class="img-background" src="img/photos/slides/mainCarousel/backgrounds/imgSlide1.png" alt="Image">
                           <!-- <div class="carousel-caption">
                                <p>Caption text here</p>
                            </div>-->
                            <div class="carousel-caption-center-left">
                                <div class="inner-caption">
                                    <h4>Hello <a href="#" title="Login">Guest</a></h4>
                                    <p>I am a graphic webdesigner solving problems for clients who doesn't want to or just doesn't have the time to..</p>
                                     <p class="hire-me"><a href="#" title="Check out my resume"><img src="img/icons/Available-for-hire.png" alt="image"></a></p>
                                    <a class="icons pull-right" href="#" title="Read More">&#xf055;</a>
                                </div>
                            </div>
                             <div class="carousel-caption-center-right">
                                <div class="inner-caption">
                                   <a href="#"> <img src="img/photos/misc/profile.png" alt="image"></a>
                                </div>
                            </div>
                        </div><!--end item-->
                        <div class="item">
                            <img class="img-background" src="img/photos/slides/mainCarousel/backgrounds/imgSlide2.png" alt="Image">
                            <!-- <div class="carousel-caption">
                                <p>Caption text here</p>
                            </div>-->
                              <div class="carousel-caption-center-left-large">
                                <div class="inner-caption">
                                    <div class="row-fluid">
                                        <ul class="unstyled span3">
                                            <li><div class="icon-tablet icons"></div></li>
                                            <li><div class="icon-comments-alt icons"></div></li>
                                            <li><div class="icon-money icons"></div></li>
                                        </ul>
                                        <ul class="unstyled span9">
                                            <li> <a href="#" title="Send me a message">A Mobile web-app?</a></li>
                                            <li><a href="#" title="Send me a message">A Blog?</a></li>
                                            <li><a href="#" title="Send me a message">An e-commerce?</a></li>
                                        </ul>
                                    </div><!--row fluid-->
                                        <h4>I MAKE IDEAS BECOME WEBSITES</h4>
                                </div>
                            </div> 
                        <div class=" newsletter-right input-prepend input-append">
                           <button class="btn" type="button">@</button>
                            <input class="input-small" type="text" placeholder="Email here">
                            <button class="btn icons" type="button">&#xf061;</button>
                        </div>        
                        </div><!--end item-->
                        <div class="item">
                            <img class="img-background" src="img/photos/slides/mainCarousel/backgrounds/imgSlide3.png" alt="Image"> 
                        <div class=" newsletter-left input-prepend input-append">
                           <button class="btn icons" type="button">&#xf060;</button>
                            <input class="input-small" type="text" placeholder="Email here">
                            <button class="btn" type="button">@</button>
                        </div>     
                              <div class="carousel-caption-center-right-large">
                                <div class="inner-caption">
                                <div class="row-fluid">
                                        <ul class="unstyled span3">
                                            <li><div class="icon-credit-card icons"></div></li>
                                            <li><div class="icon-envelope icons"></div></li>
                                            <li><div class="icon-file icons"></div></li>
                                        </ul>
                                        <ul class="unstyled span9">
                                            <li> <a href="#" title="Send me a message">A new business card?</a></li>
                                            <li><a href="#" title="Send me a message">Flyers?</a></li>
                                            <li><a href="#" title="Send me a message">Posters?</a></li>
                                        </ul>
                                    </div><!--row fluid-->
                                    <h4>YOU NAME IT &amp; I'LL FRAME IT</h4>
                                </div>
                            </div>        
                    </div><!--end item-->
                    </div><!--end carousel inner-->
                    <ul class="carousel-indicators">
                        <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#mainCarousel" data-slide-to="1"></li>
                        <li data-target="#mainCarousel" data-slide-to="2"></li>
                    </ul>
                </div><!--end mainCarousel-->
                <div class="span4 hidden-phone"><!--desktop mode >=1024-->
                    <div id="carouselNewsfeed" class="carouselNewsfeed slide visible-desktop">
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                     <div class="item">
                            <div class="row-fluid">
                                <h4 class="span6 offset3 ttBottom"><a href="#" title="Read posts by category">Geektastic</a></h4>
                            </div>
                            <div class="row-fluid">
                                  <div class="published-date span3 offset1">
                                     <h5 class="date ttTop"><a href="#" title="Read Posts by date">May 1</a></h5>
                                     <div class="author ttRight"><a href="#" title="Author"><img  src="img/icons/gravatar.png" class="img-polaroid-gravatar" alt="Gravatar"></a></div>
                                     <p class="year ttBottom"><a href="#" title="Read Posts by year">2013</a></p>
                                </div><!--end published-date span-->
                                <p class="span6 ttTop">Proin ut est velit, sed adipiscing neque. Sed sed sem urna. In pretium nibh sit amet velit eleifend porta. Proin ut est velit, sed adipiscing neque. Sed sed sem urna. In pretium nibh sit amet velit eleifend porta.</p>
                            </div><!--end row-fluid-->
                           <ul class="newsfeed-buttons unstyled ttTop">
                                <li class="pull-left"><a class="icons" href="#" title="Read More">&#xf055;</a></li>
                                <li class="pull-left"><a class="icons" href="#" title="Comment More">&#xf075;</a></li>
                                <li class="pull-left"><a class="icons"  href="#" title="Share More">&#xf045;</a></li>
                            </ul><!--end news feed buttons-->
                            <div class="row-fluid carousel-caption-bottom">
                                <div class="icons span1 offset1">&#xf0c1;</div>
                                <ul class="unstyled span9 offset1 tags ttTop">
                                    <li class="pull-left"><a href="#" title="Read posts by tag">Tag</a></li>
                                    <li class="pull-left"><a href="#" title="Read posts by tag">Tags</a></li>
                                    <li class="pull-left"><a href="#" title="Read posts by tag">Tagged</a></li>
                                </ul>
                            </div><!--end row-fluid, carousel-caption-bottom-->
                        </div><!--end Item-->
                         <div class="item">
                            <div class="row-fluid">
                                <h4 class="span6 offset3 ttBottom"><a href="#" title="Read posts by category">Geektastic</a></h4>
                            </div>
                            <div class="row-fluid">
                                  <div class="published-date span3 offset1">
                                     <h5 class="date ttTop"><a href="#" title="Read Posts by date">May 2</a></h5>
                                     <div class="author ttRight"><a href="#" title="Author"><img  src="img/icons/gravatar.png" class="img-polaroid-gravatar" alt="Gravatar"></a></div>
                                     <p class="year ttBottom"><a href="#" title="Read Posts by year">2013</a></p>
                                </div><!--end published-date span-->
                                <p class="span6 ttTop">Proin ut est velit, sed adipiscing neque. Sed sed sem urna. In pretium nibh sit amet velit eleifend porta. Proin ut est velit, sed adipiscing neque. Sed sed sem urna. In pretium nibh sit amet velit eleifend porta.</p>
                            </div><!--end row-fluid-->
                           <ul class="newsfeed-buttons unstyled ttTop">
                                <li class="pull-left"><a class="icons" href="#" title="Read More">&#xf055;</a></li>
                                <li class="pull-left"><a class="icons" href="#" title="Comment More">&#xf075;</a></li>
                                <li class="pull-left"><a class="icons"  href="#" title="Share More">&#xf045;</a></li>
                            </ul><!--end news feed buttons-->
                            <div class="row-fluid carousel-caption-bottom">
                                <div class="icons span1 offset1">&#xf0c1;</div>
                                <ul class="unstyled span9 offset1 tags ttTop">
                                    <li class="pull-left"><a href="#" title="Read posts by tag">Tag</a></li>
                                    <li class="pull-left"><a href="#" title="Read posts by tag">Tags</a></li>
                                    <li class="pull-left"><a href="#" title="Read posts by tag">Tagged</a></li>
                                </ul>
                            </div><!--end row-fluid, carousel-caption-bottom-->
                        </div><!--end Item-->
                         <div class="item active">
                            <div class="row-fluid">
                                <h4 class="span6 offset3 ttBottom"><a href="#" title="Read posts by category">Geektastic</a></h4>
                            </div>
                            <div class="row-fluid">
                                  <div class="published-date span3 offset1">
                                     <h5 class="date ttTop"><a href="#" title="Read Posts by date">May 3</a></h5>
                                     <div class="author ttRight"><a href="#" title="Author"><img  src="img/icons/gravatar.png" class="img-polaroid-gravatar" alt="Gravatar"></a></div>
                                     <p class="year ttBottom"><a href="#" title="Read Posts by year">2013</a></p>
                                </div><!--end published-date span-->
                                <p class="span6 ttTop">Proin ut est velit, sed adipiscing neque. Sed sed sem urna. In pretium nibh sit amet velit eleifend porta. Proin ut est velit, sed adipiscing neque. Sed sed sem urna. In pretium nibh sit amet velit eleifend porta.</p>
                            </div><!--end row-fluid-->
                           <ul class="newsfeed-buttons unstyled ttTop">
                                <li class="pull-left"><a class="icons" href="#" title="Read More">&#xf055;</a></li>
                                <li class="pull-left"><a class="icons" href="#" title="Comment More">&#xf075;</a></li>
                                <li class="pull-left"><a class="icons"  href="#" title="Share More">&#xf045;</a></li>
                            </ul><!--end news feed buttons-->
                            <div class="row-fluid carousel-caption-bottom">
                                <div class="icons span1 offset1">&#xf0c1;</div>
                                <ul class="unstyled span9 offset1 tags ttTop">
                                    <li class="pull-left"><a href="#" title="Read posts by tag">Tag</a></li>
                                    <li class="pull-left"><a href="#" title="Read posts by tag">Tags</a></li>
                                    <li class="pull-left"><a href="#" title="Read posts by tag">Tagged</a></li>
                                </ul>
                            </div><!--end row-fluid, carousel-caption-bottom-->
                        </div><!--end Item-->
                    </div><!--end carousel inner-->
                    <ul class="carousel-indicators">
                        <li data-target="#carouselNewsfeed" data-slide-to="0"></li>
                        <li data-target="#carouselNewsfeed" data-slide-to="1"></li>
                        <li data-target="#carouselNewsfeed" data-slide-to="2" class="active"></li>
                    </ul>
                </div><!--end carousel Newsfeed-->
            </div><!--end span4 hidden-phone-->
            </article>
            <article class="row-fluid">
                <div id="showcase" class="span8">
                    <ul class="thumbnails">
                    <li class="span4">
                            <div class="thumbnail">
                                <img src="http://placehold.it/300x200" alt="image">
                                <h3><a href="#" title="read all Thumbnails">Photography</a></h3>
                                <p>Sed at aliquet lectus. Maecenas at arcu id arcu hendrerit rhoncus vitae in velit. Lorem ipsum dolor sit amet, adipiscing elit. </p>
                                <p class="icons">
                                    <a class="pull-right" href="#" title="Read More">&#xf055;</a>
                                </p>
                                <div class="clearfix"></div>
                                <div class="row-fluid">
                                    <ul class="span10 offset1 unstyled tags">
                                        <li class="pull-left"><a href="#" title="Read posts by tag">Tag</a></li>
                                        <li class="pull-left"><a href="#" title="Read posts by tag">Tags</a></li>
                                        <li class="pull-left"><a href="#" title="Read posts by tag">Tagged</a></li>
                                    </ul>
                                </div><!--end row-fluid-->
                            </div><!--end thumbnail-->
                        </li>
                        <li class="span4">
                            <div class="thumbnail">
                                <img src="http://placehold.it/300x200" alt="image">
                                <h3><a href="#" title="read all Thumbnails">Websites</a></h3>
                                <p>Sed at aliquet lectus. Maecenas at arcu id arcu hendrerit rhoncus vitae in velit. Lorem ipsum dolor sit amet, adipiscing elit. </p>
                                <p class="icons">
                                    <a class="pull-right" href="#" title="Read More">&#xf055;</a>
                                </p>
                                <div class="clearfix"></div>
                                <div class="row-fluid">
                                    <ul class="span10 offset1 unstyled tags ">
                                        <li class="pull-left"><a href="#" title="Read posts by tag">Tag</a></li>
                                        <li class="pull-left"><a href="#" title="Read posts by tag">Tags</a></li>
                                        <li class="pull-left"><a href="#" title="Read posts by tag">Tagged</a></li>
                                    </ul>
                                </div><!--end row-fluid-->
                            </div><!--end thumbnail-->
                        </li>
                        <li class="span4">
                            <div class="thumbnail">
                                <img src="http://placehold.it/300x200" alt="image">
                                <h3><a href="#" title="read all Thumbnails">Print</a></h3>
                                <p>Sed at aliquet lectus. Maecenas at arcu id arcu hendrerit rhoncus vitae in velit. Lorem ipsum dolor sit amet, adipiscing elit. </p>
                                <p class="icons">
                                    <a class="pull-right" href="#" title="Read More">&#xf055;</a>
                                </p>
                                <div class="clearfix"></div>
                                <div class="row-fluid">
                                    <ul class="span10 offset1 unstyled tags ">
                                        <li class="pull-left"><a href="#" title="Read posts by tag">Tag</a></li>
                                        <li class="pull-left"><a href="#" title="Read posts by tag">Tags</a></li>
                                        <li class="pull-left"><a href="#" title="Read posts by tag">Tagged</a></li>
                                    </ul>
                                </div><!--end row-fluid-->
                            </div><!--end thumbnail-->
                        </li>
                    </ul>
                </div><!--end showcase-->
                <div id="socialFeed" class="span4 tabbable visible-desktop">
                    <ul class="nav nav-tabs nav-tab-coloring" id="socialFeedTab">
                        <li class="active"><a href="#flickr" data-toggle="tab">FlickR</a></li>
                        <li><a href="#tumblr" data-toggle="tab">Tumblr</a></li>
                        <li><a href="#messageform" data-toggle="tab">Message</a></li>
                    </ul>
                    <div class="tab-content ttTop">
                        <div class="tab-pane" id="flickr">
                        <div class="icons"><a title="Jarl on flickr" href="http://www.flickr.com/photos/pellenet">&#xf111; &#xf111;</a></div>
                            <a rel="" href="http://www.flickr.com/photos/41538967@N06/6155597668/"><img  alt="Trafik" src="http://farm7.staticflickr.com/6210/6155597668_2bd1418838_s.jpg"></a>				
                            <a rel="" href="http://www.flickr.com/photos/41538967@N06/6155595644/"><img alt="Toys" src="http://farm7.staticflickr.com/6064/6155595644_afd9204557_s.jpg"></a>
                            <a rel="" href="http://www.flickr.com/photos/41538967@N06/6155595436/"><img alt="Neighbour" src="http://farm7.staticflickr.com/6065/6155595436_4f8a4d9b80_s.jpg"></a>
                            <a rel="" href="http://www.flickr.com/photos/41538967@N06/6155035505/"><img alt="Folks" src="http://farm7.staticflickr.com/6061/6155035505_7c66c14475_s.jpg"></a>
                            <a rel="" href="http://www.flickr.com/photos/41538967@N06/6155581916/"><img alt="Mormor" src="http://farm7.staticflickr.com/6152/6155581916_e18b356f4b_s.jpg"></a>
                            <a rel="" href="http://www.flickr.com/photos/41538967@N06/6155582962/"><img alt="Miami Vice" src="http://farm7.staticflickr.com/6187/6155582962_63c591e160_s.jpg"></a>
                            <a rel="" href="http://www.flickr.com/photos/41538967@N06/6155038651/"><img alt="French Proverb" src="http://farm7.staticflickr.com/6208/6155038651_4d7370c27d_s.jpg"></a>
                            <a rel="" href="http://www.flickr.com/photos/41538967@N06/6155031711/"><img alt="Nattljus" src="http://farm7.staticflickr.com/6207/6155031711_706c71454c_s.jpg"></a>
                            <a rel="" href="http://www.flickr.com/photos/41538967@N06/6155024053/"><img alt="Arbre" src="http://farm7.staticflickr.com/6069/6155024053_ba85d91140_s.jpg"></a>
                            <a rel="" href="http://www.flickr.com/photos/41538967@N06/6155026909/"><img alt="Fin" src="http://farm7.staticflickr.com/6159/6155026909_dc1620398c_s.jpg"></a>
                            <a rel="" href="http://www.flickr.com/photos/41538967@N06/6155572820/"><img alt="Mort" src="http://farm7.staticflickr.com/6196/6155572820_8e33db1909_s.jpg"></a>
                            <a rel="" href="http://www.flickr.com/photos/41538967@N06/6155019959/"><img alt="Scape" src="http://farm7.staticflickr.com/6199/6155019959_d7b1c7f55b_s.jpg"></a>
                            <a rel="" href="http://www.flickr.com/photos/41538967@N06/6155562170/"><img alt="Position" src="http://farm7.staticflickr.com/6181/6155562170_cd42027f3e_s.jpg"></a>
                            <a rel="" href="http://www.flickr.com/photos/41538967@N06/6155565704/"><img alt="Water" src="http://farm7.staticflickr.com/6177/6155565704_e93a328162_s.jpg"></a>
                            <a rel="" href="http://www.flickr.com/photos/41538967@N06/6155011733/"><img alt="Panneau" src="http://farm7.staticflickr.com/6203/6155011733_3cdd737284_s.jpg"></a>
                            <a rel="" href="http://www.flickr.com/photos/41538967@N06/6164984486/"><img alt="Roman" src="http://farm7.staticflickr.com/6154/6164984486_9e273f7049_s.jpg"></a>
                            <a rel="" href="http://www.flickr.com/photos/41538967@N06/6164450893/"><img alt="Magic Flute" src="http://farm7.staticflickr.com/6151/6164450893_07681d5738_s.jpg"></a>
                            <a rel="" href="http://www.flickr.com/photos/41538967@N06/6155014187/"><img alt="Home" src="http://farm7.staticflickr.com/6064/6155014187_37a8c90443_s.jpg"></a>
                            <a rel="" href="http://www.flickr.com/photos/41538967@N06/6155566092/"><img alt="Christmas" src="http://farm7.staticflickr.com/6204/6155566092_360a912825_s.jpg"></a>
                            <a rel="" href="http://www.flickr.com/photos/41538967@N06/6155038989/"><img alt="Herbie" src="http://farm7.staticflickr.com/6193/6155038989_78bf7e8b90_s.jpg"></a>
                            <a rel="" href="http://www.flickr.com/photos/41538967@N06/7106678949/"><img alt="Together" src="http://farm8.staticflickr.com/7267/7106678949_0d1dbf74e9_s.jpg"></a>
                            <a rel="" href="http://www.flickr.com/photos/41538967@N06/7149362557/"><img alt="Palmtree" src="http://farm9.staticflickr.com/8025/7149362557_eacc0157c7_s.jpg"></a>
                            <a rel="" href="http://www.flickr.com/photos/41538967@N06/7149362353/"><img alt="Ideal" src="http://farm8.staticflickr.com/7228/7149362353_1fcf718fb8_s.jpg"></a>
                            <a rel="" href="http://www.flickr.com/photos/41538967@N06/7393192672/"><img alt="Campsite" src="http://farm8.staticflickr.com/7228/7393192672_329f900d7b_s.jpg"></a>
                            <a rel="" href="http://www.flickr.com/photos/pellenet/6155045777/"><img src="http://farm7.staticflickr.com/6086/6155045777_6be18ac9e4.jpg" alt="Folks"></a>
                        </div>
                        <div class="tab-pane" id="tumblr">
                        <a title="Jarl on Tumblr" href="http://www.tumblr.com/blog/movingbacktofrance"><img src="img/icons/tumblr_logo.png" alt="Tumblr Logo"></a>
                        <script type="text/javascript" src="http://movingbacktofrance.tumblr.com/js?num=16"></script>
                        </div><!--end pane tumblr-->
                        <div class="tab-pane" id="messageform">
                                <form class="row-fluid	">
                                <fieldset class="span9 offset1">
                                    <div class="input-prepend row-fluid">
                                        <span class="add-on icons">&#xf007;</span>
                                        <input class="input-medium" id="name" type="text" placeholder="Name?">
                                    </div>
                                    <div class="input-prepend">
                                        <span class="add-on icons">&#xf0e0;</span>
                                        <input class="input-medium" id="email" type="text" placeholder="Email?">
                                    </div>
                                    <div class="input-prepend">
                                        <span class="add-on icons">&#xf040;</span>
                                        <textarea class="input-medium" rows="6" placeholder="Message-away!"></textarea>
                                    </div>
                                    <div class="row-fluid">
                                        <label class="span6"><button class="btn"><span class="icon-question-sign"></span> Captcha</button></label>
                                        <div class="input-append span6">
                                            <input class="input-mini" type="text" placeholder="Captcha">
                                            <button class="btn" type="button"><span class="icons">&#xf061;</span></button>
                                        </div>
                                    </div>
                                </fieldset>
                        </form>
                        </div>
                    </div>
                </div><!--end socialFeed-->	
            </article>
        </section>
        <section>
            <div class="row-fluid hidden-phone ttTop"><!--desktop mode >=1024-->
                <aside class="span6 newsFeedBook"><!--news feed a cool book to read-->
                    <div class="row-fluid book"><!--book news wrap-->
                        <div class="span12">
                            <h3><span class="icon-exclamation-sign"></span> <a href="#" title="Page Read This Book">Read &amp; boost your ego</a></h3>
                            <div class="row-fluid ttTop">
                                <a class="span2" href="#" title="The designer's anguish demystified">
                                    <img class="img-polaroid" src="img/photos/books/book_designful.png" alt="Cool book">
                                </a>
                                <div class="span9 offset1">
                                    <h4>Proin posuere dui quam. Donec consectetur</h4>
                                    <p>Augue eget mattis condimentum, dui mauris congue augue, pellentesque egestas enim neque molestie metus. </p>
                                     <div class="row-fluid">
                                        <div class="span6">
                                        	<span class="icon-link"></span> <a href="#" title="Read posts by tag">tag</a> <a href="#" title="Read posts by tag">tags</a> <a href="#" title="Read posts by tag">tagged</a>
                                        </div>
                                        <p class="span6 icons"><a href="#" title="Read More">&#xf055;</a></p>
                                    </div><!--end row-fluid-->
                                </div><!--end span 10-->
                            </div><!--end div row-fluid-->
                        </div><!--end span12-->
                    </div><!--end book news wrap-->
                    <div class="row-fluid book"><!--book news wrap-->
                        <div class="span12">
                            <h3><span class="icon-exclamation-sign"></span> <a href="#" title="Page Read This Book">Yes, Design is actually work too</a></h3>
                            <div class="row-fluid">
                                <a class="span2" href="#" title="Design is a job">
                                    <img class="img-polaroid" src="img/photos/books/design_is_a_job.png" alt="Cool book">
                                </a>
                                <div class="span9 offset1">
                                    <h4>Proin posuere dui quam. Donec consectetur</h4>
                                    <p>Augue eget mattis condimentum, dui mauris congue augue, pellentesque egestas enim neque molestie metus. </p>
                                     <div class="row-fluid">
                                        <div class="span6">
                                            <span class="icon-link"></span> <a href="#" title="Read posts by tag">tag</a> <a href="#" title="Read posts by tag">tags</a> <a href="#" title="Read posts by tag">tagged</a>
                                        </div>
                                        <p class="span6 icons"><a href="#" title="Read More">&#xf055;</a></p>
                                    </div><!--end row-fluid-->
                                </div><!--end span 10-->
                            </div><!--end div row-fluid-->
                        </div><!--end span12-->
                    </div><!--end book news wrap-->
                </aside><!--end newsfeed book to read-->
                <aside class="span3 visible-desktop">
                    <h3><span class="icon-lightbulb"></span><a href="#" title="Page Blog"> Information</a></h3>
                    <nav>
                            <table class="table table-hover table-bordered table-striped pull-right blogroll ">
                                <tr>
                                    <td><a title="Title" href="http://alistapart.com/">A list Apart</a></td>
                                    <td><a href="#" title="tag">tag</a> <a href="#" title="tags">tags</a> <a href="#" title="tagged">tagged</a></td>
                                </tr>
                                <tr>
                                <td><a title="Title" href="http://css-tricks.com/">CSS Tricks</a></td><td><a href="#" title="tag">tag</a> <a href="#" title="tags">tags</a> <a href="#" title="tagged">tagged</a></td>
                                </tr>
                                 <tr>
                                <td><a title="Title" href="http://bootstraphero.com/">Bootstraphero</a></td><td><a href="#" title="tag">tag</a> <a href="#" title="tags">tags</a> <a href="#" title="tagged">tagged</a></td>
                                </tr>
                                <tr>
                                <td><a title="Title" href="http://www.webbyawards.com/">The Webby Awards</a></td><td><a href="#" title="tag">tag</a> <a href="#" title="tags">tags</a> <a href="#" title="tagged">tagged</a></td>
                                </tr>
                                 <tr>
                                <td><a title="Title" href="http://www.bestwebdesignaward.com/">Best Design Award</a></td><td><a href="#" title="tag">tag</a> <a href="#" title="tags">tags</a> <a href="#" title="tagged">tagged</a></td>
                                </tr>
                                <tr>
                                <td><a title="Title" href="http://twitter.github.com/bootstrap/">The Twitter Bootstrap</a></td><td><a href="#" title="tag">tag</a> <a href="#" title="tags">tags</a> <a href="#" title="tagged">tagged</a></td>
                                </tr>
                                <tr>
                                <td><a title="Title" href="http://designtaxi.com/">Design Taxi</a></td><td><a href="#" title="tag">tag</a> <a href="#" title="tags">tags</a> <a href="#" title="tagged">tagged</a></td>
                                </tr>
                            </table>
                        </nav>
                </aside>
                <aside class="span3 visible-desktop">
                    <h3><span class="icon-lightbulb"></span><a href="#" title="Page Blog"> Inspiration</a></h3>
                    <nav>
                         <table class="table table-hover table-bordered table-striped pull-right blogroll">
                        <tr>
                        <td><a title="Title" href="http://cssline.com/">CSS Line</a></td><td><a href="#" title="tag">tag</a> <a href="#" title="tags">tags</a> <a href="#" title="tagged">tagged</a></td>
                        </tr>
                        <tr>
                        <td><a title="Title" href="http://www.thefwa.com/">The FWA</a></td><td><a href="#" title="tag">tag</a> <a href="#" title="tags">tags</a> <a href="#" title="tagged">tagged</a></td>
                        </tr>
                         <tr>
                        <td><a title="Title" href="http://www.cssawards.net/">CSS Awards</a></td><td><a href="#" title="tag">tag</a> <a href="#" title="tags">tags</a> <a href="#" title="tagged">tagged</a></td>
                        </tr>
                        <tr>
                        <td><a title="Title" href="http://www.thebestdesigns.com/">The best Designs</a></td><td><a href="#" title="tag">tag</a> <a href="#" title="tags">tags</a> <a href="#" title="tagged">tagged</a></td>
                        </tr>
                         <tr>
                        <td><a title="Title" href="http://www.bestwebdesignaward.com/">Best Design Award</a></td><td><a href="#" title="tag">tag</a> <a href="#" title="tags">tags</a> <a href="#" title="tagged">tagged</a></td>
                        </tr>
                        <tr>
                        <td><a title="Title" href="http://www.cssdesignawards.com/">CSS Design Awards</a></td><td><a href="#" title="tag">tag</a> <a href="#" title="tags">tags</a> <a href="#" title="tagged">tagged</a></td>
                        </tr>
                        <tr>
                        <td><a title="Title" href="http://www.awwwards.com/">AwwwARDS</a></td><td><a href="#" title="tag">tag</a> <a href="#" title="tags">tags</a> <a href="#" title="tagged">tagged</a></td>
                        </tr>
                        </table>
                    </nav>
                </aside>
            </div>
        </section>
        <footer>
            <div class="row-fluid">
                    <div class="span6">
                        <form class="form-horizontal">
                            <fieldset>
                                <legend><span class="icon-circle-arrow-right"></span> Send me a message</legend>
                                    <div class="control-group">
                                        <label class="control-label">Name*</label>
                                        <div class="controls">
                                            <input class="input-medium" type="text" placeholder="Please type you name">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Email*</label>
                                        <div class="controls">
                                            <input class="input-medium" type="text" placeholder="Email?">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Subject</label>
                                        <div class="controls">
                                            <input class="input-large" type="text" placeholder="Subject?">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Message*</label>
                                        <div class="controls">
                                            <textarea rows="6" class="input-large" placeholder="Message-ahoy!"></textarea>
                                        </div>
                                    </div>
                                    <!-- <div class="control-group">
                                        <div class="controls">
                                            <label class="checkbox">
                                                <input type="checkbox"><span class="label label-important">It's Urgent!</span>
                                            </label>
                                            <label class="checkbox">
                                                <input type="checkbox"><span class="label label-success">It can wait a few days</span>
                                            </label>
                                             <label class="checkbox">
                                                <input type="checkbox"><span class="label label-info">Oh, just checking if you are awake..</span>
                                            </label>
                                        </div>-->
                                        <div class="control-group">
                                                 <label class="control-label">Captcha (14FDG0)</label>
                                                 <div class="controls">
                                                    <div class="input-append">
                                                        <input class="span12" id="appendedInputButton" type="text" placeholder="Captcha">
                                                        <button class="btn" type="button">Go!</button>
                                                    </div>
                                                </div>
                                        </div>
                                   <!-- <div class="icon-circle-arrow-down pull-left"></div><span class="help-block pull-left">Please check the box that best represents this message</span>
                                    <div class="clearfix"></div>
                                    <label class="checkbox">
                                        <input type="checkbox"> Specific Question
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox"> General Question
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox"> Miscellanous Question
                                    </label>
                                    <button type="submit" class="btn">Submit</button>-->
                            </fieldset>
                        </form>
                    </div><!--end div span 6-->
                    <div class="span6">
                    <div class="row-fluid">
                        <nav class="span6">
                        <div class="footerTitle"><span class="icon-phone"></span> Call me</div>
                            <ul class="unstyled ttTop callme">
                                <li><div class="icon-phone-sign"></div> <a class="pull-right" href="skype:Pellenetdesign?call" title="Call Me!">06.72.68.75.31</a></li>
                                <li><div class="icon-comment"></div> <a class="pull-right" href="skype:Pellenetdesign?call" title="Skype Me!">Skype Me!</a></li>
                                <li><div class="icon-comments-alt"></div> <a class="pull-right" href="#" title="Live chat via Google Talk">Chat LIVE!</a></li>
                            </ul>
                        </nav><!--end nav span3-->
                        <nav class="span6">
                            <div class="footerTitle"><span class="icon-bullhorn"></span> Holler!</div>
                            <div id="socialMeWrap">
                                <ul class="unstyled icons row-fluid socialme">
                                    <li class="span4"><a href="https://plus.google.com/u/0/116184257452506507653/posts?tab=XX">&#xf0d4;</a></li>
                                    <li class="span4"><a href="http://www.linkedin.com/pub/jarl-helin/28/693/954/">&#xf08c;</a></li>
                                    <li class="span4"><a href="https://twitter.com/pellenetDesign">&#xf081;</a></li>
                                </ul>
                                <ul class="unstyled icons row-fluid socialme">
                                    <li class="span4"><a href="facetime://jarl@pellenetdesign.com">&#xf03d;</a></li>
                                    <li class="span4"><a href="http://www.flickr.com/photos/pellenet">&#xf111;&#xf111;</a></li>
                                    <li class="span4"><a href="http://pinterest.com/pellehelin/" title="Pin Me">&#xf0d3;</a></li>
                                </ul>
                            </div><!--socialMeWrap-->
                        </nav><!--end nav span3-->
                    </div><!--end row fluid-->
                    <div class="pinterest clearfix row-fluid">
                        <div class="span12">
                            <span style="width:90%;margin:0 5%;overflow:hidden;">
                            <a data-pin-do="embedUser" href="http://pinterest.com/pellehelin/" data-pin-scale-width="80" data-pin-scale-height="150"></a>
                            </span>
                        </div>
                    </div>
                </div><!--end span6-->
            </div><!--end row fluid-->
        </footer>
          <div role="note" class="row-fluid"><!--footer credits-->
                <div class="span6">
                    <div class="pull-left">&copy; Jarl HELIN</div>
                </div>
                <div class="span6">
                    <div class="pull-right">2013 Pellenetdesign</div>
                </div>
            </div><!-- row fluid-->
    </div><!--end container fluid-->
</div><!--end shell-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/distributions/jquery.1.9.1.min.js"><\/script>')</script>
        <!--<script src="js/distributions/less.js" type="text/javascript"></script>-->
		<script src="js/distributions/bootstrap.min.js"></script>
        <script src="js/plugs-ck.js"></script>
        <script src="js/animation-ck.js"></script>
		<script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
        <script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>
    </body>
</html>
