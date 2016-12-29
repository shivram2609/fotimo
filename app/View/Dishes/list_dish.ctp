<?php //pr($dishes);?>
<?php echo $this->Html->css("new_style"); ?>
<div class="top-space container user-container">
  <div class="row"> 
    <div class="col-sm-12 sell-your-food view-purchase manage-food-listing">
      <h2 class='text-center' style="margin: 5px 0 30px 0;">Search Food Listing</h2>
      <!-- New Row Added 28 dec Start -->
      <div class="row">
        <div class="col-md-12">
          <div class="sell-your-food">
            <?php echo $this->Form->create("Dish"); ?>
              <div class="row">
                    <div class="col-sm-4 form-group">
                        <?php echo $this->Form->input('location_id',array("empty"=>"Select Location",'label' => false,"class" =>"form-control", "value"=> "")); ?>
                    </div>
                    <div class="col-sm-4 form-group">
                        <?php echo $this->Form->input('cuisine_id',array("label" =>false ,"empty"=>"Select Cuisine ", "class" =>"form-control")); ?>	
                    </div>
                    <div class="col-sm-4 form-group">
                        <?php echo $this->Form->input('category_id' ,array("label" =>false ,"empty"=>"Select Category", "class" =>"form-control")); ?>	
                    </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                    <div class="marg-top"> <b class="padingtop">Near by searching</b>
                          <div class="delivery-option">
                            <input type="radio" name="delivery" id="delivery1">
                            <label for="delivery1"></label>
                          </div>
                    </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group text-right ">
                      <?php echo $this->Form->Submit('Search',array("class"=>"btn btn1","title"=>"Search",'div'=>false)); ?>
                  </div>
                </div>
              </div>
              <?php echo $this->Form->end();?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="border-top" style="min-height:30px;"></div>
        </div>
      </div>
      <!-- New Row Added 28 dec End -->
      <?php foreach($dishes as $list){ ?>
      <div class="row ">
        <div class="col-md-12">
          <div class="row m_b_10">
            <div class="col-xs-6">
              <p><b>Title:</b> <span><?php echo $list['Category']['name']; ?></span></p>
            </div>
            <div class="col-xs-6 text-right">
              <p><a class="links" href="#">View More</a></p>
            </div>
          </div>
          <div class="row">
              <?php $imgdata = unserialize($list['Dish']['images']); 
              foreach($imgdata as $img){
              ?>
              <div class="col-md-6"> <span class="food-img"><?php echo $this->Html->image("productimg/".$img,array("alt"=>"map")); ?></span> </div>
<!--            <div class="col-md-6"> <span class="food-img"><img src="images/img01.jpg"></span> <span class="food-img"><img src="images/img02.jpg"></span> <span class="food-img"><img src="images/img03.jpg"></span> <span class="food-img"><img src="images/img04.jpg"></span> <span class="food-img"><img src="images/img05.jpg"></span> <span class="food-img"><img src="images/img06.jpg"></span> </div>-->
              <?php } ?>
              <div class="col-md-6">
              <p><?php echo $list['Dish']['description']; ?></p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <p><b>Price: </b><?php echo $list['Dish']['price']; ?></p>
            </div>
              <div class="col-md-12">
              <p><b>Start Order Date: </b><?php echo $list['Dish']['start_order_from']; ?></p>
            </div>
              <div class="col-md-12">
              <p><b>End Order Date: </b><?php echo $list['Dish']['end_order_date']; ?></p>
            </div>
            <div class="col-md-12">
              <p><b>Delivery Date: </b><?php echo $list['Dish']['delivery_date']; ?></p>
            </div>
          </div>
        </div>
        <div class="divider"></div>
      </div>
      <?php } ?>
    </div>
  </div>
</div>
<!-- /SwankCook profile Section-->