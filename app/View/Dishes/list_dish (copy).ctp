<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport"    content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="description" content="">
<meta name="author"      content="">
<title>SwankCook</title>
<link rel="shortcut icon" href="images/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Raleway:800" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-select.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/star-rating.css" media="all" type="text/css"/>
<!-- Custom styles for our template -->
<link rel="stylesheet" href="css/common.css">
<link rel="stylesheet" href="css/new_style.css">
</head>

<body class="home">
<!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top headroom" >
        <div class="container">
        <?php echo $this->element("frontheader"); ?>
        </div>
    </div>
<!-- /.navbar --> 

<!-- SwankCook profile Section-->
<div class="top-space container user-container">
    <div class="row"> 
    <div class="col-sm-12 sell-your-food view-purchase manage-food-listing">
    <h2 class='text-center' style="margin: 5px 0 30px 0;">Search Food Listing</h2>
      <!-- New Row Added 28 dec Start -->
      <div class="row">
        <div class="col-md-12">
          <div class="sell-your-food">
            <?php echo $this->Form->create("Dish",array("action"=>"listDish","type"=>"get")); ?>
              <div class="row">
                <div class="col-sm-4 form-group">
                    <?php echo $this->Form->input('location_id',array('label' => false ,"class"=>"search" ,"empty"=>"Search your location")); ?>
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
                  <div class="marg-top"> <b class="padingtop">Near by search:</b>
                    <div class="delivery-option">
                      <input type="radio" name="delivery" id="delivery1">
                      <label for="delivery1"></label>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group text-right ">
                    <?php echo $this->Form->Submit('Search',array("class"=>"btn btn1","title"=>"Search")); ?>
                   
                  </div>
                </div>
              </div>
             <?php echo $this->Form->end(); ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="border-top" style="min-height:30px;"></div>
        </div>
      </div>
      <!-- New Row Added 28 dec End -->
      
      <div class="row ">
        <div class="col-md-12">
          <div class="row m_b_10">
            <div class="col-xs-6">
              <p><b>Title:</b> <span> Aretsian Bread</span></p>
            </div>
            <div class="col-xs-6 text-right">
              <p><a class="links" href="#">View More</a></p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6"> <span class="food-img"><img src="images/img01.jpg"></span> <span class="food-img"><img src="images/img02.jpg"></span> <span class="food-img"><img src="images/img03.jpg"></span> <span class="food-img"><img src="images/img04.jpg"></span> <span class="food-img"><img src="images/img05.jpg"></span> <span class="food-img"><img src="images/img06.jpg"></span> </div>
            <div class="col-md-6">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi soluta velit voluptate at repudiandae cupiditate, minus incidunt optio delectus corrupti ipsam vel iste cumque iure, a eveniet saepe asperiores! Ipsa!</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <p><b>Ingredients: </b>Lorem, ipsum, dolor, sit amet, consectetur, adipisicing, elit.</p>
            </div>
            <div class="col-md-12">
              <p><b>Availability: </b>2</p>
            </div>
            <div class="col-md-12">
              <p><b>Price: </b>$30</p>
            </div>
            <div class="col-md-12">
              <p><b>Delivery Option: </b>Price or Free Delivery</p>
            </div>
            <div class="col-md-12">
              <p><b>Delivery Date: </b>10 Dec 2016</p>
            </div>
            <div class="col-md-12">
              <p><b>Delivery Time: </b>10 am - 2 pm</p>
            </div>
          </div>
        </div>
        <div class="divider"></div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="row m_b_10">
            <div class="col-xs-6">
              <p><b>Title:</b> <span> Aretsian Bread</span></p>
            </div>
            <div class="col-xs-6 text-right">
              <p><a class="links" href="#">View More</a></p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6"> <span class="food-img"><img src="images/img01.jpg"></span> <span class="food-img"><img src="images/img02.jpg"></span> <span class="food-img"><img src="images/img03.jpg"></span> <span class="food-img"><img src="images/img04.jpg"></span> <span class="food-img"><img src="images/img05.jpg"></span> <span class="food-img"><img src="images/img06.jpg"></span> </div>
            <div class="col-md-6">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi soluta velit voluptate at repudiandae cupiditate, minus incidunt optio delectus corrupti ipsam vel iste cumque iure, a eveniet saepe asperiores! Ipsa!</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <p><b>Ingredients: </b>Lorem, ipsum, dolor, sit amet, consectetur, adipisicing, elit.</p>
            </div>
            <div class="col-md-12">
              <p><b>Availability: </b>2</p>
            </div>
            <div class="col-md-12">
              <p><b>Price: </b>$30</p>
            </div>
            <div class="col-md-12">
              <p><b>Delivery Option: </b>Price or Free Delivery</p>
            </div>
            <div class="col-md-12">
              <p><b>Delivery Date: </b>10 Dec 2016</p>
            </div>
            <div class="col-md-12">
              <p><b>Delivery Time: </b>10 am - 2 pm</p>
            </div>
          </div>
        </div>
        <div class="divider"></div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="row m_b_10">
            <div class="col-xs-6">
              <p><b>Title:</b> <span> Aretsian Bread</span></p>
            </div>
            <div class="col-xs-6 text-right">
              <p><a class="links" href="#">View More</a></p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6"> <span class="food-img"><img src="images/img01.jpg"></span> <span class="food-img"><img src="images/img02.jpg"></span> <span class="food-img"><img src="images/img03.jpg"></span> <span class="food-img"><img src="images/img04.jpg"></span> <span class="food-img"><img src="images/img05.jpg"></span> <span class="food-img"><img src="images/img06.jpg"></span> </div>
            <div class="col-md-6">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi soluta velit voluptate at repudiandae cupiditate, minus incidunt optio delectus corrupti ipsam vel iste cumque iure, a eveniet saepe asperiores! Ipsa!</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <p><b>Ingredients: </b>Lorem, ipsum, dolor, sit amet, consectetur, adipisicing, elit.</p>
            </div>
            <div class="col-md-12">
              <p><b>Availability: </b>2</p>
            </div>
            <div class="col-md-12">
              <p><b>Price: </b>$30</p>
            </div>
            <div class="col-md-12">
              <p><b>Delivery Option: </b>Price or Free Delivery</p>
            </div>
            <div class="col-md-12">
              <p><b>Delivery Date: </b>10 Dec 2016</p>
            </div>
            <div class="col-md-12">
              <p><b>Delivery Time: </b>10 am - 2 pm</p>
            </div>
          </div>
        </div>
        <div class="divider"></div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="row m_b_10">
            <div class="col-xs-6">
              <p><b>Title:</b> <span> Aretsian Bread</span></p>
            </div>
            <div class="col-xs-6 text-right">
              <p><a class="links" href="#">View More</a></p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6"> <span class="food-img"><img src="images/img01.jpg"></span> <span class="food-img"><img src="images/img02.jpg"></span> <span class="food-img"><img src="images/img03.jpg"></span> <span class="food-img"><img src="images/img04.jpg"></span> <span class="food-img"><img src="images/img05.jpg"></span> <span class="food-img"><img src="images/img06.jpg"></span> </div>
            <div class="col-md-6">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi soluta velit voluptate at repudiandae cupiditate, minus incidunt optio delectus corrupti ipsam vel iste cumque iure, a eveniet saepe asperiores! Ipsa!</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <p><b>Ingredients: </b>Lorem, ipsum, dolor, sit amet, consectetur, adipisicing, elit.</p>
            </div>
            <div class="col-md-12">
              <p><b>Availability: </b>2</p>
            </div>
            <div class="col-md-12">
              <p><b>Price: </b>$30</p>
            </div>
            <div class="col-md-12">
              <p><b>Delivery Option: </b>Price or Free Delivery</p>
            </div>
            <div class="col-md-12">
              <p><b>Delivery Date: </b>10 Dec 2016</p>
            </div>
            <div class="col-md-12">
              <p><b>Delivery Time: </b>10 am - 2 pm</p>
            </div>
          </div>
        </div>
        <div class="divider"></div>
      </div>
    </div>
  </div>
