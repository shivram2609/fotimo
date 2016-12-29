<?php echo $this->Html->css("new_style"); ?>
<!-- SwankCook profile Section-->
        <div class="top-space container user-container">
        	<div class="row">
            	<?php echo $this->element("profile_header_left"); ?>
				<div class="col-sm-9 sell-your-food manage-profile">
					<h2 class='text-center' style="margin: 5px 0 30px 0;">Manage Your Profile</h2>
                                         <?php echo $this->Form->create('UserDetail',array("type"=>"file","novalidate"=>true)); ?>
					<div class="row m_b_30">
						<div class="col-sm-6 form-group">
                                                    <?php 
                                                    echo $this->Form->input('id');
					            echo $this->Form->input('title',array("options"=>array("Chef"=>"Chef","Baker"=>"Baker","Cook"=>"Cook","Foodie"=>"Foodie"),"empty"=>"Select Title","label"=>false,"div"=>false,"class" =>"form-control"));
                                                    ?>
						</div>
						<div class="col-sm-6 form-group">
                                                    <?php echo $this->Form->input('first_name',array("label"=> false ,"div"=>false,"class" =>"form-control","placeholder"=>"name")); ?>
						</div>
					</div>
					<div class="row m_b_30">
						<div class="col-sm-6">
							<div class="row">
								<div class="col-sm-12 form-group upload-file">
                                                                    <?php echo $this->Form->input('image',array("id"=>"input01","type"=>"file" ,"label"=>false,"div"=>false,"class" =>"form-control")); 
                                                                   echo $this->Form->hidden("old_image",array("value"=>isset($this->request->data['UserDetail']['image'])?$this->request->data['UserDetail']['image']:'')); ?>
								</div>
								<div class="col-sm-12 form-group">
									<?php echo $this->Form->input('location_id',array("empty"=>"Select Location",'label' => false,"class" =>"form-control")); ?>
								</div>
							</div>
						</div>
						<div class="col-sm-6 form-group">
						<?php echo $this->Form->input('address',array("placeholder"=>"Address",'label' => false,'div'=>false,"class" =>"form-control")); ?>
						</div>
                                                <div class="col-sm-6 form-group">
                                                    <?php echo $this->Form->hidden("User.id"); ?>
                                                    <?php echo $this->Form->input('User.user_slug',array("placeholder"=>"user-slug",'label' => false,'div'=>false,"class" =>"form-control")); ?>
						</div>
                                                <div class="col-sm-6 form-group">
                                                    <div class="input-group">
                                                        <?php echo $this->Form->input('pin_code',array("id" => "pincode","placeholder"=>"Pincode",'label' => false,'div'=>false,"class" =>"form-control"));  ?>
                                                        <span class="input-group-btn">
                                                            <button class="btn btn-default"  id ="go" type="button"  style="height:48px; padding: 0 20px;">Ok</button>
                                                        </span>   
                                                    </div>  
                                                    <span style = "color:red; font-size: 10px;" id="err"></span>
                                                </div>
					</div>
                                        <div class="row m_b_30">
                                            <div class="col-sm-6 form-group">
                                                <?php echo $this->Form->input("city",array("id" => "city","placeholder"=>"city",'label' => false,'div'=>false,"class" =>"form-control",'readonly'=>'readonly')); ?>
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <?php echo $this->Form->input("state",array("id" => "state","placeholder"=>"state",'label' => false,'div'=>false,"class" =>"form-control",'readonly'=>'readonly')); ?>
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <?php echo $this->Form->hidden("latitude"); ?>
                                                <?php echo $this->Form->hidden("longitude"); ?>
                                            </div>
                                        </div>
					<div class="row m_b_30">
						<div class="col-sm-6">
							<div class="row">
								<div class="col-md-12 form-group">
                                                                    <?php echo $this->Form->input('about',array("type"=>"textarea",'label' => false,'div'=>false,"class" =>"form-control", "placeholder"=> "about me"));?>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="row">
								<div class="col-md-12 form-group">
                                                                    <?php echo $this->Form->input('favourite_food',array("type"=>"textarea",'label' => false,'div'=>false,"class" =>"form-control","placeholder" => "favourite food")); ?>
								</div>
							</div>
						</div>
					</div>
					<div class="row m_b_30">
						<div class="col-md-12">
							<h3 style="margin-bottom: 30px;">Add Youtube Videos Url</h3>
						</div>
						<div class="col-md-12">
							<div class="social-networks">
								<div class="col-sm-8 col-xs-10 form-group">
                                                                    <?php echo $this->Form->input('youtube_video1',array('type'=>'get','class'=>'form-control','label'=>false,'placeholder'=>' Enter the embed code from Youtube ')); ?>
								</div>
 							</div>
						</div>
						<div class="col-md-12">
							<div class="social-networks">
								<div class="col-sm-8 col-xs-10 form-group">
                                                                    <?php echo $this->Form->input('youtube_video2',array('type'=>'get','class'=>'form-control','label'=>false,'placeholder'=>'Enter the embed code from Youtube')); ?>
								</div>
							</div>
						</div>
						
					</div>
					<div class="row">
						<div class="col-md-12 text-center">
                                                        <?php echo $this->Form->Submit('Submit',array("class"=>"btn2","title"=>"Submit",'div'=>false)); ?>
                                                        <?php echo $this->Form->end();?>
						</div>
					</div>
				</div>
            </div>
        </div>
        <!-- /SwankCook profile Section-->

