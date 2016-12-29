<footer id="footer" class="top-space">
	<div class="footer1">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<h4 class="heading">Stay in our food loop</h4>
					<p><b>Check which  dishes are cooked today!</b></p>
				</div>
				<div class="col-sm-6">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Your email address" aria-describedby="basic-addon2">
						<div class="input-group-addon" id="basic-addon2"><button class="subscribe-btn">Subscribe</button></div>
					</div>
				</div>
			</div>
			<div class="border-btm-doted">&nbsp;</div>
			<div class="row">
				<div class="col-sm-5">
					<div class="row">
						<div class="col-md-6">
							<h3 class="widget-title">BROWSE OUR RECIPIES</h3>
							<ul class="footer-list">
								<li>
									<a href="javascript:void(0);" title="Pizza Hut Delivery">Pizza Hut Delivery</a>
								</li>
								<li>
									<a href="javascript:void(0);" title="Seafood Junction">Seafood Junction</a>
								</li>
								<li>
									<a href="javascript:void(0);" title="Denny's">Denny's</a>
								</li>
								<li>
									<a href="javascript:void(0);" title="Church's Chicken Menu">Church's Chicken Menu</a>
								</li>
								<li>
									<a href="javascript:void(0);" title="Papa John's Pizza">Papa John's Pizza</a>
								</li>
								<li>
									<a href="javascript:void(0);" title="Restaurants Near Me">Restaurants Near Me</a>
								</li>
							</ul>
						</div>

						<div class="col-md-6">
							<h3 class="widget-title">ABOUT SWANKCOOK</h3>
							<ul class="footer-list">
								<li>
									<a href="javascript:void(0);" title="How It Works">How It Works</a>
								</li>
								<li>
									<a href="javascript:void(0);" title="About Us">About Us</a>
								</li>
								<li>
									<a href="javascript:void(0);" title="Support">Support</a>
								</li>
								<li>
									<a href="javascript:void(0);" title="Contact Us">Contact Us</a>
								</li>
								<li>
									<a href="javascript:void(0);" title="Faq's">Faq's</a>
								</li>
								<li>
									<a href="javascript:void(0);" title="Trust & Safety">Trust & Safety</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-7">
					<div class="row">
						<div class="col-md-6">
							<h3 class="widget-title">TWITTER FEEDS</h3>
							<ul class="footer-twitter-list">
								<li>
									<p>The Entertainment was Top Notch!</p>
									<a href="javascript:void(0);" title="https://t.co/NzOLsywTri about 4 weeks ago">https://t.co/NzOLsywTri about 4 weeks ago</a>
								</li>
								<li>
									<p>Excellent food. Highly Recommended!</p>
									<a href="javascript:void(0);" title="https://t.co/NzOLsywTri about 4 weeks ago">https://t.co/NzOLsywTri about 4 weeks ago</a>
								</li>
								<li>
									<p>Great Food. Great Staff. Great Service. Good Times!</p>
									<a href="javascript:void(0);" title="https://t.co/NzOLsywTri about 4 weeks ago">https://t.co/NzOLsywTri about 4 weeks ago</a>
								</li>
							</ul>
						</div>
						<div class="col-md-6">
							<h3 class="widget-title">download our app</h3>
							<div class="row">
								<div class="col-sm-6 form-group">
									<a href="javascript:void(0);" title="App Store"><img src="img/app-store.png" alt="App Store" width="172" height="54" /></a>
								</div>
								<div class="col-sm-6 form-group">
									<a href="javascript:void(0);" title="Google Play"><img src="img/google-play.png" alt="Google Play" width="173" height="54" /></a>
								</div>
							</div>
							<h3 class="widget-title social">social networks</h3>
							<p class="follow-me-icons">
								<a href="javascript:void(0);" title="Twitter"><i class="fa fa-twitter fa-2"></i></a>
								<a href="javascript:void(0);" title="Facebook"><i class="fa fa-facebook fa-2"></i></a>
								<a href="javascript:void(0);" title="Pinterest"<i class="fa fa-pinterest fa-2"></i></a>
								<a href="javascript:void(0);" title="Google Plus"><i class="fa fa-google-plus fa-2"></i></a>
							</p>
							<p>&copy; 2016 SwankCook.  All Rights Reserved.</p>
						</div>
					</div>
				</div>

			</div> <!-- /row of widgets -->
		</div>
	</div>
