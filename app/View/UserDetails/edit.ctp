<?php //pr($userInfo); ?>
<style>
    .yellow-btn{ background: #f08c00!important; color: #fff!important; width: 100px!important; }
    .formRow input, .formRow textarea, .formRow select { line-height: 18px;}
</style>
<?php echo $this->Form->create('UserDetail',array("type"=>"file","novalidate"=>true)); ?>
<section class="dashboard">
            <div class="content mainContent">
                <ul id="tabList" class="twoTabs clearfix">
                    <li class="active"><a href="#myProfile">MY PROFILE</a>
                    </li>
                    <li><a href="#social">SOCIAL ACCOUNTS</a>
                    </li>
                </ul>
                <div class="tabContainer">
                    <div id="myProfile" class="clearfix pageContent myProfile tabContent tabActive">
                   <?php echo $this->element("profile_header_left"); ?>
                    <div class="contentRight">
                       <?php echo $this->Form->input("id"); ?>
                            <p class="formHead">CHANGE PASSWORD</p>
                            <div class="formRow clearfix">
                                <div class="formField">
                                    <label>ENTER CURRENT PASSWORD</label>
                                    <?php echo $this->Form->input("User.currentpassword",array("type"=>'password',"id"=>'CurrentPassword','value'=>'','class'=>'form-control','div'=>false,'label'=>false)); ?>
                                    <?php echo $this->Form->hidden("User.id",array("value"=>$this->Session->read("AuthUser.User.id")));?>
                                </div>
                                <div class="formField">
                                    <label>ENTER NEW PASSWORD</label>
                                    <?php echo $this->Form->input("User.newpassword",array("type"=>'password',"id"=>'UserPassword','value'=>'','class'=>'form-control','div'=>false ,'label'=>false)); ?>
                                </div>
                            </div>
                            <div class="formRow clearfix">
                                <div class="formField">
                                    <label>CONFIRM NEW PASSWORD</label>
                                    <?php echo $this->Form->input("User.confirmpassword",array("type"=>'password',"id"=>'UserRetypePassword','value'=>'','class'=>'form-control','div'=>false,'label'=>false)); ?>
                                </div>
                            </div>
                            <p class="formHead">private information</p>
                            <div class="formRow clearfix">
                                <div class="formField">
                                    <label>NAME</label>
                                    <?php echo $this->Form->input('first_name',array("label"=> false ,"div"=>false,"class" =>"form-control","placeholder"=>"name")); ?>
                                </div>
                                <div class="formField">
                                    <label>TITLE</label>
                                   <?php echo $this->Form->input('title',array("options"=>array("Mr"=>"Mr","Miss"=>"Miss","Mrs"=>"Mrs","Artist"=>"Artist"),"empty"=>"Select Title","label"=>false,"div"=>false,'class'=>'form-control',"required"=>"requires"));?>
                                </div>
                            </div>
                            <div class="formRow clearfix">
                                <div class="formField">
                                    <label>EMAIL ADDRESS</label>
                                    <?php echo $this->Form->input("User.email",array("type"=>'text','class'=>'form-control','div'=>false,'label'=>false)); ?>
                                </div>
                                <div class="formField">
                                    <label>CONTACT NUMBER</label>
                                    <?php echo $this->Form->input("phone",array("type"=>'text','class'=>'form-control','div'=>false,'label'=>false)); ?>
                                </div>
                            </div>
                               <div class="formRow clearfix">
                                <div class="formField">
                                    <label>URL</label>
                                   <?php echo $this->Form->input('url',array('type'=>'get','class'=>'form-control','label'=>false,'placeholder'=>' Enter the embed code from Youtube ')); ?>
                                </div>
                                <div class="formField">
                                    <label>Description</label>
                                    <?php echo $this->Form->input('description',array("type"=>"textarea",'label' => false,'div'=>false,"class" =>"form-control")); ?>
                                </div>
                            </div>
                            <div class="formRow clearfix">
                                <div class="formField my-cust-field">
                                    <div class="radioContainer clearfix">
                                        <label><span class="radio_box <?php echo (($this->request->data['UserDetail']['gender'] == 'male')?'radio_tick':''); ?>"><input type="radio" name="data[UserDetail][gender]" value="male" checked ="<?php echo (($this->request->data['UserDetail']['gender'] == 'male')?'true':'false'); ?>" ></span> Male</label>
                                        <label><span class="radio_box <?php echo (($this->request->data['UserDetail']['gender'] == 'female')?'radio_tick':''); ?>"><input type="radio" name="data[UserDetail][gender]" value="female" checked ="<?php echo (($this->request->data['UserDetail']['gender'] == 'female')?'true':'false'); ?>" ></span> Female</label>
                                    </div>
                                </div>
                                <div class="formField">
                                    <label>&nbsp;</label>
                                     <?php echo $this->Form->Submit('Submit',array("class"=>"btn2 yellow-btn","title"=>"Submit",'div'=>false)); ?>
                                </div>
                            </div>
                          
                    </div>
                </div><!-- tab1 end -->
                <div id="social" class="clearfix pageContent tabContent">
                    <div class="socialHead clearfix">
                        <span class="plusIcon"></span>
                        <div>
                            <p class="txtLeft shead1">Add an Account</p>
                            <p class="txtLeft shead2">set up your social media accounts here</p>
                        </div>
                    </div>
                    <div class="socialAccounts clearfix">
                        <div class="socialBox fbBox">
                            <span class="sIcon"><img src="img/fbSocial.png" alt="fb" /></span>
                            <p><input type="text" value="SOMEONE@FACEBOOK.COM" disabled></p>
                            <a href="#" class="socialEdit"></a>
                        </div>
                        <div class="socialBox twitBox">
                            <span class="sIcon"><img src="img/twitSocial.png" alt="twitSocial" /></span>
                            <p><input type="text" value="SOMEONE@TWITTER.COM" disabled></p>
                            <a href="#" class="socialEdit"></a>
                        </div>
                        <div class="socialBox gplusBox">
                            <span class="sIcon"><img src="img/gplusSocial.png" alt="gplusSocial" /></span>
                            <p><input type="text" value="SOMEONE@GMAIL.COM" disabled></p>
                            <a href="#" class="socialEdit"></a>
                        </div>
                    </div>
                </div><!-- tab2 end -->
                </div>
                
            </div>
        </section>
<?php echo $this->Form->end();?>























