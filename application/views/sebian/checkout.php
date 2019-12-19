<?php include('include/header2.php') ?>  
  <!-- CONTENT START -->
  <div class="content"> 
    
    <!--======= SUB BANNER =========-->
    <section class="sub-banner">
      <div class="container">
        <h4>SHOPPING CART</h4>
        <!-- Breadcrumb -->
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">SHOPPING CART</li>
        </ol>
      </div>
    </section>
    
    <!--======= PAGES INNER =========-->
    <section class="section-p-30px pages-in chart-page">
      <div class="container"> 
        
        <!-- Payments Steps -->
        <div class="payment_steps">
          <ul class="row">
            <!-- SHOPPING CART -->
            <li class="col-sm-4"> <i class="fa fa-shopping-cart"></i>
              <h6>SHOPPING CART</h6>
            </li>
            
            <!-- CHECK OUT DETAIL -->
            <li class="col-sm-4 current"> <i class="fa fa-align-left"></i>
              <h6>CHECK OUT DETAIL</h6>
            </li>
            
            <!-- ORDER COMPLETE -->
            <li class="col-sm-4"> <i class="fa fa-check"></i>
              <h6>ORDER COMPLETE</h6>
            </li>
          </ul>
        </div>
        
        <!-- Payments Steps -->
        <div class="shopping-cart"> 
          
          <!-- SHOPPING INFORMATION -->
          <div class="cart-ship-info">
            <div class="row"> 
              
              <!-- ESTIMATE SHIPPING & TAX -->
              <div class="col-sm-7">
                <h6>BILLING DETAILS</h6>
                <?= form_open('sebian_controller/checkpro') ?>
                  <ul class="row">
                    
                    <!-- *COUNTRY -->
                    <li class="col-md-12">
                      <label> *CITY
                        <select class="selectpicker" name="customer_city" onchange="shipment(this)" id="city">
                          <option>KARACHI</option>
                          <option>HYDERABAD</option>
                          <option>LAHORE</option>
                          <option>ISLAMABAD</option>
                        </select>
                      </label>
                    </li>
                    <!-- Name -->
                    <li class="col-md-6">
                      <label> *CUSTOMER NAME
                        <input type="text" name="customer_name" placeholder="">
                      </label>
                    </li>
                    <!-- LAST NAME -->
                    <li class="col-md-6">
                      <label> *CUSTOMER EMAIL
                        <input type="text" name="customer_email" value="" placeholder="">
                      </label>
                    </li>
                    <li class="col-md-12"> 
                      <!-- COMPANY NAME -->
                      <label>CUSTOMER NOTE
                        <input type="text" name="customer_note">
                      </label>
                    </li>
                    <li class="col-md-12"> 
                      <!-- ADDRESS -->
                      <label>*CUSTOMER ADDRESS
                        <input type="text" name="customer_address">
                      </label>
                    </li>
                    <!-- TOWN/CITY -->
                    <li class="col-md-12">
                      <label>*CUSTOMER PHONE
                        <input type="number" name="customer_phone">
                      </label>
                    </li>
                    
                    <!-- COUNTRY -->
                    <li class="col-md-6">
                      <label> *TRACK NO:
                        <input type="text" value="SB<?= mt_rand(10000 , 100000) ?>" name="track_NO">
                      </label>
                    </li>
                    
                    <!-- POSTCODE -->
                    <li class="col-md-6">
                      <label> *SHIPING
                        <input type="text" name="shipment" id="charges">
                      </label>
                    </li>

                    <!-- POSTCODE -->
                    <li class="col-md-6">
                      <label> *total bill
                        <input type="number" value="<?= $this->cart->total() ?>" name="total_bill" >
                      </label>
                    </li>
                    <script>
                      document.getElementById('charges').value = 200;
                      function shipment(a){
                        var city = a.value;
                        var shipcharges = document.getElementById('charges');
                        if(city == "KARACHI"){
                            shipcharges.value = "200";
                        }else {
                            shipcharges.value = "300";
                          }
                      }
                    </script>
                    
                                       
                    <!-- CREATE AN ACCOUNT -->
                    <li class="col-md-6">
                      <div class="checkbox">
                        <input id="checkbox1" class="styled" type="checkbox">
                        <label for="checkbox1"> CREATE AN ACCOUNT  </label>
                      </div>
                    </li>
                    
                    <!-- SHIP TO BILLING ADDRESS -->
                    <li class="col-md-6">
                      <div class="checkbox">
                        <input id="checkbox2" class="styled" type="checkbox">
                        <label for="checkbox2"> SHIP TO BILLING ADDRESS </label>
                      </div>
                    </li>
                  </ul>
                 <div class="div" style="background-color: red;">
                  <button class="btn btn-primary">Check</button>
                 </div>
                </form>
              </div>
              
              <!-- SUB TOTAL -->
              <div class="col-sm-5">
                <div class="order-place">
                  <h5>YOUR ORDER</h5>
                  <div class="order-detail">
                    <p>PRODUCT <span>TOTAL</span></p>
                    <div class="item-order">
                      <p>DRAEY TRENCH COAT <span class="color"> x1 </span></p>
                      <p>COLOR: BLACK </p>
                      <p class="text-right">250.00 USD</p>
                    </div>
                    <p>CART SUBTOTAL <span>250.00 USD</span></p>
                    <p>SHIPPING AND HANDLING <span>FREE SHIPPING</span></p>
                    <p>ORDER TOTAL <span>250.00 USD</span></p>
                  </div>
                  <div class="pay-meth">
                    <h5>PAYMENT METHODS</h5>
                    <ul>
                      <li>
                        <div class="checkbox">
                          <input id="checkbox3-1" class="styled" type="checkbox">
                          <label for="checkbox3-1"> DIRECT BANK TRANSFER </label>
                        </div>
                        <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                      </li>
                      <li>
                        <div class="checkbox">
                          <input id="checkbox3-2" class="styled" type="checkbox">
                          <label for="checkbox3-2"> CHEQUE PAYMENT </label>
                        </div>
                      </li>
                      <li>
                        <div class="checkbox">
                          <input id="checkbox3-3" class="styled" type="checkbox">
                          <label for="checkbox3-3"> PAYPAL </label>
                        </div>
                      </li>
                      <li>
                        <div class="checkbox">
                          <input id="checkbox3-4" class="styled" type="checkbox">
                          <label for="checkbox3-4"> I’VE READ AND ACCEPT THE <span class="color"> TERMS & CONDITIONS </span> </label>
                        </div>
                      </li>
                    </ul>
                    <a href="#." class="btn btn-small btn-dark pull-right">PLACE ORDER</a> </div>
                </div>
              </div>
            </div>
          </div>
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
  
 <?php include('include/footer.php') ?>