<?php include('include/header2.php'); ?>  
  <!-- CONTENT START -->
  <div class="content"> 
    
    <!--======= SUB BANNER =========-->
    <section class="sub-banner">
      <div class="container">
        <h4>Cart PAGE</h4>
        <!-- Breadcrumb -->
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">WISHLIST</li>
        </ol>
      </div>
    </section>
    
    <!--======= PAGES INNER =========-->
    <section class="section-p-30px pages-in chart-page wish-list">
      <div class="container"> 
        
        <!-- Payments Steps -->
        <div class="shopping-cart text-left">
          <div class="cart-head">
            <ul class="row">
              <!-- PRODUCTS -->
              <li class="col-sm-4">
                <h6>PRODUCTS</h6>
              </li>
              
              <!-- PRICE -->
              <li class="col-sm-2">
                <h6>PRICE</h6>
              </li>
              
              <li class="col-sm-2">  <h6>Quantity</h6></li>
              
              <li class="col-sm-2">  <h6>Per Item total</h6></li>
              <li class="col-sm-2">  <h6 class="text-right">Remove</h6></li>
            </ul>
          </div>
          <?php 
            foreach($this->cart->contents() as $cartdata){
              $id = $cartdata['id'];
              $qty = $cartdata['qty'];
              $rowid = $cartdata['rowid'];
          ?>     
          <!-- Cart Details -->
          <ul class="row cart-details">
            <li class="col-sm-5">
              <div class="media"> 
                <!-- Media Image -->
                <div class="media-left media-middle"> <a href="#." class="item-img"> <img class="media-object" src="<?= base_url() ?>assets/images/product/<?= $cartdata['image'] ?>" alt=""> </a> </div>
                
                <!-- Item Name -->
                <div class="media-body">
                    <h6><?= $cartdata['name'] ?></h6>
                  
                </div>
              </div>
            </li>
            
            
            <!-- PRICE -->
            <li class="col-sm-2">
              <div class="position-center-center"> <span><?= $cartdata['price'] ?></span> </div>
            </li>
            
             <!-- STOCK --> 
            <li class="col-sm-2"> <div class="position-center-center">
<input type="number" value="<?= $qty ?>" abbr="<?= $rowid ?>" min='1' onkeyup="changeqties(this)" 
onchange="changeqties(this)">
            </div>
          </li>
            
            <!-- TOTAL PRICE -->
            <li class="col-sm-2">
              <div class="position-center-center"> <a href="#." class="btn"><?= $cartdata['subtotal'] ?></a> </div>
            </li>
            
            <!-- EDIT AND REMOVE -->
            <li class="col-sm-1">
              <div class="position-center-center"><?= anchor("sebian_controller/changeqty/$rowid/0" , '<i class="fa fa-times"></i>')?></div>
            </li>
          </ul>
          <?php } ?>
          
          <script>
              function changeqties(a){
                var qty = a.value;
                var rowids = a.getAttribute('abbr')
                window.open('<?= base_url("index.php/sebian_controller/changeqty/") ?>' + rowids + "/" + qty  , "_SELF");
              }
          </script>
          <!-- BTN INFO -->
          <div class="btn-sec"> 
            
            <!-- CLEAR SHOPPING CART --> 
            <a href="#." class="btn btn-dark"> <i class="fa fa-trash-o"></i> CLEAR SHOPPING CART </a> 
            
            <!-- UPDATE SHOPPING CART --> 
            <a href="#." class="btn btn-dark"> <i class="fa fa-arrow-circle-o-up"></i> UPDATE SHOPPING CART </a> 
            <?= anchor("sebian_controller/checkout" , 'CHECKOUT') ?>
          
        </div>
      </div>
      
      <!--======= RELATED PRODUCTS =========-->
      <section class="section-p-60px new-arrival new-arri-w-slide">
        <div class="container"> 
          
          <!--  Tittle -->
          <div class="tittle tittle-2">
            <h5>RELATED PRODUCTS</h5>
            <p class="font-playfair">Most haver in your Shop </p>
          </div>
          
          <!--  New Arrival Tabs Products  -->
          <div class="popurlar_product client-slide"> 
            
            <!--  New Arrival  -->
            <div class="items-in"> 
              <!-- Image --> 
              <img src="images/new-item-1.jpg" alt=""> 
              <!-- Hover Details -->
              <div class="over-item">
                <ul class="animated fadeIn">
                  <li> <a href="images/new-item-1.jpg" data-lighter><i class="ion-search"></i></a></li>
                  <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                  <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                  <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                  <!-- Rating Stars -->
                  <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                </ul>
              </div>
              <!-- Item Name -->
              <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
            </div>
            
            <!--  New Arrival  -->
            <div class="items-in"> 
              <!-- Image --> 
              <img src="images/new-item-2.jpg" alt=""> 
              <!-- Hover Details -->
              <div class="over-item">
                <ul class="animated fadeIn">
                  <li> <a href="images/new-item-2.jpg" data-lighter><i class="ion-search"></i></a></li>
                  <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                  <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                  <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                  <!-- Rating Stars -->
                  <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                </ul>
              </div>
              <!-- Item Name -->
              <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
            </div>
            
            <!--  New Arrival  -->
            <div class="items-in"> 
              <!--  Tags  -->
              <div class="new-tag"> NEW </div>
              
              <!-- Image --> 
              <img src="images/new-item-3.jpg" alt=""> 
              <!-- Hover Details -->
              <div class="over-item">
                <ul class="animated fadeIn">
                  <li> <a href="images/new-item-3.jpg" data-lighter><i class="ion-search"></i></a></li>
                  <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                  <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                  <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                  <!-- Rating Stars -->
                  <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                </ul>
              </div>
              <!-- Item Name -->
              <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
            </div>
            
            <!--  New Arrival  -->
            <div class="items-in"> 
              <!--  Tags  -->
              <div class="hot-tag"> HOT </div>
              <!-- Image --> 
              <img src="images/new-item-4.jpg" alt=""> 
              <!-- Hover Details -->
              <div class="over-item">
                <ul class="animated fadeIn">
                  <li> <a href="images/new-item-4.jpg" data-lighter><i class="ion-search"></i></a></li>
                  <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                  <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                  <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                  <!-- Rating Stars -->
                  <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                </ul>
              </div>
              <!-- Item Name -->
              <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
            </div>
          </div>
        </div>
      </section>
    </section>
  </div>
  <!--======= Footer =========-->
  <?php include('include/footer.php'); ?>
  