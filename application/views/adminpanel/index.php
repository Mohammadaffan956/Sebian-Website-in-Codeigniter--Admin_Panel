<?php include('inc/header.php'); ?>

<?php include('inc/sidebar.php'); ?>
	<div class="page-content">
	    <div class="container-fluid">
	        <div class="row">
	            <div class="col-xl-6">
	                <div class="chart-statistic-box">
	                    <div class="chart-txt">
	                        <div class="chart-txt-top">
	                            <p><span class="unit">$</span><span class="number">1540</span></p>
	                            <p class="caption">Week income</p>
	                        </div>
	                        <table class="tbl-data">
	                            <tr>
	                                <td class="price color-purple">120$</td>
	                                <td>Orders</td>
	                            </tr>
	                            <tr>
	                                <td class="price color-yellow">15$</td>
	                                <td>Investments</td>
	                            </tr>
	                            <tr>
	                                <td class="price color-lime">55$</td>
	                                <td>Others</td>
	                            </tr>
	                        </table>
	                    </div>
	                    <div class="chart-container">
	                        <div class="chart-container-in">
	                            <div id="chart_div"></div>
	                            <header class="chart-container-title">Income</header>
	                            <div class="chart-container-x">
	                                <div class="item"></div>
	                                <div class="item">tue</div>
	                                <div class="item">wed</div>
	                                <div class="item">thu</div>
	                                <div class="item">fri</div>
	                                <div class="item">sat</div>
	                                <div class="item">sun</div>
	                                <div class="item">mon</div>
	                                <div class="item"></div>
	                            </div>
	                            <div class="chart-container-y">
	                                <div class="item">300</div>
	                                <div class="item"></div>
	                                <div class="item">250</div>
	                                <div class="item"></div>
	                                <div class="item">200</div>
	                                <div class="item"></div>
	                                <div class="item">150</div>
	                                <div class="item"></div>
	                                <div class="item">100</div>
	                                <div class="item"></div>
	                                <div class="item">50</div>
	                                <div class="item"></div>
	                            </div>
	                        </div>
	                    </div>
	                </div><!--.chart-statistic-box-->
	            </div><!--.col-->
	            <div class="col-xl-6">
	                <div class="row">
	                    <div class="col-sm-6">
	                        <article class="statistic-box red">
	                            <div>
	                                <div class="number">26</div>
	                                <div class="caption"><div>Open tickets</div></div>
	                                <div class="percent">
	                                    <div class="arrow up"></div>
	                                    <p>15%</p>
	                                </div>
	                            </div>
	                        </article>
	                    </div><!--.col-->
	                    <div class="col-sm-6">
	                        <article class="statistic-box purple">
	                            <div>
	                                <div class="number">12</div>
	                                <div class="caption"><div>Closes tickets</div></div>
	                                <div class="percent">
	                                    <div class="arrow down"></div>
	                                    <p>11%</p>
	                                </div>
	                            </div>
	                        </article>
	                    </div><!--.col-->
	                    <div class="col-sm-6">
	                        <article class="statistic-box yellow">
	                            <div>
	                                <div class="number">104</div>
	                                <div class="caption"><div>New clients</div></div>
	                                <div class="percent">
	                                    <div class="arrow down"></div>
	                                    <p>5%</p>
	                                </div>
	                            </div>
	                        </article>
	                    </div><!--.col-->
	                    <div class="col-sm-6">
	                        <article class="statistic-box green">
	                            <div>
	                                <div class="number">29</div>
	                                <div class="caption"><div>Here is an example of a long name</div></div>
	                                <div class="percent">
	                                    <div class="arrow up"></div>
	                                    <p>84%</p>
	                                </div>
	                            </div>
	                        </article>

	                    </div><!--.col-->
	                </div><!--.row-->
	            </div><!--.col-->
	        </div><!--.row-->
	        <?= form_open('adminpanel_controller/removeproduct'); ?>
	        <div class="row">
	        	<section class="box-typical">
				<header class="box-typical-header">
					<div class="tbl-row">
						<div class="tbl-cell tbl-cell-title">
							<h3>All Products</h3>
						</div>	
						<div class="tbl-cell tbl-cell-action-bordered">
							<?= anchor('adminpanel_controller/insert' , '<i class="fa fa-edit"></i>') ?>
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
									<th>Price</th>
									<th>Edit</th>
									<th>Satus</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($info as $showdata){
									$id = $showdata->product_id;
								 ?>
								<tr>
									<td class="table-check">
										<div class="checkbox-only">
											<input type="checkbox" value="<?= $id ?>" name	="checkboxes[]" class="mycheckbox" />
											<label for="table-check-1"></label>
										</div>
									</td>
									<td>
 										<?= $showdata->product_name ?>
 										<span class="hint-circle"
											  data-toggle="tooltip"
											  data-placement="top"
											  title="Help">?</span>
									</td>
									<td ><?= $showdata->product_price ?></td>
									<td>
										<?= anchor("adminpanel_controller/showupdate/$id" , '<i class="fa fa-edit"></i>')?>
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