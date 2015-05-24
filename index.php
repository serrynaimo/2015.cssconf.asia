<!doctype html>
<!--

    It's time to design

//-->
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"
      xmlns:og="http://ogp.me/ns#"
      xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<meta charset="UTF-8">
	<title>CSSConf.Asia Singapore 2015</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans|Sanchez|Great+Vibes' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/app.css" />
	<link rel="shortcut icon" href="favicon.png" >
	<?php if(!strpos($_SERVER['HTTP_USER_AGENT'],'iPad')) { ?>
	<meta name="viewport" content="width=500, user-scalable=no" />
	<?php } ?>
	<meta property="og:title" content="CSSConf.Asia Singapore 2015"/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="http://cssconf.asia/"/>
	<meta property="og:image" content="http://cssconf.asia/assets/og_cssconfasia.jpg"/>
	<meta property="og:site_name" content="CSSConf.Asia"/>
	<meta property="og:description" content="Bridging web design and implementation. 18th November 2015, Singapore. Follow us on Twitter @cssconfasia"/>
	<meta name="title" content="CSSConf.Asia Singapore 2015"/>
	<meta name="description" content="Bridging web design and implementation. 18th November 2015, Singapore. Follow us on Twitter @cssconfasia"/>
</head>
<body class="loading">
	<section id="background"></section>
	<section id="intro">
	    <div>
    	    <div class="logo" style="opacity: 0;"><a href="http://twitter.com/cssconfasia"><img src="img/cssconfasia.svg" alt="CSSConf.Asia 2015 Singapore" /></a></div>
            <p class="desc">
                Bridging web design and implementation
            </p>
            <p class="date">
                18th of November 2015, Singapore
            </p>
            <form id="subscribeForm" action="http://2014.cssconf.asia/addsubscriber.php" method="get">
                <div class="input"><span><input type="text" name="fname" placeholder="First name" autofocus /><input type="email" name="email" placeholder="Email Address" /><input type="submit" value="Subscribe" /></span></div>
                <div class="msg"><span></span></div>
            </form>
    	    </p>
    	    <p class="links">
            <a href="https://jsconfasia.wufoo.com/forms/cssconf-and-jsconfasia/">Call for Speakers</a>
            <a href="mailto:sponsors@jsconf.asia">Sponsor interest</a>
    	    </p>
	    </div>
	</section>
    <script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.3.js"></script>
    <script type="text/javascript">window.jQuery || document.write('<script src="js/jquery.min.js">\x3C/script>')</script>
	<script type="text/javascript" src="js/jquery.form.min.js"></script>
	<script src="js/app.js"></script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-31025490-5', 'cssconf.asia');
	  ga('send', 'pageview');

	</script>
</body>
</html>
