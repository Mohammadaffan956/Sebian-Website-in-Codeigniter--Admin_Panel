<?php include('inc/header.php') ?>
<?php include('inc/sidebar.php') ?>
<div class="page-content">

    	<section class="box-typical p-10">
	        <div class="row">
	        	<div class="col-sm-10">
	        		<h1>Update Category</h1>
	        		<?php foreach($info as $showcate){
	        			$ids = $showcate->cate_id;
	        		 ?>
	        		<?= form_open("adminpanel_controller/updatecate/$ids") ?>
	        		<div class="form-group row">
						<label class="col-sm-2 form-control-label">Category Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="cate_title" value="<?= $showcate->cate_title; ?>">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Category Banner</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="Banner" value="<?= $showcate->banner; ?>">
						</div>
					</div>
					<button class="btn btn-primary">Update</button>
	        		</form>
	        		<?php } ?>
	        	</div>
	        </div>
	    </section>
<?php include('inc/footer.php') ?>