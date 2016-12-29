<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Home | Fotima</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <!-- Optimized mobile viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- CSS -->
    <?php echo $this->Html->css(array('lightSlider','easy-responsive-tabs','common','responsiveboilerplate'),array("media"=>"all")); ?>
    <!--link rel="stylesheet" type="text/css" media="all" href="css/lightSlider.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/easy-responsive-tabs.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/common.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/responsiveboilerplate.css"-->
    <!-- HTML5 IE Enabling Script -->
    <!--[if lt IE 9]>
		<script src="js/html5shiv.min.js"></script>
	<![endif]-->
</head>
<body>
    <div class="container">
        <header>
            <div class="content">
                <div class="col12">
                    <a class="menuIcon" href="#">
                        <span class="menuLine"></span>
                        <span class="menuLine"></span>
                        <span class="menuLine"></span>
                    </a>
                    <nav class="headerMenu">
                        <ul class="navigation clearfix">
                            <li><a href="#home">Home</a>
                            </li>
                            <li><a href="#about">About Us</a>
                            </li>
                            <li><a href="#how">How It Works</a>
                            </li>
                            <li><a href="#faq">FAQ'S</a>
                            </li>
                            <li><a href="#testimonials">Testimonials</a>
                            </li>
                            <li><a href="#hang">Hang with us</a>
                            </li>
                            <li class="right"><a href="<?php echo SITE_LINK."login"; ?>">SIGNIN</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <span class="anchor" id="home"></span>
        <section class="logosec">
            <div class="content">
                <div class="col12">
                    <h1><img src="img/logo.png" alt="Logo" /></h1>
                </div>
            </div>
        </section>
        <section class="sec about">
            <div class="content">
                <div class="col6">
                    <h2 class="heading2">
          <span>Fotimo is an app that enables you to add</span><span>titles descriptions to your</span><span>photographs directly from your</span>
        </h2>
                    <span class="white-heading">Iphone and Ipad...</span>
                    <h4 class="heading4">Allowing you to add text, logo or a copyright notice to your images before sharing them on social media.</h4>
                    <div class="buttons clearfix">
                        <a href="#" class="app-store">
                            <!-- <img src="img/app-store.png" alt="App Store" /> -->
                        </a>
                        <a href="#" class="g-play">
                            <!-- <img src="img/google-play.png" alt="Google Play" /> -->
                        </a>
                    </div>
                </div>
                <div class="col6 bannerImg">
                    <img src="img/ipad.png" alt="Ipad" />
                </div>
            </div>
        </section>
        <span class="anchor" id="about"></span>
        <section class="sec">
            <div class="content">
                <div class="col12">
                    <h3>About Us</h3>
                </div>
            </div>
            <div class="content howItWorks">
               
                <div class="col6">
                    <p>Fotimo - or “funk off this is mine online” is a new app aimed at art students who want to record the date,time and place that they created a piece of art work in case any body infringes their copyright.</p>
                    <p>fotimo is home to thousands of individual artists who can store artwork from a wide range of disciplines and genres.</p>
                </div>
                 <span class="divider"></span>
                <div class="col6">
                    <p>you can record your work with the location and time and copyright it via fotimo.</p>
                    <p>fotimo is an app that enables yu to add titles and descriptions to your photographs directly from your iPhone and ipad, allowing you to add text, logo or a copyright notice to your image before sharing them on social media.</p>

                </div>
            </div>
        </section>
        <span class="anchor" id="how"></span>
        <section class="sec how">
            <div class="content">
                <div class="col12">
                    <h3>How It Works?</h3>
                </div>
            </div>
            <div class="content ">
                <div id="howTab">
                    <ul class="resp-tabs-list">
                        <li class="download">
                            <p><span class="hIcon"><img src="img/download.png" alt="download" /></span>Download</p>
                        </li>
                        <li class="install">

                            <p><span class="hIcon"><img src="img/install.png" alt="install" /></span>Install</p>
                        </li>
                        <li class="register">

                            <p><span class="hIcon"><img src="img/register.png" alt="register" /></span>Register</p>
                        </li>
                        <li class="upload">

                            <p><span class="hIcon"><img src="img/upload.png" alt="upload" /></span>Upload</p>
                        </li>
                    </ul>

                    <div class="resp-tabs-container">
                        <div>Download the app either from our site or from the app store</div>
                        <div>You can install it quickly</div>
                        <div>Fill in a few details and you are good to go</div>
                        <div>Start uploading your work to the vault, which stores your work</div>
                    </div>
                </div>
            </div>
        </section>
        <span class="anchor" id="faq"></span>
        <section class="sec faq">
            <div class="content">
                <div class="col12">
                    <h3>Faq's</h3>
                    <p>You could consider sending yourself a copy of your work, date and location. Although this does not prove that the work is created by you, it can still be useful to show the court that the work was in your possession at a particular time. This could help with an infringement claim.</p>
                    <ul id="lightSlider">
                        <li>
                            <div class="content  question-outer">
                                <div class="col3 question">
                                    <div class="">
                                        Q. Will my work be protected ?
                                    </div>
                                </div>
                                <div class="col3 question">
                                    <img src="img/faqicon.png" alt="FAQ" />
                                </div>
                                <div class="col6 question qsibling">
                                    <p>Your work is recorded with the location and app.</p>
                                    <p>To sue someone for copyright infringement, you could prove an accused person copied your work by showing (1) a substantial similarity between the two (2) access to your work. An increased circulation of your work, through the Internet or otherwise it makes it easier to prove.</p>
                                    <p>That is why we will provide the evidence students need to prove that the work is theirs by recording the date, time and place where the work was done.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="content  question-outer">
                                <div class="col3 question">
                                    <div class="">
                                        Q. What kind of photos work best with?
                                    </div>
                                </div>
                                <div class="col3 question">
                                    <img src="img/faqicon.png" alt="FAQ" />
                                </div>
                                <div class="col6 question qsibling">
                                    <p>All kinds of photos work well, including those of people, objects, and landscapes. You can play with all kinds of mediums including photos, sketches, drawings, or silhouettes to find what suits you best.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="content  question-outer">
                                <div class="col3 question">
                                    <div class="">
                                        Q. How can I make my artwork look more beautiful?
                                    </div>
                                </div>
                                <div class="col3 question">
                                    <img src="img/faqicon.png" alt="FAQ" />
                                </div>
                                <div class="col6 question qsibling">
                                    <p>Since the iPhone is relatively small, even with retina display, we recommend that you post the final iPhone camera artwork to either a social network or email it in the large format. You can so you can view it in its full detailed beauty, on a desktop where images naturally look their best.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <span class="anchor" id="testimonials"></span>
        <section class="sec test">
            <div class="content">
                <div class="col12">
                    <h3>
          Testimonials
          <span class="subhead">The love we get</span>
        </h3>
                    <p>We exist so you can capture the art in your mind and bring it to reality. This is your space......... and that's what it's all about.</p>
                    <ul id="testslider">
                        <li>
                            <p>
                                <img src="img/people.png" alt="James Anderson" />
                            </p>
                            <p class="border">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                            <h3>
              James Anderson
              <span class="subhead">Artist LLC, Florida</span>
            </h3>
                        </li>
                        <li>
                            <p>
                                <img src="img/people.png" alt="James Anderson" />
                            </p>
                            <p class="border">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                            <h3>
              James Anderson
              <span class="subhead">Artist LLC, Florida</span>
            </h3>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <span class="anchor" id="hang"></span>
        <section class="sec hang">
            <div class="content">
                <div class="col12">
                    <h3>Hang With Us</h3>
                    <p>We are happy to help wherever we can. Please write to us if you experience any problems!</p>
                </div>
            </div>
            <div class="content">
                <div class="col4 social">
                    <span class="footerIcon">
                        <img src="img/phone.png" alt="Phone" />
                    </span>
                    <a href="tel:+1234567890">+123 456 7890</a>
                </div>
                <div class="col4 social">
                    <span class="footerIcon">
                        <img src="img/mail.png" alt="mail" />
                    </span>
                    <a href="mailto:info@fotimo.com">info@fotimo.com</a>
                </div>
                <div class="col4 social">
                    <span class="footerIcon">
                        <img src="img/facebook.png" alt="facebook" />
                    </span>
                    <a href="#">connect with us</a>
                </div>
            </div>
        </section>
        <footer>
            <div class="content">
                <div class="col12">
                    <p>&copy; 2014 fotimo. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>
    <!-- JavaScript at the bottom for fast page loading 
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>-->
	<?php echo $this->Html->script(array('libs/jquery-1.10.1.min','jquery.lightSlider','easyResponsiveTabs','index','custom')); ?>
    <!--script>
        window.jQuery || document.write('<script src="libs/jquery-1.10.1.min.js"><\/script>')
    </script>
    <script src="js/jquery.lightSlider.js"></script>
    <script src="js/easyResponsiveTabs.js"></script>
    <script src="js/index.js"></script>
    <script src="js/custom.js"></script>

    <!-- If you need more than one script, we strong recommend to use the head.js.
 EX:
				<script src="libs/head.min.js"></script>
				<script>
						head.js("libs/jquery-1.10.1.min.js", "libs/respond.min.js", "js/custom.js" );
				</script>
-->

    <!-- Google Analytics: change UA-XXXXX-X to your site's ID.
<script>
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-XXXXX-X']);
		_gaq.push(['_trackPageview']);

		(function () {
				var ga = document.createElement('script');
				ga.type = 'text/javascript';
				ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(ga, s);
		})();
</script>-->
</body>
</html>
