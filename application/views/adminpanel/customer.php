<?php include('inc/header.php'); ?>

<?php include('inc/sidebar.php'); ?>
	<div class="page-content">
	    <div class="container-fluid">
	        <form>
	         <div class="row">
	        	<section class="box-typical">
				<header class="box-typical-header">
					<div class="tbl-row">
							<h3>Customer</h3>
						<div class="tbl-cell tbl-cell-action-bordered">
						<i class="fa fa-edit"></i>
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
									<th>Track id</th>
									<th>Customer id</th>
									<th>Customer Name</th>
									<th>Customer Email</th>
									<th>Customer Number</th>
									<th>Order info</th>
									<th>Order Status</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($info as $custdata){
								$id = $custdata->customer_id;
								?>
								<tr>
									<td class="table-check">
										<div class="checkbox-only">
											<input type="checkbox" value="<?= $id ?>" name	="checkboxes[]" class="mycheckbox" />
											<label for="table-check-1"></label>
										</div>
									</td>
									<td><?= $custdata->track_NO  ?></td>
									<td><?= $custdata->customer_id  ?></td>
									<td>
 										<?= $custdata->customer_name ?>
 										<span class="hint-circle"
											  data-toggle="tooltip"
											  data-placement="top"
											  title="Help">?</span>
									</td>
									<td ><?= $custdata->customer_email ?></td>
									<td><?= $custdata->customer_phone  ?></td>
									<td><?= anchor("adminpanel_controller/cusinfo/$id" , '<i class="fa fa-info"></i>')  ?></td>
									<td><?= $custdata->order_status  ?></td>
									<!-- <td>
										<input type="checkbox">
									</td> -->
									
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
	</div><<!-- class="page-content-"></!-->
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