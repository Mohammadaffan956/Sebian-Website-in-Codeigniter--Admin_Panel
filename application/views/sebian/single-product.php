<?php include('include/header2.php'); ?>
  
  <!-- CONTENT START -->
  <div class="content"> 
    
    <!--======= SUB BANNER =========-->
    <section class="sub-banner animate fadeInUp" data-wow-delay="0.4s">
      <div class="container">
        <h4>DRAEY TRENCH COAT</h4>
        <!-- Breadcrumb -->
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li><a href="#">SHOP</a></li>
          <li class="active">DRAEY TRENCH COAT</li>
        </ol>
      </div>
    </section>
    
    <!--======= PAGES INNER =========-->
    <section class="section-p-30px pages-in item-detail-page">
      <?php foreach($info as $showdata){ ?>
      <div class="container">
        <div class="row"> 
          <!--======= IMAGES SLIDER =========-->
          <div class="col-sm-6 large-detail animate fadeInLeft" data-wow-delay="0.4s">
            <div class="images-slider">
              <ul class="slides">
                <li data-thumb="<?= base_url() ?>assets/images/product<?= $showdata->product_lg_img?>"> <img class="img-responsive" src="<?= base_url() ?>assets/images/product/<?= $showdata->product_lg_img?>"  alt=""></li><!-- 
                <li data-thumb="<?= base_url() ?>assets/images/item-detail-img-2.jpg"> <img class="img-responsive" src="<?= base_url() ?>assets/images/item-detail-img-2.jpg"  alt=""> </li>
                <li data-thumb="<?= base_url() ?>assets/images/item-detail-img-3.jpg"> <img class="img-responsive" src="<?= base_url() ?>assets/images/item-detail-img-3.jpg"  alt=""> </li>
                <li data-thumb="<?= base_url() ?>assets/images/item-detail-img-4.jpg"> <img class="img-responsive" src="<?= base_url() ?>assets/images/item-detail-img-4.jpg"  alt=""> </li>
                <li data-thumb="<?= base_url() ?>assets/images/item-detail-img-5.jpg"> <img class="img-responsive" src="<?= base_url() ?>assets/images/item-detail-img-5.jpg"  alt=""> </li> -->
              </ul>
            </div>
          </div>
          
          <!--======= ITEM DETAILS =========-->
          <div class="col-sm-6 animate fadeInRight" data-wow-delay="0.4s">
            <div class="row">
              <div class="col-sm-12">
                <h5><?= $showdata->product_name ?></h5>
                <span class="price"><?= $showdata->product_price ?></span> </div>
              <div class="col-sm-12"> <span class="code">PRODUCT CODE:<?= $showdata->product_id ?></span>
                <div class="some-info no-border"> <br>
                  <div class="in-stoke"> <i class="fa fa-check-circle"></i> IN STOCK</div>
                  <div class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></div>
                  <a href="#review"  class="review">(3) Review</a> &nbsp;&nbsp;&nbsp; <a href="#review-form" class="review">Add Your Review</a></div>
                <hr>
              </div>
            </div>
            <p><?=$showdata->product_desc?></p>
            <hr>
            <div class="row">
              <div class="col-sm-12">
                <div class="item-select"> 
                  <!-- COLOR -->
                  <p>*COLOR</p>
                  <select class="selectpicker">
                    <option>PLEASE SELETCT</option>
                    <option>RED</option>
                    <option>BLUE</option>
                    <option>GREEN</option>
                    <option>YELLOW</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="item-select"> 
                  <!--  SIZE -->
                  <p>*SIZE</p>
                  <select class="selectpicker">
                    <option>PLEASE SELETCT</option>
                    <option>Small</option>
                    <option>Large </option>
                    <option>X Large</option>
                    <option>XX Large</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row"> 
              <!-- QUIENTY -->
              <div class="col-sm-12">
                <div class="fun-share">
                  <input type="text" value="1">
                  <a href="#." class="btn btn-small btn-dark">ADD TO CART</a> <a href="#." class="share-sec"><i class="ion-shuffle"></i></a> <a class="share-sec" href="#."><i class="fa fa-heart-o"></i></a> </div>
              </div>
              <!-- SHARE -->
              <div class="col-sm-12">
                <ul class="share-with">
                  <li>
                    <p>SHARE WITH</p>
                  </li>
                  <li><a href="#."><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#."><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#."><i class="fa fa-dribbble"></i></a></li>
                  <li><a href="#."><i class="fa fa-pinterest"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!--======= PRODUCT DESCRIPTION =========-->
        <div class="item-decribe animate fadeInUp" data-wow-delay="0.4s">
          <div class="text-center"> 
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation"><a href="#descr" aria-controls="men" role="tab" data-toggle="tab">DESCRIPTION</a></li>
              <li role="presentation" class="active"><a href="#review" aria-controls="women" role="tab" data-toggle="tab">REVIEW (03)</a></li>
              <li role="presentation"><a href="#tags" aria-controls="access" role="tab" data-toggle="tab">TAGS</a></li>
            </ul>
          </div>
          <!-- Tab panes -->
          <div class="tab-content"> 
            <!-- DESCRIPTION -->
            <div role="tabpanel" class="tab-pane fade" id="descr">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectusLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectusLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.<br>
                <br>
                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. </p>
            </div>
            
            <!-- REVIEW -->
            <div role="tabpanel" class="tab-pane fade  in active" id="review">
              <h6>3 REVIEWS FOR SHIP YOUR IDEA</h6>
              
              <!-- REVIEW PEOPLE 1 -->
              <div class="media">
                <div class="media-left"> 
                  <!--  Image -->
                  <div class="avatar"> <a href="#"> <img class="media-object" src="<?= base_url() ?>assets/images/avatar-1.jpg" alt=""> </a> </div>
                </div>
                <!--  Details -->
                <div class="media-body">
                  <p class="font-playfair">“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua.”</p>
                  <h6>TYRION LANNISTER <span class="pull-right">June 7, 2013</span> </h6>
                </div>
              </div>
              
              <!-- REVIEW PEOPLE 1 -->
              
              <div class="media">
                <div class="media-left"> 
                  <!--  Image -->
                  <div class="avatar"> <a href="#"> <img class="media-object" src="<?= base_url() ?>assets/images/avatar-2.jpg" alt=""> </a> </div>
                </div>
                <!--  Details -->
                <div class="media-body">
                  <p class="font-playfair">“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua.”</p>
                  <h6>TYRION LANNISTER <span class="pull-right">June 7, 2013</span> </h6>
                </div>
              </div>
              
              <!-- ADD REVIEW -->
              <h6 class="margin-t-40">ADD REVIEW</h6>
              <form id="review-form">
                <ul class="row">
                  <li class="col-sm-6">
                    <label> *NAME
                      <input type="text" value="" placeholder="">
                    </label>
                  </li>
                  <li class="col-sm-6">
                    <label> *EMAIL
                      <input type="email" value="" placeholder="">
                    </label>
                  </li>
                  <li class="col-sm-12">
                    <label> *YOUR REVIEW
                      <textarea></textarea>
                    </label>
                  </li>
                  <li class="col-sm-6"> 
                    <!-- Rating Stars -->
                    <div class="stars"> <span>YOUR RATING</span> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                  </li>
                  <li class="col-sm-6">
                    <button type="submit" class="btn btn-dark btn-small pull-right no-margin">POST REVIEW</button>
                  </li>
                </ul>
              </form>
            </div>
            
            <!-- TAGS -->
            <div role="tabpanel" class="tab-pane fade" id="tags"> </div>
          </div>
        </div>
      </div>
      <?php } ?>

      <!--======= RELATED PRODUCTS =========-->
      <section class="section-p-60px new-arrival new-arri-w-slide">
        <div class="container"> 
          
          <!--  Tittle -->
          <div class="tittle tittle-2 animate fadeInUp" data-wow-delay="0.4s">
            <h5>RELATED PRODUCTS</h5>
            <p class="font-playfair">Most haver in your Shop </p>
          </div>
          
          <!--  New Arrival Tabs Products  -->
          <div class="popurlar_product client-slide animate fadeInUp" data-wow-delay="0.4s"> 
            
            <!--  New Arrival  -->
            <?php foreach($categories as $showcate){
                $id = $showcate->product_id;
                $pro_cate = $showcate->product_cate;
             ?>
            <div class="items-in"> 
              <!-- Image --> 
              <img src="<?= base_url() ?>assets/images/product/<?= $showcate->product_lg_img ?>" alt=""> 
              <!-- Hover Details -->
              <div class="over-item">
                <ul class="animated fadeIn">
                  <li>
                    <?= anchor("sebian_controller/singleproduct/$id/$pro_cate", '<i class="fa fa-link"></i>'); ?>
                  </li>
                  <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                  <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                  <li class="full-w"><a href="#." class="btn">ADD TO CART</a></li>
                  <!-- Rating Stars -->
                  <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                </ul>
              </div>
              <!-- Item Name -->
              <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
            </div>
            <?php }; ?>
                        
          </div>
        </div>
      </section>
    </section>
  </div>
  <?php include('include/footer.php'); ?>