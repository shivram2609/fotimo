 <!-- SwankCook profile Section-->
        <div class="top-space container user-container">
        	<div class="row">
            	<?php echo $this->element("profile_header_left"); ?>
                    <?php echo $this->Html->script('changepassword');?>
				<div class="col-sm-9 sell-your-food change-pw">
					<h2 class='text-center' style="margin: 5px 0 30px 0;">Change Your Password</h2>
                                        <?php 
                                            echo $this->Form->create('User',array("id"=>'changepassword',"novalidate"=>true));
                                        ?>
					<div class="row m_b_10">
						<div class="col-sm-6 col-sm-offset-3 col-xs-12 form-group">
							<?php echo $this->Form->input("currentpassword",array("type"=>'password',"id"=>'CurrentPassword','placeholder'=>"Current Password",'value'=>'','class'=>'form-control','div'=>false,'label'=>false)); ?>
						</div>
					</div>
					<div class="row m_b_10">
						<div class="col-sm-6 col-sm-offset-3 col-xs-12 form-group">
							<?php echo $this->Form->input("password",array("type"=>'password',"id"=>'UserPassword','placeholder'=>"New Password",'value'=>'','class'=>'form-control','div'=>false ,'label'=>false)); ?>
						        <span style = "color:red; font-size: 10px;" id="err"></span>
                                                </div>
					</div>
					<div class="row m_b_10">
						<div class="col-sm-6 col-sm-offset-3 col-xs-12 form-group">
                                                    <?php echo $this->Form->input("confirmpassword",array("type"=>'password',"id"=>'UserRetypePassword','placeholder'=>"Confirm Password",'value'=>'','class'=>'form-control','div'=>false,'label'=>false)); ?>
                                                     <span style = "color:red; font-size: 10px;" id="err"></span>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 text-center">
							<?php echo $this->Form->Submit('CONFIRM',array("class"=>"btn2","title"=>"Submit",'div'=>false)); ?>
                                                        <?php echo $this->Html->link('cancel', array('controller' => 'users', 'action' => 'dashboard'),array('class'=>'btn cancel-btn',"title"=>"Cancel"));  ?>
                                                        <?php echo $this->Form->end();?>
						</div>
					</div>
				</div>
            </div>
        </div>
        <!-- /SwankCook profile Section-->