</footer>
<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <!-- script for datepiicker-->
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <!-- End script for datepiicker-->
        <?php if ($this->params['controller'] == 'pages' && $this->params['action'] == 'index' ) { ?>
		<?php echo $this->Html->script(array('star-rating.min','jquery.flexisel')); ?>
        <script>
            jQuery(document).ready(function() {
                $("#input-21f").rating({
                    starCaptions: function(val) {
                        if (val < 3) {
                            return val;
                        } else {
                            return 'high';
                        }
                    },
                    starCaptionClasses: function(val) {
                        if (val < 3) {
                            return 'label label-danger';
                        } else {
                            return 'label label-success';
                        }
                    },
                    hoverOnClear: false
                });

                $('#rating-input').rating({
                    min: 0,
                    max: 5,
                    step: 1,
                    size: 'lg',
                    showClear: false
                });

                $('#btn-rating-input').on('click', function() {
                    $('#rating-input').rating('refresh', {
                        showClear: true,
                        disabled: !$('#rating-input').attr('disabled')
                    });
                });

                $('.btn-danger').on('click', function() {
                    $("#kartik").rating('destroy');
                });

                $('.btn-success').on('click', function() {
                    $("#kartik").rating('create');
                });

                $('#rating-input').on('rating.change', function() {
                    alert($('#rating-input').val());
                });

                $('.rb-rating').rating({'showCaption': true, 'stars': '3', 'min': '0', 'max': '3', 'step': '1', 'size': 'xs', 'starCaptions': {0: 'status:nix', 1: 'status:wackelt', 2: 'status:geht', 3: 'status:laeuft'}});
            });

            $("#logo-slider").flexisel({
                visibleItems: 4,
                itemsToScroll: 1,
                autoPlay: {
                    enable: true,
                    interval: 5000,
                    pauseOnHover: true
                }
            });
        </script>
        <?php } elseif ( $this->params['controller'] == 'userDetails' && $this->params['action'] == 'edit' ) { ?>
			<?php echo $this->Html->css(array("bootstrap-select.min")); ?>
			<?php echo $this->Html->script(array('bootstrap-filestyle.min','bootstrap-select.min')); ?>
	<script>
            $(document).ready(function() {
                              $('#input01').filestyle({
                             'placeholder' : 'Upload Image'
                     });
                     $('select').selectpicker();
                     $('#go').click(function(){
                      var len = $('#pincode').val();   
                      //console.log(len);
                       if (len.length <= 10){
                        if(len.length >= 4 ){
                        var page_url = '<?php echo SITE_LINK."getLnt" ?>';
                         jQuery.ajax({
                                type: 'POST',
                                url: page_url,  
                                data: {zip: len},
                                dataType:"json",
                                success: function(data) {
                                 $("#city").val(data.city);
                                 $("#state").val(data.state);
                                 $("#UserDetailLatitude").val(data.latitude);
                                 $("#UserDetailLongitude").val(data.longitude);
                                }
                            });   
                        }
                    }else{
                        $('#err').html('Max length is 10');
                        len = len.substring(0, len.length - 1);
                        $(this).val(len);
                        $(this).focus();
                        return false;
                    }
                   });
        });
                                     
        </script>
		
		<?php } elseif($this->params['controller'] == 'dishes' && $this->params['action'] == 'add'){ ?>
			<?php echo $this->Html->script("ckeditor/ckeditor"); ?>
                        <?php echo $this->Html->css(array("bootstrap-select.min")); ?>
			<?php echo $this->Html->script(array('bootstrap-filestyle.min','bootstrap-select.min')); ?>
			<script>
				$(document).ready(function() { CKEDITOR.replace('DishDescription'); });
			</script>
			<script>
				  $(document).ready(function () {
                                    $( "#datepicker2" ).datepicker({ minDate: "Today"});
                                    $("#datepicker2").on("change", function () {
                                        var date1 = $(this).val();
                                    $( "#datepicker3" ).datepicker({ minDate: date1});
                                    });
                                    $("#datepicker3").on("change", function () {
                                        var date3 = $(this).val();
                                       $( "#datepicker4" ).datepicker({minDate: date3});
                                    }); 
                                });
                                            $(document).ready(function () {
                                                      $('#input02,#input03,#input04,#input05').filestyle({
                                                     'placeholder' : 'Upload Image',
                                             });
                                             $('select').selectpicker();
                                     });
                                         
                        </script>
			<?php } elseif ( $this->params['controller'] == 'users' && $this->params['action'] == 'profile' ) {  ?>
                            <script type="text/javascript">var switchTo5x=true;</script>
                            <script type="text/javascript" id="st_insights_js" src="http://w.sharethis.com/button/buttons.js?publisher=280b7e4a-2ba4-4fc8-ad0c-369787e4a134"></script>
                            <script type="text/javascript">stLight.options({publisher: "280b7e4a-2ba4-4fc8-ad0c-369787e4a134", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
                            <script>
                                jQuery(document).ready(function() {
                                    jQuery("#follow").click(function(e) {
                                        var data1 = $(this).attr('data-attr1');
                                        var data2 = $(this).attr('data-attr2');
                                        var follow_url = '<?php echo SITE_LINK."follow" ?>';
                                        jQuery.ajax({
                                               type: 'POST',
                                               url: follow_url,  
                                               data: {uid:data1,follower_id:data2},
                                               dataType:"json",
                                               success: function(data) {
                                                  console.log(data.status);
                                                if(data.status == true){
                                                   $('#follow').text("unfollow");
                                                }
                                                else if(data.status == false){
                                                   $('#follow').text('follow');  
                                                }
                                               }
                                           }); 
                                            e.preventDefault();
                                    });
                                });
                            </script>
                        <?php } elseif($this->params['controller'] == 'users' && $this->params['action'] == 'changepassword'){ ?>
                                <script>
//                                   $(document).ready(function(){
//                                      $('.btn2').click(function(e){
//                                        var len = $('#UserPassword').val(); 
//                                         if (len.length < 8 || len.length > 8){
//                                             e.preventDefault();
//                                            $('#err').html('password must be 8 characters'); 
//                                         }
//                                         var len1 = $('#UserRetypePassword').val();
//                                         if (len1.length < 8 || len1.length > 8){
//                                             e.preventDefault();
//                                            $('#err').html('password must be 8 characters'); 
//                                         }
//                                      });   
//                                   });
                              </script>  
                        <?php } ?>
