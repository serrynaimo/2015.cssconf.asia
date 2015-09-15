<?php
  date_default_timezone_set('Asia/Singapore');
?>
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
	<link rel="stylesheet" type="text/css" href="css/app1.css" />
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
            <p class="date">
                18th of November 2015, Singapore
            </p>
            <form id="subscribeForm" action="http://2014.cssconf.asia/addsubscriber.php" method="get">
                <div class="input"><span><input type="text" name="fname" placeholder="First name" autofocus /><input type="email" name="email" placeholder="Email Address" /><input type="submit" value="Subscribe" /></span></div>
                <div class="msg"><span></span></div>
            </form>
    	    </p>
	    </div>
	</section>
    <section id="body">
        <section id="info">
            <p class="links">
                <a href="http://piktochart.com" target="_blank"><img src="img/piktochart.png" style="" /></a>
                <a href="http://meteor.com" target="_blank"><img src="img/meteor.png" style="top: -5px;" /></a>
                <a href="http://opera.com" target="_blank"><img src="img/opera.png" style="width: 85px;" /></a>
                <a href="http://sonoport.com" target="_blank"><img src="img/sonoport.png" style="" /></a>
                <a href="mailto:sponsors@jsconf.asia">Sponsor<br/>interest?</a>
            </p>
        </section>
        <a name="schedule"></a>
        <section id="speakers">
            <h2>Speakers</h2>
            <div class="speaker">
                <div class="image">
                    <img src="img/glen_maddern.jpg" border="0" />
                    <div class="name">
                        Glen Maddern
                    </div>
                    <div class="link">
                        <a href="http://twitter.com/glenmaddern" target="_blank">@glenmaddern</a>
                    </div>
                </div>

            </div>
            <a href="https://www.youtube.com/playlist?list=PL37ZVnwpeshHFbT0mLTNMtMGO1mo6yPRX" target="_blank" class="button">
                Watch the talk videos!
            </a>
        </section>
        <section id="about">
            <h2>About</h2>
            <p>
            <i>CSSConf is where design meets developers to inspire, educate and entertain around building the world’s most engaging user interfaces.</i>
            </p>
            <h3>We haz the Speakers, the Wifis, the foods, the parties...</h3>
            <p>
            ...or what we consider the essentials for a great event. You just learn so much better when you’re happy and connected.
            </p>
            <p>
            <a href="http://www.jimmymonkey.com/" target="_blank"><img src="img/jimmy.png" style="float: right; margin: 0 -25px 0 20px;"height="138" /></a>
            Jimmy Monkey will be there for 8 hours of non-stop coffee brewing and pulling shots. They craft maybe the most sophisticated espresso based coffees in all of Singapore and will be running our café. But don’t worry: It’s not that the conference content will be tiring... ;-)
            </p>
            <h3>It’s for you!</h3>
            <p>
            Together with <a href="http://2014.jsconf.asia">JSConf</a>, we want to make community events that bring Southeast-Asia’s best web designers together in a playful and informal environment. It’s gonna be a great setting for learning and exchange and we can’t wait to see you there!
            </p>
            <p align="right">
                <a href="https://twitter.com/serrynaimo" target="_blank"><img src="img/thomas.png" alt="Thomas" height="40" /></a> &nbsp; &nbsp; &nbsp; &nbsp;
                <a href="https://twitter.com/thedesignnomad" target="_blank"><img src="img/melissa.png" alt="Melissa" height="37" valign="top" /></a> &nbsp; &nbsp;
                <a href="https://twitter.com/ramanshalupau" target="_blank"><img src="img/raman.png" alt="Raman" height="35" valign="top" /></a>
            </p>
        </section>
        <!--<section id="sponsors">
            <h2>Sponsors</h2>
            <div class="sponsor"></div>
            <a href="https://www.youtube.com/playlist?list=PL37ZVnwpeshHFbT0mLTNMtMGO1mo6yPRX" target="_blank" class="button">
                Watch the talk videos!
            </a>
        </section>//-->
        <footer>
            <p>
                <a href="http://2015.devfest.asia"><img src="http://2015.devfest.asia/assets/devfestasia.png" height="100" alt="Singapore DevFest.Asia 2015"/></a>
            </p>
            <p>
                CSSConf.Asia is proudly part of Asia’s first<br/> community organized web developer festival.<br/><br/>

                Checkout CSSConf in the<br/><a href="http://cssconf.com">United States</a>, <a href="http://cssconf.eu">Europe</a> and <a href="http://cssconf.com.au">Australia</a>

                <br/><br/><br/>
                A Nerdherd Pte. Ltd. event<br/>
                <a class="terms" href="terms.html">Terms &amp; Conditions</a><br/><br/>
            </p>
        </footer>
    </section>
    <nav>
        <img src="assets/cssconfasia_icon.png" height="48" /><br/>
        <a href="#schedule">Speakers</a> &nbsp; &#x2605; &nbsp;
        <a href="#about">About</a> &nbsp; &#x2605; &nbsp;
        <a href="#sponsors">Sponsors</a> &nbsp; &#x2605; &nbsp;
        <a href="http://facebook.com/cssconfasia">Get Updates</a>
    </nav>
    <script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.3.js"></script>
    <script type="text/javascript">window.jQuery || document.write('<script src="js/jquery.min.js">\x3C/script>')</script>
	<script type="text/javascript" src="js/jquery.form.min.js"></script>
	<script src="js/app1.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-31025490-8', 'auto');
      ga('send', 'pageview');

   CountDownTimer('Wed 09 Sep 2015 14:00:00 +0800', 'countdown');

    function CountDownTimer(dt, id)
    {
        var end = new Date(dt);

        var _second = 1000;
        var _minute = _second * 60;
        var _hour = _minute * 60;
        var _day = _hour * 24;
        var start = new Date('<?php echo date("r"); ?>');
        var startjs = new Date();
        var diff = startjs - start;
        var timer;

        function showRemaining() {
            var now = new Date();
            var passed = now - startjs;
            var distance = end - start - passed;
            if (distance < 0) {

                clearInterval(timer);
                document.getElementById(id).innerHTML = ' NOW!';
                document.getElementById(id).src="https://www.eventnook.com/event/register/55645";

                return;
            }
            var days = Math.floor(distance / _day);
            var hours = days * 24 + Math.floor((distance % _day) / _hour);
            var minutes = Math.floor((distance % _hour) / _minute);
            var seconds = Math.floor((distance % _minute) / _second);

          if(seconds < 10)
            seconds = "0" + seconds;

          if(minutes < 10)
            minutes = "0" + minutes;

            document.getElementById(id).innerHTML = 'in ' + hours + ':';
            document.getElementById(id).innerHTML += minutes + ':';
            document.getElementById(id).innerHTML += seconds;
        }

        timer = setInterval(showRemaining, 1000);
    }

    </script>
</body>
</html>
