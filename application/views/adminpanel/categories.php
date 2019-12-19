<?php include('inc/header.php'); ?>

<?php include('inc/sidebar.php'); ?>
	<div class="page-content">
	    <div class="container-fluid">
	        <?= form_open('adminpanel_controller/removeproduct'); ?>
	        <div class="row">
	        	<section class="box-typical">
				<header class="box-typical-header">
					<div class="tbl-row">
						<div class="tbl-cell tbl-cell-title">
							<h3>All Products</h3>
						</div>	
						<div class="tbl-cell tbl-cell-action-bordered">
							<?= anchor('adminpanel_controller/addcate' , '<i class="fa fa-edit"></i>') ?>
						</div>
						<div class="tbl-cell tbl-cell-action-bordered">
							<a class="action-btn"><i class="fa fa-refresh"></i></a>
						</div>
						<div class="tbl-cell tbl-cell-action-bordered">
							<button class="action-btn"><i class="fa fa-trash"></i></button>
						</div>
					</div>
				</header>
				<div class="box-typical-body">
					<div class="table-responsive">
						<table class="table table-hover">
							<thead>
								<tr>
									<th class="table-check">
										<div class="checkbox-only">
											<input type="checkbox" id="select_all"/>
											<label for="table-check-head"></label>
										</div>
									</th>
									<th>Name</th>
									<th>Status</th>
									<th>Banner</th>
									<th>Edit</th>
									<th>Check</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($info as $showdata){ 
									$id = $showdata->cate_id;
									?>
								<tr>
									<td class="table-check">
										<div class="checkbox-only">
											<input type="checkbox" class="mycheckbox" />
											<label for="table-check-1"></label>
										</div>
									</td>
									<td>
 										<?= $showdata->cate_title ?>
 										<span class="hint-circle"
											  data-toggle="tooltip"
											  data-placement="top"
											  title="Help">?</span>
									</td>
									<td ><?= $showdata->status ?></td>
									<td>
										<?= $showdata->banner ?>
									</td>
									<td>
										<?= anchor("adminpanel_controller/showcate/$id" , 'Edit')  ?>
									</td>
									<td>
										<input type="checkbox">
									</td>
									
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div><!--.box-typical-body-->
			</section><!--.box-typical-->
	        </div>
	    </form>
	    </div><!--.container-fluid-->
	</div><<!-- class="page-content--"></!-->
<script src="<?= base_url() ?>adminpanel_assets/js/lib/jquery/jquery.min.js"></script>
<script>
		$(document).ready(function(){
			$('#select_all').change(function() {
			    var checkboxes = $(this).closest('form').find('.mycheckbox');
			    checkboxes.prop('checked', $(this).is(':checked'));
			});
		})
	</script>
<?php include('inc/footer.php'); ?>