<footer>
	<div class="content">
		<div class="col12">
			<p>&copy; 2014 fotimo. All rights reserved.</p>
		</div>
	</div>
</footer>


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
<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<?php if ( $this->params['controller'] == 'userDetails' && $this->params['action'] == 'edit' ) { ?>
<script>
            window.jQuery || document.write('<script src="libs/jquery-1.10.1.min.js"><\/script>')
</script>
<script src="js/custom.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
           console.log('gsfgdfgdfgdf');
        $('#tabList a').click(function(e) {
            e.preventDefault();
            var hash = this.hash
            $("#tabList li").removeClass("active");
            $(this).parent().addClass("active");
            $(".tabContent").removeClass("tabActive");
            $("div"+ hash +"").addClass("tabActive");
        });
    });
    
    $(document).on("click", ".yellow-btn", function(){
        //$('input:data[UserDetail][gender]:checked').val();
        $('input:radio[name=data[UserDetail][gender]]:checked').attr('checked',true);
        //alert("kjehfke");
   
});
</script>
<?php } ?>


        
