<!DOCTYPE html>
<section class="dashboard">
            <div class="content mainContent">
                 <?php echo $this->element("profile_left"); ?>
                <div class="contentRight">
<!--                    <div class="crTop clearfix">
                        <h1 class="pageName">change your password</h1>
                    </div>-->
                <section class="sign-in">
                 <?php echo $this->Form->create('User',array("id"=>'changepassword',"novalidate"=>true));?>
                            <p class="formHead">CHANGE PASSWORD</p>
                            <div class="formRow clearfix">
                                <div class="formField">
                                    <label>ENTER CURRENT PASSWORD</label>
                                    <?php echo $this->Form->input("currentpassword",array("type"=>'password',"id"=>'CurrentPassword','value'=>'','class'=>'form-control','div'=>false,'label'=>false)); ?>
                                    <?php echo $this->Form->hidden("id",array("value"=>$this->Session->read("AuthUser.User.id")));?>
                                </div>
                                <div class="formField">
                                    <label>ENTER NEW PASSWORD</label>
                                    <?php echo $this->Form->input("newpassword",array("type"=>'password',"id"=>'UserPassword','value'=>'','class'=>'form-control','div'=>false ,'label'=>false)); ?>
                                </div>
                            </div>
                            <div class="formRow clearfix">
                                <div class="formField">
                                    <label>CONFIRM NEW PASSWORD</label>
                                    <?php echo $this->Form->input("confirmpassword",array("type"=>'password',"id"=>'UserRetypePassword','value'=>'','class'=>'form-control','div'=>false,'label'=>false)); ?>
                                </div>
                            </div>
                            <div class="formRow clearfix">
                                <div class="formField">
                                    <?php echo $this->Form->Submit('SUBMIT',array("class"=>"button","title"=>"Submit",'div'=>false)); ?>
                                    <?php echo $this->Html->link('cancel', array('controller' => 'users', 'action' => 'dashboard'),array('class'=>'btn cancel-btn',"title"=>"Cancel"));  ?>
                                </div>
                            </div>
                        <?php echo $this->Form->end();?>	
                    </section>
                </div>
            </div>
    </section>
   