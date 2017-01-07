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
    
</body>
</html>
