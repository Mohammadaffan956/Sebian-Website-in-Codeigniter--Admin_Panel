<?php include('inc/header.php') ?>
<?php include('inc/sidebar.php') ?>
<div class="page-content">
    	<section class="box-typical p-10">
	        <div class="row">
	        	<div class="col-sm-12">
	        		<h3>Customer Detail</h3>
	        		<hr>
	        		<?php foreach($info as $showinfo){ 
	        			$id = $showinfo->customer_id;
	        		?>
	        		<?= form_open("adminpanel_controller/cusupdate/$id")  ?>
	        			<div class="form-group row">
						<label class="col-sm-2 form-control-label">Customer Name</label>
						<div class="col-sm-10">
							<input type="text" name="customer_name" value="<?= $showinfo->customer_name ?>"  class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Customer Email</label>
						<div class="col-sm-10">
							<input type="text" name="customer_email" value="<?= $showinfo->customer_email  ?>" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Customer Phone</label>
						<div class="col-sm-10">
							<input type="text" name="customer_phone" value="<?= $showinfo->customer_phone ?>" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Customer City</label>
						<div class="col-sm-10">
							<input type="text" name="customer_city" value="<?= $showinfo->customer_city ?>" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Customer Address</label>
						<div class="col-sm-10">
							<input type="text" name="customer_address" value="<?= $showinfo->customer_address ?>" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Special Note</label>
						<div class="col-sm-10">
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Payment Method</label>
						<h6>Cash on Delivery</h6>
					</div>
					<button class="btn btn-primary">Update data</button>
				</form>
				<?php } ?>

<section class="box-typical" style="margin-top: 70px;">
	<header class="box-typical-header">
		<div class="tbl-row">
			<div class="tbl-cell tbl-cell-title">
				<h3>23 Reports</h3>
			</div>
			<div class="tbl-cell tbl-cell-action-bordered">
				<button type="button" class="action-btn"><i class="font-icon font-icon-pencil"></i></button>
			</div>
			<div class="tbl-cell tbl-cell-action-bordered">
				<button type="button" class="action-btn"><i class="font-icon font-icon-re"></i></button>
			</div>
			<div class="tbl-cell tbl-cell-action-bordered">
				<button type="button" class="action-btn"><i class="font-icon font-icon-trash"></i></button>
			</div>
		</div>
	</header>
	<div class="box-typical-body">
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th class="table-check">
							<div class="checkbox checkbox-only">
								<input type="checkbox" id="table-check-head"/>
								<label for="table-check-head"></label>
							</div>
						</th>
						<th>Track Id</th>
						<th>Product Name</th>
						<th>Unit Price</th>
						<th>Quantity</th>
						<th>Total</th>
						<th>Track No</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($order_detail as $showorder){ ?>
					<tr>
						<td class="table-check">
							<div class="checkbox checkbox-only">
								<input type="checkbox" id="table-check-1"/>
								<label for="table-check-1"></label>
							</div>
						</td>
						<td><?= $showorder->order_id ?></td>
						<td><?= $showorder->product_name ?></td>
						<td><?= $showorder->product_price ?></td>
						<td><input type="number" abbr="<?= $showorder->product_id ?>" onchange="changeqty(this)" id="demo" value="<?= $showorder->item_quantity ?>"></td>
						<td><?= $showorder->per_item_total ?></td>
						<td><?= $showorder->track_NO ?></td>
					</tr>
					<?php } ?>
					<script>
						function changeqty(a){
							var value = a.value;
							var b = a.getAttribute("abbr");
							alert(b);

						}
					</script>
				</tbody>
			</table>
		</div>
	</div>
</section>

		</div>
	</div>
