<div class="col-sm-3">
   <?php if( !isset($is_profile)){ ?>
        <ul class="user-lt-link">
                <li><a href="<?php echo SITE_LINK.'edit-profile'; ?>" title="Manage your profile" <?php if ($this->params['controller'] == 'userDetails' && $this->params['action'] == 'edit') { ?> class="active" <?php } ?>> Manage your profile</a></li>
		<li><a href="javascript:void(0);" title="Manage your purchase">Manage your purchase</a></li>
		<li><a href="javascript:void(0);" title="View your purchase">View your purchase</a></li>
		<li><a href="<?php echo SITE_LINK.'add-dishes'; ?>" title="Sell your food" <?php if ($this->params['controller'] == 'dishes' && $this->params['action'] == 'add') { ?> class="active" <?php } ?>> Sell your food</a></li>
		<li><a href="javascript:void(0);" title="Manage your food listings">Manage your food listings</a></li>
		<li><a href="<?php echo SITE_LINK.'view-listing'; ?>" title="Manage your food listing" <?php if ($this->params['controller'] == 'dishes' && $this->params['action'] == 'listDish') { ?> class="active" <?php } ?>>Manage your food listing</a></li>
                <li><a href="<?php echo SITE_LINK.'change-password'; ?>" title="Change Password" <?php if ($this->params['controller'] == 'users' && $this->params['action'] == 'changepassword') { ?> class="active" <?php } ?>> Change password</a></li>
		<li><a href="javascript:void(0);" title="Track your sales">Track your sales</a></li>
	</ul>   
    <?php } ?>

    <div class="map0outer" id="map" style="min-height:340px;">
            <?php foreach($follower as $userdetail) { 
                $lat = $userdetail['UserDetail']['latitude'];
                $lng = $userdetail['UserDetail']['longitude'];
            }
            ?>
	</div>
	<div class="user-follower">
		<p><b>FOLLOWERS</b> 134 
			<span class="pull-right">
				<a href="javascript:void(0);" title="prev">
                                    <?php echo $this->Html->image("arrow-lt.png",array("alt"=>"prev","width"=>"22","height"=>"23")); ?>
				</a>
				<a href="javascript:void(0);" title="next">
                                    <?php echo $this->Html->image("arrow-rt.png",array("alt"=>"next","width"=>"22","height"=>"23")); ?>
				</a>
			</span>
		</p>
                <?php 
                    foreach($follower as $detail){
                        $data = $this->common->fetchUserDetail($detail['UserDetail']['details']);
                        $img = $data['image'];
                ?>
                    <span class="follor-img">
                        <?php echo $this->Html->image("profileimg/".$img, array("alt"=>"","width"=>"49","height"=>"49")); ?>
                    </span>
               <?php }?>
	</div>
</div>

<script src="http://maps.google.com/maps/api/js?key=AIzaSyAZ_UU7Y2UOHDvPeD_kRsHs573zInTOhyo" type="text/javascript"></script>
<script>
	var latitude = <?php echo $lat;?>;
	var longitude = <?php echo $lng;?>; 
 	var map;  
	function initialize() {
                            var mapOptions = { zoom: 7, center: {lat: latitude, lng: longitude} }; 
                            map = new google.maps.Map(document.getElementById('map'), mapOptions);   
                            var marker = new google.maps.Marker({       
                                // The below line is equivalent to writing:    
                                //             // position: new google.maps.LatLng(-34.397, 150.644)              
                                    position: {lat: latitude, lng: longitude},        
                                    map: map        
                            }); 
                            var infowindow = new google.maps.InfoWindow({ 
                                 content: 'Marker Location:' + marker.getPosition() + ''  
                            });
                            google.maps.event.addListener(marker, 'click', function() {
                                infowindow.open(map, marker);
                            });
        }       
        google.maps.event.addDomListener(window, 'load', initialize);
</script>