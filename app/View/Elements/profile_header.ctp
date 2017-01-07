<?php //pr($ifollow); ?>
<div class="row">
	<div class="col-sm-3 text-center border-rt">
            	<div class="user-pic">
                    <?php $tmpdata = unserialize(base64_decode($userInfo['UserDetail']['details'])); ?>
                    <span><?php echo $this->Html->image("profileimg/".$tmpdata['image'],array("alt"=>$userInfo['UserDetail']['first_name'],"width"=>"130","height"=>"130")); ?> </span>
		</div>
		<div class="user-name">
                    <?php echo $userInfo['UserDetail']['first_name']; ?>
                        <span class="user-location"><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $userInfo['Location']['name']; ?></span>
		</div>
	</div>
	<div class="col-sm-9">
		<div class="row">
			<div class="col-md-6 border-rt">
				<div class="user-top-content">
					<h1 class="user-heading">about me !</h1>
					<p><?php echo $tmpdata['about'];?></p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="user-top-content">
					<h1 class="user-heading">food i love !</h1>
					<p><?php echo $tmpdata['favourite_food']; ?> </p>
				</div>
			</div>
		</div>
		<div class="border-btm">&nbsp;</div>
                 <?php if(isset($is_profile)){ ?>
		<div class="user-notify-follow">
                    <form>
                        <b>Share It On:</b> &nbsp;
                        <span class='st_facebook' title="Facebook" displayText='Facebook'></span>
                        <span class='st_twitter' title="Twitter" displayText='Tweet'></span>
                        <span class='st_linkedin' title="LinkedIn" displayText='LinkedIn'></span>
                        <span class='st_pinterest' title="Pinterest" displayText='Pinterest'></span>
                        <span class='st_email' title="Email" displayText='Email'></span>
                        &nbsp;  &nbsp; <?php echo $this->Html->image("email-icon.png",array("alt"=>"email","width"=>"41","height"=>"40")); ?>
                        &nbsp; &nbsp;
                            <?php if(!empty($ifollow)){ ?>
                                <button id ='follow' class ='btn2' data-attr1 ="<?php echo $userInfo['User']['id']; ?>" data-attr2 ="<?php echo $this->Session->read('AuthUser.User.id'); ?>">unfollow</button>
                            <?php } else { ?>
                                <button id ='follow' class ='btn2' data-attr1 ="<?php echo $userInfo['User']['id']; ?>" data-attr2 ="<?php echo $this->Session->read('AuthUser.User.id'); ?>">follow</button>
                            <?php } ?>
                     </form>
                </div>
                <?php } ?>
	</div>
</div>





