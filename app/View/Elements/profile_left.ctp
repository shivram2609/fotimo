<div class="contentLeft">
                    <aside class="sidebar">
                        <div class="details">
                            <?php $tmpdata = unserialize(base64_decode($this->Session->read("AuthUser.UserDetail.details")));?>
                            <span class="photo">
                                <?php echo $this->Form->input("image",array("type"=>"file","class"=>"picFile","label"=>false,"div"=>false)); ?>
                               <?php echo $this->Form->hidden("old_image",array("value"=>$tmpdata['image']))?>
                                <img src="img/profileimg/<?php echo $tmpdata['image'];?>" alt="profile" width="130" height="130"/>
                            </span>
                            <div class="info">
                                <span class="iname"><?php echo $userInfo['UserDetail']['first_name']; ?></span>
                                <span class="iartist"><?php echo $userInfo['UserDetail']['title']; ?></span>
                                <span class="itext"><?php echo $tmpdata['description']; ?></span>
                                <span class="iweb"><a href="#"><?php echo $userInfo['UserDetail']['url']; ?></a></span> 
                            </div>
                            <div class="social-icons">
                                <span>Click the networks to set up now</span>
                                <p class="clearfix">
                                    <a href="#" class="facebook"></a>
                                    <a href="#" class="twitter"></a>
                                    <a href="#" class="gplus"></a>
                                    <a href="#" class="picasa"></a>
                                    <a href="#" class="insta"></a>
                                </p>
                            </div>
                        </div>
                        <div class="linkContainer">
                            <a class="sEdit" href="<?php echo SITE_LINK.'edit-profile'; ?>" title="Edit Profile" <?php if ($this->params['controller'] == 'users' && $this->params['action'] == 'edit') { ?> class="active" <?php } ?> >edit profile <img class="linkIcons" src="img/s-edit.png" alt="s-edit" /></a>
                            <a class="sReport" href="#">infringement reports <img class="linkIcons" src="img/s-report.png" alt="infringement reports" /></a>
                            <a class="sRegister" href="#">register with fotimo <img class="linkIcons" src="img/s-register.png" alt="register with fotimo" /></a>
                            <a class="sSetting" href="#">settings <img class="linkIcons" src="img/s-setting.png" alt="s-setting" /></a>
                        </div>
                        <div class="recentContainer">
                            <p class="rpTitle">Recent Uploads</p>
                            <div class="recentPhoto">
                                <img src="img/lion.jpg" alt="lion" />
                            </div> 
                           <p><a href="#">View all</a>
                            </p>
                        </div>

                    </aside>
                </div>