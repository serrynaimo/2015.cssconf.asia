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
	<link rel="stylesheet" type="text/css" href="css/app3.css" />
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
    <a href="https://jsconfasia.wufoo.com/forms/cssconf-and-jsconfasia/" id="thisyear" style="border-radius: 5px 0 0 5px; -webkit-transition: all 1s ease-out; -moz-transition: all 1s ease-out; transition: all 1s ease-out; border-left: 10px solid #c7950a; z-index: 99999; position: fixed; color: white; text-decoration: none; bottom: 40px; right: -400px; width: 320px; padding: 20px 30px; background: rgba(0,0,0,0.9); box-shadow: 3px 3px 5px rba(0,0,0,0.5);">
        <b>CSSConf.Asia is back again this year!</b>
        Click here for the CFP
    </a>
	<section id="background"></section>
	<section id="intro">
	    <div>
    	    <div class="logo" style="opacity: 0;"><a href="http://twitter.com/cssconfasia"><img src="img/cssconfasia.svg" alt="CSSConf.Asia 2015 Singapore" /></a></div>
            <p class="date">
                18th of November 2015, Singapore
            </p>
            <a href="https://www.youtube.com/playlist?list=PL37ZVnwpeshHuiIn2HnJ965qO2k3aADqz" target="_blank" class="button">
                Watch the videos!
            </a>
            <p class="links">
                <a href="http://smove.sg" target="_blank"><img src="img/smove.png" style="margin-right: -2px" /></a>
                <a href="http://clubmate.sg" target="_blank"><img src="img/clubmate.png" style="width: 50px;" /></a>
                <a href="http://hired.com" target="_blank"><img src="img/hired.png" style="" /></a>
                <a href="http://tradegecko.com" target="_blank"><img src="img/tradegecko.png" /></a>
                <a href="http://piktochart.com" target="_blank"><img src="img/piktochart.png" style="" /></a>
                <a href="http://myrepublic.com.sg" target="_blank"><img src="img/myrepublic.png" /></a>
                <a href="http://redmart.com" target="_blank"><img src="img/redmart.png" style="" /></a>
                <a href="http://zopim.com" target="_blank"><img src="img/zopim.png" style="width: 78px; margin-right: 10px;" /></a>
                <a href="http://meteor.com" target="_blank"><img src="img/meteor.png" style="top: -5px;" /></a>
                <a href="http://skyscanner.com" target="_blank"><img src="img/skyscanner.png" style="width: 120px;"/></a>
                <a href="http://opera.com" target="_blank"><img src="img/opera.png" style="width: 85px;" /></a>
                <a href="http://sonoport.com" target="_blank"><img src="img/sonoport.png" style="" /></a>
            </p>
	    </div>
	</section>
    <section id="body">
        <a name="speakers"></a>
        <section id="schedule">
            <h2>Designing the web</h2>
            <p style="margin-top: -20px; padding-left: 0; text-align:center;">18th November 2015<br/><a href="http://www.museum.red-dot.sg" target="_blank">Red Dot Design Museum</a></p>
            <br/>
            <p style="text-align: left;">
            <i>CSSConf.Asia is where design meets developers to inspire, educate and entertain around building the world’s most engaging user interfaces.</i>
            </p>
            <br/><br/><br/>
            <div class="column">
                <div class="speaker dot">
                    <span>9 AM</span>
                    <h4>Huijing Chen <a href="https://twitter.com/hj_chen" target="_blank">@hj_chen</a></h4>
                    <h3>Let's begin</h3>
                    <p></p><p></p>
                </div>
                <div class="speaker">
                    <span>9:15 AM</span>
                    <img src="img/mathias.jpg" />
                    <h4>Mathias Bynens <a href="https://twitter.com/mathias" target="_blank">@mathias</a></h4>
                    <h3>3.14 things I didn’t know about CSS</h3>
                    <p>
                        This talk will showcase a series of obscure CSS fun facts, such as CSS syntax gimmicks and quirks, weird tricks that involve CSS in one way or another, and security vulnerabilities that are enabled by (ab)using CSS in unexpected ways.
                    </p>
                    <p>
                        Mathias is a Belgian web standards enthusiast. He likes HTML,
                        CSS, JavaScript, Unicode, performance, and security. At Opera Software
                        he’s a member of the Developer Relations team.
                    </p>
                </div>
                <div class="speaker">
                    <span>10:00 AM</span>
                    <img src="img/jennifer.jpg" />
                    <h4>Jennifer Wong <a href="https://twitter.com/mybluewristband" target="_blank">@mybluewristband</a></h4>
                    <h3>In the Year 2000... Designing Responsive Emails</h3>
                    <p>
                        What do you do when the project of redesigning emails AND making them responsive becomes yours? You've heard the rumors: designing emails means coding like it’s the year 2000, creating tables and adding styles inline, and throwing best practices and hopes of compatibility out the window. BREATHE. In this session, get your emails in shape for 2016 and ready for the responsive spotlight! We’ll see:
                        <br/><br/>
                        - Why you need a reusable, maintainable template and how to design one.<br/>
                        - When and how to use media queries and the ever controversial !important.<br/>
                        - What vendors and properties require CSS prefixes<Br/>
                        - How to make desktop, mobile, and web-based clients play nicely with your code, and which ones to watch out for.
                    </p>
                    <p>
                        Jennifer is a self taught web developer. She spends her days on the front end, making the web a prettier and more functional place. In a former life, she was a civil engineer and is still a registered Engineer in Training (No. EIT 121059) with the California Department of Consumer Affairs. She's a jane of all trades and loves eating, coding, and sleeping.
                    </p>
                </div>
                <div class="speaker break">
                    <span>10:30 AM</span>
                    <h3>Morning coffee powered by Zopim</h3>
                </div>
                <div class="speaker">
                    <span>11:15 AM</span>
                    <img src="img/jeff.jpg" />
                    <h4>Jeffrey Lembeck <a href="https://twitter.com/jefflembeck" target="_blank">@jefflembeck</a></h4>
                    <h3>Moneyball for Performance Metrics</h3>
                    <p>
                        The story behind Moneyball was centered around using metrics— newer, out-of-the-norm metrics— to build a better performing baseball team. This strategy of measurement was wildly successful, squeezing out more wins for less money. That works for baseball, why can’t it work for the web? Focusing on our most commonly measured stats only paints half the picture. In this talk, I’ll use those same ideas to give you better ways to determine the quickness at which users can access your site and help you turn up your speed.
                    </p>
                    <p>
                        Jeff is a developer over at npm, inc. He writes a whole lot of
                        code and the occasional post for A List Apart, has guest lectured and
                        TA'd for Ada Developers Academy, and is a former member of the jQuery
                        Mobile team. Jeff lives in Seattle where he obsesses over oyster happy
                        hours and how to make the best negroni. He dreams of someday owning a
                        hot tub boat.
                    </p>
                </div>
                <div class="speaker">
                    <span>11:45 AM</span>
                    <img src="img/zell.jpg" />
                    <h4>Zell Liew <a href="https://twitter.com/zellwk" target="_blank">@zellwk</a></h4>
                    <h3>Animating SVGs</h3>
                    <p>
                        SVGs can be used to achieve amazing effects that improve users' experience on your website. They can do sweet things like icon morphing that was introduced in material design, create bouncy buttons that let the user know they're clicked, and many other effects that you can image. In this talk, we're going to dive deep into SVGs to learn how to use them, and how to create these cool effects for your own website.
                    </p>
                    <p>
                        Zell is a freelance web developer based in Singapore. He loves working on the web so much that he spends all his free time diving deep into tools and frameworks to find out the best ways to work with them. He then shares everything he learned on his <a href="http://zell-weekeat.com/">blog</a>. He also authored <a href="http://zell-weekeat.com/learnsusy/">Learning Susy</a> and <a href="http://zell-weekeat.com/automate-your-workflow/">Automating Your Workflow with Gulp</a>.
                    </p>
                </div>
                <div class="speaker break">
                    <span>12:15 PM</span>
                    <h3>Lunch is served</h3>
                </div>
                <div class="speaker">
                    <span>1 PM</span>
                    <img src="img/lachlan.jpg" />
                    <h4>Lachlan Priest<a href="https://twitter.com/lcpriest" target="_blank">@lcpriest</a></h4>
                    <h3>PostCSS - JS your CSS</h3>
                    <p>
                        My talk on PostCSS (or how I sneak JavaScript into a CSSConf), will give you a quick overview of what PostCSS can do for you, how you can leverage PostCSS plugins to take a lot of the developer error out of front-end development.
                    </p>
                    <p>
                        Originally from a farm in New Zealand, picked up programming while applying for a job in economics and never looked back. Mostly Rubyist, JS and CSS are my second and third loves. I teach people how to code through Rails Girls and Ruby Tea Party as I want to demystify the industry.
                    </p>
                </div>
            </div>
            <div class="column">
                <div class="speaker">
                    <span>1:30 PM</span>
                    <img src="img/mark.jpg" />
                    <h4>Mark Dalgleish <a href="https://twitter.com/markdalgleish" target="_blank">@markdalgleish</a></h4>
                    <h3>The End of Global CSS</h3>
                    <p>
                        The global nature of CSS selectors is often at odds with the locally-scoped nature of component-based web applications. CSS Modules are a new, community-driven attempt to allow us to import CSS into our JavaScript files, bypassing the global scope and enabling powerful new patterns for writing CSS in the component age.
                    </p>
                    <p>
                        Mark is the co-creator of CSS Modules, lead organiser of MelbJS, and interaction craftsman at SEEK—the most popular job site in Australia. Having got his start with HTML and UI design at a young age, he has since developed a love of open source and software engineering, but always as a means to creating elegant, usable experiences.
                    </p>
                </div>
                <div class="speaker">
                    <span>2 PM</span>
                    <img src="img/glen_maddern.jpg" />
                    <h4>Glen Maddern <a href="https://twitter.com/glenmaddern" target="_blank">@glenmaddern</a></h4>
                    <h3>The Rise of Modular Style</h3>
                    <p>
                        There have been a lot of ideas and a lot of speculation about the future of CSS in the last year or so. Will we write styling code purely in JS? Will CSS still have a place, and if so, what will it look like? And how long will we have to wait before we can take the next step?<br/>
                        I'll be talking about two projects I've been heavily involved in — Interoperable CSS and CSS Modules. I'll show how they are fundamentally changing what CSS is capable of, drastically simplifying the areas that cause the most headaches. And, taking a lesson from the JS world and CSS preprocessors like Sass, why we don't have to wait for the browsers to catch up.
                    </p>
                    <p>
                        Glen is an independent front-end consultant from Melbourne, Australia. He's an organiser of CSS Conf AU, a co-creator of the CSS Modules standard, contributor to the JSPM ecosystem, and all-round builder of rad web things. But his true calling is to become the world's greatest GIF DJ (any day now...)
                    </p>
                </div>
                <div class="speaker break">
                    <span>2:45 PM</span>
                    <h3>Afternoon Snack</h3>
                </div>
                <div class="speaker">
                    <span>3:30 PM</span>
                    <img src="img/apoorv.jpg" />
                    <h4>Apoorv Saxena <a href="https://twitter.com/apoorv_saxena" target="_blank">@apoorv_saxena</a></h4>
                    <h3>Performance beyond Page Load</h3>
                    <p>
                        Performance is now considered as a requirement, after evolving from the evolutionary phase of being a feature. Web has also evolved and so has it's reach into several devices other than desktop, which are less capable in comparison of performance. Thus, it has made all the more important for us to dive deep to learn how our CSS code works inside browser and how it affects the rendering performance of our webpage. I'll suggest you to be prepared to receive a performance dose in this talk, while I share our experiences while performance auditing several web applications.
                    </p>
                    <p>
                        A web standards lover, performance coach and polygot programmer. Apoorv works as Software Artisan at Wingify. In his spare time he loves to experiment stuff in kitchen and travel.
                    </p>
                </div>
                <div class="speaker">
                    <span>4:15 PM</span>
                    <img src="img/aysha.jpg" />
                    <h4>Aysha Anggraini <a href="https://twitter.com/renettarenula" target="_blank">@renettarenula</a></h4>
                    <h3>Responsive Web Bloopers at Viki</h3>
                    <p>
                        How hard can responsive web be? It sounds simple: design for a number of screen sizes and just throw in several media queries and your website is now "responsive"! Unfortunately, this is not the case and responsive web hasn't made our job easier. Adopting responsive web design will force you to change your design, development, and testing workflow. Problems may also arise in different stages of the workflow. In this talk, we will talk about responsive web blunders at Viki, how we overcome it, and some tips on how you can avoid it.
                    </p>
                    <p>
                        Aysha is a front-end engineer and wannabe designer at Viki, where she works closely with the UX team in order to build functional and beautiful UIs on viki.com and Viki's internal tools. When she is not super busy (which is rare these days), she either writes about geeky stuff on her blog renaysha.me or build experimental and pretty things on CodePen (codepen.io/rrenula). She loves design, gaming, dancing, and Yoga.
                    </p>
                </div>
               <div class="speaker">
                    <span>4:45 PM</span>
                    <img src="img/chris_lilley.jpg" />
                    <h4>Chris Lilley <a href="https://twitter.com/svgeesus" target="_blank">@svgeesus</a></h4>
                    <h3>WebFonts: Level up!</h3>
                    <p>
                        After attending this talk you will:<br/>
                        - gain a clearer understanding of what webfonts do<br/>
                        - be able to use the typographic richness of OpenType features in your CSS<br/>
                        - see how to improve performance on desktop and mobile<br/>
                        - be excited about cutting edge and future developments
                    </p>
                    <p>
                        Chris Lilley is a Technical Director at the World Wide Web Consortium
                        (W3C). Considered “the father of SVG”, he also co-authored PNG, was
                        co-editor of CSS2, chaired the group that developed @font-face, and
                        co-developed WOFF. Ex Technical Architecture Group. Chris is still
                        trying to get Color Management on the Web, sigh. Currently working on
                        CSS levels 3/4/5 (no, really), Web Audio, and WOFF2.
                    </p>
                </div>
                <div class="speaker break">
                    <span>5:30 PM</span>
                    <h3>After-Party</h3>
                    <p></p><p></p>
                </div>
            </div>
            <a href="https://www.youtube.com/playlist?list=PL37ZVnwpeshHuiIn2HnJ965qO2k3aADqz" target="_blank" class="button">
                Watch the videos!
            </a>
        </section>
        <footer>
            <p>
                <a href="http://2015.devfest.asia"><img src="http://2015.devfest.asia/images/logo.png" height="100" alt="Singapore DevFest.Asia 2015"/></a>
            </p>
            <p>
                CSSConf.Asia is proudly part of Asia’s first<br/> community organized web developer festival.<br/><br/>

                Checkout CSSConf in <a href="http://cssconf.org">other countries</a>.

                <br/><br/><br/>
                A Nerdherd Pte. Ltd. event<br/>
                <a class="terms" href="http://2015.devfest.asia/terms-and-conditions.html">Terms &amp; Conditions</a><br/>
                <a class="terms" href="http://2015.devfest.asia/code-of-conduct.html">Code of Conduct</a><br/><br/>
            </p>
        </footer>
    </section>
    <nav>
        <img src="assets/cssconfasia_icon.png" height="48" /><br/>
        <a href="#speakers">Speakers</a> &nbsp; &#x2605; &nbsp;
        <a href="http://twitter.com/cssconfasia">Updates</a>
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
                document.getElementById(id).src="https://www.eventnook.com/event/devfestasia2015/register/jscssonly";

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

    setTimeout(function() {
        $('#thisyear').addClass('loaded');
    }, 2000);

    </script>
    <style> #thisyear.loaded { right: 0px !important; } </style>
</body>
</html>
