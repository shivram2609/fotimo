<?php 
//pr($follower);
//foreach( $follower as $key => $val ) {
//	$data = $this->Common->fetchUserDetail($val['UserDetail']['details']);
//	//pr($data);
//}
?>
<!-- SwankCook profile Section-->
        <div class="top-space container user-container">
        	<?php echo $this->element("profile_header",array("is_profile"=>1)); ?>
			<div class="form-group border-btm">&nbsp;</div>
			<div class="row">
                            <?php echo $this->element("profile_left",array("is_profile"=>1)); ?>
                            <?php echo $this->element("profile_middle");?>
			</div>
			
        </div>
        <!-- /SwankCook profile Section-->







