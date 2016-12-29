<?php echo $this->Html->css("new_style"); ?>
<!-- SwankCook profile Section-->
        <div class="top-space container user-container">
        	<div class="row">
            	<?php echo $this->element("profile_header_left"); ?>
        <div class="col-sm-9 sell-your-food manage-profile">
            <h2 class='text-center' style="margin: 5px 0 30px 0;">Sell Your Food</h2>
                <?php echo $this->Form->create('Dish',array("novalidate"=>true,"type"=>"file")); ?>
                    <div class="row m_b_30">
                        <div class="col-sm-4 form-group">
                            <?php //echo $this->Form->input('user_id'); ?>
                            <?php echo $this->Form->input('cuisine_id',array("label" =>false ,"empty"=>"Select Cuisine ", "class" =>"form-control")); ?>	
                        </div>
                        <div class="col-sm-4 form-group">
                             <?php echo $this->Form->input('category_id' ,array("label" =>false ,"empty"=>"Select Category", "class" =>"form-control")); ?>	
                        </div>
                        <div class="col-sm-4 form-group">
                             <?php echo $this->Form->input('name',array("label" =>false , "class" =>"form-control" ,"placeholder" => "Dish-Name")); ?>
                        </div>
                    </div>
                    <div class="row m_b_30">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12 form-group upload-file">
                                    <?php echo $this->Form->input('Dish.img0',array("id"=>"input02","type"=>"file" ,"label"=>false,"div"=>false,"class" =>"form-control")); ?>
                                </div>
                                <div class="col-md-12 form-group upload-file">
                                    <?php echo $this->Form->input('Dish.img1',array("id"=>"input03","type"=>"file" ,"label"=>false,"div"=>false,"class" =>"form-control")); ?>
                                </div>
                                <div class="col-md-12 form-group upload-file">
                                    <?php echo $this->Form->input('Dish.img2',array("id"=>"input04","type"=>"file" ,"label"=>false,"div"=>false,"class" =>"form-control")); ?>
                                </div>
                                <div class="col-md-12 form-group upload-file">
                                    <?php echo $this->Form->input('Dish.img3',array("id"=>"input05","type"=>"file" ,"label"=>false,"div"=>false,"class" =>"form-control")); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 form-group">
                            <?php echo $this->Form->input('description',array("label" =>false , "class" =>"description","placeholder" => "Description")); ?>
                        </div>
                    </div>
                    <div class="row m_b_30">
                        <div class="col-md-6 form-group">
                            <?php echo $this->Form->input('price',array("label" =>false, "type"=>"text" , "class" =>"form-control","placeholder" => "Price",'autocomplete'=> "off")); ?>
                        </div>
                        <div class="col-sm-6 form-group">
                            <?php echo $this->Form->select('DishLocation.location_id',$locations,array('multiple' => true)); ?>
                        </div>
                    </div>
                    <div class="row m_b_30">
                        <div class="col-md-6 form-group">
                           <?php echo $this->Form->input('start_order_from',array('type'=>'get','id'=>'datepicker2','class'=>'form-control','label'=>false,'placeholder'=>'Start Order Date','autocomplete'=> "off")); ?>
                        </div>
                        <div class="col-sm-6 form-group">
                            <?php echo $this->Form->input('end_order_date',array('type'=>'get','id'=>'datepicker3','class'=>'form-control','label'=>false,'placeholder'=>'End Order Date','autocomplete'=> "off")); ?>
                        </div>
                    </div>
                    <div class="row m_b_30">
                        <div class="col-md-6 form-group">
                            <?php echo $this->Form->input('delivery_date',array('type'=>'get','id'=>'datepicker4','class'=>'form-control','label'=>false,'placeholder'=>'Delivery Date','autocomplete'=> "off")); ?>
                        </div>
                         <div class="col-md-6 form-group">
                            <?php echo $this->Form->input('my_video1',array('type'=>'get','class'=>'form-control','label'=>false,'placeholder'=>'Enter the embed code from Youtube')); ?>
                        </div>
                    </div>
                    <div class="row m_b_30">
<!--                        <div class="col-md-6 form-group">
                            <?php //echo $this->Form->input('my_video1',array('type'=>'get','class'=>'form-control','label'=>false,'placeholder'=>'Enter the embed code from Youtube')); ?>
                        </div>-->
<!--                        <div class="col-md-6 form-group">
                            <?php //echo $this->Form->input('my_video2',array('type'=>'get','class'=>'form-control','label'=>false,'placeholder'=>'My Video Url')); ?>
                        </div>-->
                    </div>
                    <div class="row m_b_30">
                        <div class="col-sm-12">
                            <?php  echo $this->Form->radio('delivery_mode', array('pickup' => 'pickup','delivery' => 'delivery','pickup_only' => 'pickup_only','free_delivery' => 'free_delivery'));  ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <?php echo $this->Form->Submit('Add',array("class"=>"btn2","title"=>"Add",'div'=>false)); ?>
                            <?php echo $this->Form->end();?>
                        </div>
                    </div>
        </div>
    </div>
</div>
<!-- /SwankCook profile Section-->
