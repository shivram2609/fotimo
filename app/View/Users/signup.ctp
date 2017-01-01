<?php echo $this->Session->flash(); ?>
<?php echo $this->Form->create('User',array("novalidate"=>true));  ?>
<section class="login-dashboard">
<div class="content mainContent">
    <p class="login-heading">Create New Account</p>
    <div class="content">
        <div class="col6">
            <div class="login-left">
			<?php echo $this->Form->input("identifier",array("type"=>"hidden","div"=>false,"label"=>false)); ?>
					<?php echo $this->Form->input("provider",array("type"=>"hidden","div"=>false,"label"=>false)); ?>
					<?php echo $this->Form->input("name",array("type"=>"text","maxlength"=>100,"class"=>"ip","placeholder"=>"Name", "label"=>false,"div"=>false)); ?>
                <?php echo $this->Form->input("email",array("label"=>false,"type"=>"text","placeholder"=>"email address", "class"=>"ip"));  ?>
				<?php if ( !isset($this->request->data['User']['identifier']) || empty($this->request->data['User']['identifier']) ) { ?>
                <?php echo $this->Form->input("password",array("type"=>"password","maxlength"=>20,"class"=>"ip","placeholder"=>"Password", "label"=>false,"div"=>false)); ?>
				<?php echo $this->Form->input("confirmpassword",array("type"=>"password","maxlength"=>20,"class"=>"ip","placeholder"=>"Confirm Password", "label"=>false,"div"=>false)); ?>
				<?php } ?>
                <div class="btn clearfix"><button title="SUBMIT">SUBMIT</button>
                   
                </div>
                <span class="or">OR</span>
            </div>
        </div>
        <div class="col5">
            <div class="login-right">
               <p class="login-heading"><a href="<?php echo SITE_LINK."signup" ?>">SIGNUP</a></p>
               <p>If you dont have account yet? <a href="<?php echo SITE_LINK."signup" ?>">signup</a> here</p>
               <div class="login-right-bottom">
                    <p>CONNECT WITH</p>
                    <p class="clearfix">
                        <a href="<?php echo SITE_LINK."login_with_facebook" ?>" title="Login with Facebook"><img alt="facebook" src="img/login-fb.png"></a>
                        <a href="<?php echo SITE_LINK."login_with_twitter" ?>" title="Login With Twitter"><img alt="twitter" src="img/login-twitter.png"></a>
                        <a href="<?php echo SITE_LINK."login_with_google" ?>" title="login_with_google+"><img alt="login" src="img/login-g.png"></a>
                    </p>
               </div>
            </div>
        </div>
    </div>
</div>
</section>
<?php echo $this->Form->end(); ?>
<script>
        window.jQuery || document.write('<script src="libs/jquery-1.10.1.min.js"><\/script>')
</script>
    <!-- Include the imagesLoaded plug-in -->
<script src="js/custom.js"></script>

