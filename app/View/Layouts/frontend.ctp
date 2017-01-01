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
    
    <!-- HTML5 IE Enabling Script -->
    <!--[if lt IE 9]>
		<script src="js/html5shiv.min.js"></script>
	<![endif]-->
	<style>
		div.error-message{color: red !important;
			margin: 5px 0 0 5px;
			font-size: 12px;
		}
		.message {
			background-color: red;
			border: 1px solid;
			color: inherit;
			display: block;
			opacity: 0.8;
			position: fixed;
			text-align: center;
			top: 0;
			width: 100%;
			z-index: 999999999;
			padding: 5px;
		}

		.success_message {
			background-color: #EBF8A4;
			border: 1px solid;
			color: inherit;
			display: block;
			opacity: 0.8;
			position: fixed;
			text-align: center;
			top: 0;
			width: 100%;
			z-index: 999999999;
			padding: 5px;
		}
	</style>
</head>
<body>
    <div class="container">
		<?php echo $this->Session->flash(); ?>
        <?php echo $this->element("frontheader"); ?>
        <?php echo $content_for_layout; ?>
        <?php echo $this->element("frontfooter"); ?>
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
<script>
        $(document).ready(function(){
			$("#flashMessage").fadeOut(8000);
			//jQuery('#userInfo').tablesorter(); 
	   });		
        
    </script>
</body>
</html>
