<?php //pr($userInfo); ?> 
<?php $tmpdata = unserialize(base64_decode($this->Session->read("AuthUser.UserDetail.details")));?>
<div class="contentLeft">
                        <aside class="sidebar">
                            <div class="details">
                                <span class="photo">
                                    <!--input class="picFile" type="file" /-->
                                    <?php echo $this->Form->input("image",array("type"=>"file","class"=>"picFile","label"=>false,"div"=>false)); ?>
                                    <?php echo $this->Form->hidden("old_image",array("value"=>$tmpdata['image']));?>
                                    <a class="changePicBtn" href="#">CHANGE</a>
                                    <img src="img/profileimg/<?php echo $tmpdata['image'];?>" alt="profile" width="130" height="130"/>
                                </span>
                                <div class="info">
                                    <span class="iname"> <?php echo $userInfo['UserDetail']['first_name']; ?></span>
                                    <span class="iartist"><?php echo $userInfo['UserDetail']['title']; ?></span>
                                    <span class="itext"><?php echo $tmpdata['description']; ?></span>
                                    <span class="iweb"><a href="#"><?php echo $userInfo['UserDetail']['url']; ?></a></span> 
                                </div>
                            </div>
                        </aside>
</div>