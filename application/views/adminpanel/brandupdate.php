<?php include('inc/header.php') ?>
<?php include('inc/sidebar.php') ?>
<div class="page-content">

    	<section class="box-typical p-10">
	        <div class="row">
	        	<div class="col-sm-10">
	        		<h1>Update Brands</h1>
	        		 <?php foreach($info as $showbrands){ 
	        		 	$id = $showbrands->brand_id;
	        		 	?>
	        		<?= form_open("adminpanel_controller/updatebrands/$id") ?>
	        		<div class="form-group row">
						<label class="col-sm-2 form-control-label">Brands Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="brand_title" value="<?= $showbrands->brand_title; ?>">
						</div>
					</div>
					<button class="btn btn-primary">Update</button>
	        		</form>
	        		<?php } ?>
	        	</div>
	        </div>
	    </section>
<?php include('inc/footer.php') ?>