</section>
<div class="col-xl-8 dahsboard-column">
<section class="box-typical box-typical-dashboard panel panel-default scrollable">
	                    <header class="box-typical-header panel-heading">
	                        <h4 class="panel-title">Contacts</h4>
	                    </header>
	                    <div class="box-typical-body panel-body">
	                        <div class="contact-row-list">
	                        	<?php foreach($info as $showinfo){
	                        	$id = $showinfo->customer_id; 
		                        ?>
	                            <article class="contact-row">
	                                <div class="user-card-row">
	                                    <div class="tbl-row">
	                                        <div class="tbl-cell tbl-cell-photo">
	                                            <a href="#">
	                                                <img src="img/photo-64-2.jpg" alt="">
	                                            </a>
	                                        </div>
	                                        <div class="tbl-cell">
	                                            <p class="user-card-row-name"><a href="#">Sub Total</a></p>
	                                        </div>
	                                        <div class="tbl-cell tbl-cell-status" id="subtotal"><?= $showinfo->total_bill ?></div>
	                                    </div>
	                                </div>
	                            </article>
	                            <article class="contact-row">
	                                <div class="user-card-row">
	                                    <div class="tbl-row">
	                                        <div class="tbl-cell tbl-cell-photo">
	                                            <a href="#">
	                                                <img src="img/photo-64-1.jpg" alt="">
	                                            </a>
	                                        </div>
	                                        <div class="tbl-cell">
	                                            <p class="user-card-row-name"><a href="#">Shipping</a></p>
	                                        </div>
	                                        <div class="tbl-cell tbl-cell-status" id="shipping"><?= $showinfo->shipment ?></div>
	                                    </div>
	                                </div>
	                            </article>
	                            <article class="contact-row">
	                                <div class="user-card-row">
	                                    <div class="tbl-row">
	                                        <div class="tbl-cell tbl-cell-photo">
	                                            <a href="#">
	                                                <img src="img/photo-64-3.jpg" alt="">
	                                            </a>
	                                        </div>
	                                        <div class="tbl-cell">
	                                            <p class="user-card-row-name"><a href="#">Total</a></p>
	                                        </div>
	                                        <div class="tbl-cell tbl-cell-status" id="total"></div>
	                                    </div>
	                                </div>
	                            </article>
	                            <?= form_open("adminpanel_controller/discount/$id") ?>
	                            <article class="contact-row">
	                                <div class="user-card-row">
	                                    <div class="tbl-row">
	                                        <div class="tbl-cell tbl-cell-photo">
	                                            <a href="#">
	                                                <img src="img/photo-64-4.jpg" alt="">
	                                            </a>
	                                        </div>
	                                        <div class="tbl-cell">
	                                            <p class="user-card-row-name"><a href="#">Special Discount</a></p>
	                                        </div>
	                                        <div class="tbl-cell tbl-cell-status"><input type="number" name="special_discount" onkeyup="after_discount()" id="spc_disc" class="form-control" min="1"></div>
	                                    </div>
	                                </div>
	                            </article>
	                            <article class="contact-row">
	                                <div class="user-card-row">
	                                    <div class="tbl-row">
	                                        <div class="tbl-cell tbl-cell-photo">
	                                            <a href="#">
	                                                <img src="img/photo-64-2.jpg" alt="">
	                                            </a>
	                                        </div>
	                                        <div class="tbl-cell">
	                                            <p class="user-card-row-name"><a href="#">After Disocunt Bill</a></p>
	                                        </div>
	                                        <div class="tbl-cell tbl-cell-status"><input type="number" name="after_discount_bill" id="after_disc"
	                                         class="form-control" class="disabled"></div>
	                                    </div>
	                                </div>
	                            </article>
	                            <button class="btn btn-primary">Insert</button>
	                            <?= form_close(); ?>
	                            <script>
	                            	var a = parseInt(document.getElementById('subtotal').innerHTML);
	                            	var b = parseInt(document.getElementById('shipping').innerHTML);
	                            	var z = document.getElementById('total').innerHTML = a + b;
	                            	var z = document.getElementById('after_disc').value = a + b;
	                            	function after_discount(){
	                            	var y = document.getElementById('spc_disc').value;
	                            	document.getElementById('after_disc').value = z - y;
	                            	}
	                            </script>
	                            <?php } ?>
	                        </div>
	                    </div><!--.box-typical-body-->
	                </section><!--.box-typical-dashboard-->
	                </div>
</div>

<?php include('inc/footer.php') ?>