<?php //pr($userInfo); ?>
<div class="col-sm-9">
    <div class = "row">
        <h3 class="video-heading">Dishes</h3>
    </div>
	<div class="row">
            <?php
            $img_arr = array();
            foreach($userInfo['Dish'] as $data){
                $imgdata = unserialize($data['images']);
                if(!empty($imgdata)){
                    foreach($imgdata as $image){
                      $img_arr[] = array("name" => $data['name'],"description"=>$data['description'],"image"=> $image)  ;                     
                    }
                }
            }
             if(!empty($img_arr)){
                  foreach($img_arr as $key=>$value){ ?>
                      <div class="col-sm-6 col-md-4">
                            <div class="user-img-bg">
                                    <div class="text-div">
                                        <div>
                                            <h3 class="heading"><?php echo $value['name']; ?></h3>
                                               <?php echo $value['description'];?>
                                        </div>
                                    </div>
                                <?php echo $this->Html->image("productimg/".$value['image'],array("alt"=>"map")); ?>
                            </div>
                        </div>
            <?php  }
             }else{  ?>
                <h3 style="margin-top:-2px; margin-left:40%;">No Dish Found</h3>
            <?php }
            ?>
        </div>
       <div class="row">
            <div class="col-sm-12">
                <h3 class="video-heading">My Video</h3>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <iframe width="421" height="207"
                            src='<?php echo $userInfo['UserDetail']['youtube_video1'] ; ?>'>
                            </iframe>
                        </div>
                        <div class="col-sm-6 form-group">
                            <iframe width="421" height="207"
                            src='<?php echo $userInfo['UserDetail']['youtube_video2'] ; ?>'>
                            </iframe>
                        </div>
                    </div>
            </div>
        </div>
</div>
        
            



