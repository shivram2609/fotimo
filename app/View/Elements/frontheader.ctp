<header>
    <?php if ($this->params['controller'] == 'pages' && $this->params['action'] == 'index' ) { ?>
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
                                        <?php if ( !$this->Session->read("Auth.User.id") ) { ?>
					<li class="right"><a href="<?php echo SITE_LINK."login"; ?>">SIGNIN</a>
                                        <?php } else { ?>
                                        <li class="right"><a href="<?php echo SITE_LINK."logout"; ?>">SIGNOUT</a>
                                        <?php } ?>
					</li>
				</ul>
			</nav>
		</div>

	</div>
    <?php } elseif ($this->Session->read("AuthUser.User.id")) { ?>
	<div class="content">
        <div class="col12">
			<nav class="headerMenu">
				<ul class="navigation clearfix">
					<li class="right"><a href="<?php echo SITE_LINK."logout"; ?>">SIGNOUT</a>
				</ul>
			</nav>
		</div>
	</div>
	<?php } ?>
</header>
<span class="anchor" id="home"></span>
<section class="logosec">
	<div class="content">
		<div class="col12">
			<h1><img src="img/logo.png" alt="Logo" /></h1>
		</div>
	</div>
</section>
