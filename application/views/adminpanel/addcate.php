<?php include('inc/header.php') ?>
<?php include('inc/sidebar.php') ?>
<div class="page-content">

    	<section class="box-typical p-10">
	        <div class="row">
	        	<div class="col-sm-10">
	        		<h1>Add Category</h1>
	        		<?= form_open("adminpanel_controller/insertcate")  ?>
	        			<div class="form-group row">
						<label class="col-sm-2 form-control-label">Category Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="cate_title">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Category Status</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" name="status">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Category Banner</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="banner">
						</div>
					</div>
					<button class="btn btn-primary">Add</button>
	        		</form>
	        	</div>
	        </div>
	    </section>
	</div>
<?php include('inc/footer.php') ?>