</div>
<!-- /SwankCook profile Section-->

<!-- JavaScript libs are placed at the end of the document so the pages load faster --> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script> 
<script src="js/bootstrap-filestyle.min.js"type="text/javascript"></script> 
<script src="js/bootstrap-select.min.js"type="text/javascript"></script> 
<script src="js/star-rating.min.js" type="text/javascript"></script> 
<script type="text/javascript" src="js/jquery.flexisel.js"></script> 
<script>
            jQuery(document).ready(function() {
                $("#input-21f").rating({
                    starCaptions: function(val) {
                        if (val < 3) {
                            return val;
                        } else {
                            return 'high';
                        }
                    },
                    starCaptionClasses: function(val) {
                        if (val < 3) {
                            return 'label label-danger';
                        } else {
                            return 'label label-success';
                        }
                    },
                    hoverOnClear: false
                });

                $('#rating-input').rating({
                    min: 0,
                    max: 5,
                    step: 1,
                    size: 'lg',
                    showClear: false
                });

                $('#btn-rating-input').on('click', function() {
                    $('#rating-input').rating('refresh', {
                        showClear: true,
                        disabled: !$('#rating-input').attr('disabled')
                    });
                });


                $('.btn-danger').on('click', function() {
                    $("#kartik").rating('destroy');
                });

                $('.btn-success').on('click', function() {
                    $("#kartik").rating('create');
                });

                $('#rating-input').on('rating.change', function() {
                    alert($('#rating-input').val());
                });


                $('.rb-rating').rating({'showCaption': true, 'stars': '3', 'min': '0', 'max': '3', 'step': '1', 'size': 'xs', 'starCaptions': {0: 'status:nix', 1: 'status:wackelt', 2: 'status:geht', 3: 'status:laeuft'}});
            });

            $("#logo-slider").flexisel({
                visibleItems: 4,
                itemsToScroll: 1,
                autoPlay: {
                    enable: true,
                    interval: 5000,
                    pauseOnHover: true
                }
            });
            </script> 
<script>
                $('#input02').filestyle({
    				'placeholder' : 'Upload Image',
    				// 'buttonName' : 'btn-browse',
                    // 'buttonText' : ' Browse'
    				
    			});
    			$('select').selectpicker();
            </script> 
</script>
</body>
</html>