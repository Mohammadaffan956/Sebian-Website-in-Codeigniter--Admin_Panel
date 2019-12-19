<?php include('include/header2.php'); ?>  
  <!-- CONTENT START -->
  <div class="content"> 
    
    <!--======= SUB BANNER =========-->
    <section class="sub-banner">
      <div class="container">
        <h4>Track Order</h4>
        <!-- Breadcrumb -->
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">WISHLIST</li>
        </ol>
      </div>
      <style>
      .sty{
        background-color: lightskyblue;
      }
        .sty input{
          width: 50%;
          height: 40px;
          border-radius: 3px;
          border: 1px solid lightgrey;
          background-color: lightgray;
          font: 16px arial;
          outline: none;
        }
      </style>
      <?= form_open("sebian_controller/trackorderview") ?>
      <div class="sty">
          <input type="text" placeholder="  Track_NO..." name="track">
          <button class="btn btn-primary">Find</button>
      </div><!--sty-->
      </form>
    </section>
    
    <!--======= PAGES INNER =========-->
    <section class="section-p-30px pages-in chart-page wish-list">
      <div class="container"> 
        
        <!-- Payments Steps -->
        <div class="shopping-cart text-left">
          <div class="cart-head">
            <div class="box-typical-body">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>PRODUCT IMAGE</th>
                  <th>PRODUCTS</th>
                  <th>PRODUCT PRICE</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($info as $trackdata){ ?>
                <tr>
                  <td>
                    <img src="<?= base_url() ?>assets/images/product/img1.jpg" width="10%" alt="aaa">
                  </td>
                  <td class="table-icon-cell">
                  <?= $trackdata->product_name ?>
                  </td>
                  <td class="table-icon-cell">
                   <?= $trackdata->product_price ?>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div><!--.box-typical-body-->
          <!-- BTN INFO -->
          <div class="btn-sec"> 
            
            <!-- CLEAR SHOPPING CART --> 
            <a href="#." class="btn btn-dark"> <i class="fa fa-trash-o"></i> CLEAR SHOPPING CART </a> 
            
            <!-- UPDATE SHOPPING CART --> 
            <a href="#." class="btn btn-dark"> <i class="fa fa-arrow-circle-o-up"></i> UPDATE SHOPPING CART </a> 
            
            <!-- CONTINUE SHOPPING --> 
            <a href="#." class="btn btn-dark right-btn"> <i class="fa fa-shopping-cart"></i> CONTINUE SHOPPING </a> </div>
          
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
  