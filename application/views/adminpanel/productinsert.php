<?php include('inc/header.php'); ?>

<?php include('inc/sidebar.php'); ?>
<style>
	.p-10 {
		padding: 10px;
	}
</style>
	<div class="page-content">

    	<section class="box-typical p-10">
	        <div class="row">
	        	<div class="col-sm-10">
	        		<h5 class="m-t-lg with-border">Insert New Product</h5>

				<?= form_open("adminpanel_controller/insert")  ?>
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Product Name</label>
						<div class="col-sm-10">
							<input type="text" name="product_name" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Product Brand</label>
						<div class="col-sm-10">
							<input type="text" name="product_brand" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Product Categories</label>
						<div class="col-sm-10">
							<input type="text" name="product_cate" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-2 form-control-label">Product Price</label>
						<div class="col-sm-10">
							<input type="text" name="product_price" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label for="exampleSelect" class="col-sm-2 form-control-label">Discounted Price</label>
						<div class="col-sm-10">
							<input type="text" name="discounted_price" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label for="exampleSelect2" class="col-sm-2 form-control-label">Product Large Image</label>
						<div class="col-sm-10">
							<input type="text" name="product_lg_img" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label for="exampleSelect2" class="col-sm-2 form-control-label">Product Thumb Image</label>
						<div class="col-sm-10">
							<input type="text" name="product_thumb" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label for="exampleSelect2" class="col-sm-2 form-control-label">Product Image</label>
						<div class="col-sm-10">
							<input type="text" name="product_img" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label for="exampleSelect" class="col-sm-2 form-control-label">Product Descreption</label>
						<div class="col-sm-10">
							<textarea rows="4" name="product_desc" class="form-control"></textarea>
						</div>
					</div>
					<button class="btn btn-primary">Submit</button>
				</form>
	        	</div>
	        </div>
		</section><!--.box-typical-->
	    </div><!--.container-fluid-->
	</div><<!-- class="page-content--"></!-->



<?php include('inc/footer.php'); ?>