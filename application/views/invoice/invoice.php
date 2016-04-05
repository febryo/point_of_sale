<?php
	defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
?>
<!DOCTYPE html>
<html lang="en">
	<head>
 <meta charset="utf-8">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Invoice</title>
		<link rel="stylesheet" href="<?=asset_url()?>/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?=asset_url()?>/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?=asset_url()?>/css/bootstrap-datepicker3.css">
		<link rel="stylesheet" href="<?=asset_url()?>/css/normalize.css">
		<link rel="stylesheet" href="<?=asset_url()?>/css/style.css">
		<link href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css" rel="stylesheet">
		<link href="https://cdn.datatables.net/responsive/2.0.2/css/responsive.bootstrap.min.css" rel="stylesheet">
		<link href="https://cdn.datatables.net/1.10.11/css/dataTables.bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="<?=asset_url()?>/css/bootstrap-flaty.min.css">
	</head>
	<body style="background-color: #F2F2F2">
		<?php
			$this->load->view ( 'navigation/main' );
		?>
		<div class="container-fluid">
			<div id="body">
				<div class="row">
					<?php
						// invoice top menu
						$this->load->view ( 'navigation/invoice_top' );

						// input invoice
						$this->load->view ( 'modal/input_invoice.php' );
					?>
				</div>
				<div class="row" style="background-color: #ffffff">
					<br/>
					<div class="col-sm-2">
						<ul class="nav nav-pills nav-stacked">
							<li class="active"><a href="#">Invoice Pending <span class="badge">2</span></a></li>
						</ul>
					</div>
					<div class="col-sm-10">
						<!-- Button modal fullscreen -->
						<button type="button" class="btn btn-success btn-md hidden-xs hidden-sm" data-toggle="modal" data-target="#modal-new-invoice-fullscreen">
							<span class="glyphicon glyphicon-file"></span>  Buat Invoice Baru
						</button>

						<button type="button" class="btn btn-success btn-md hidden-lg hidden-md btn-block" data-toggle="modal" data-target="#modal-new-invoice-fullscreen">
							<span class="glyphicon glyphicon-file"></span>  Buat Invoice Baru
						</button>
						
						<br/>
						<hr/>
						<div class="table-responsive">
							<table id="purchase_order" class="table table-striped table-hover" style="font-size:1em" cellspacing="0">
								<thead>
									<tr>
										<th>No.</th>
										<th>Tgl. Invoice</th>
										<th>No. Invoice</th>
										<th>Customer</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th>No.</th>
										<th>Tgl. Invoice</th>
										<th>No. Invoice</th>
										<th>Customer</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</tfoot>
	
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--
			<p>Page rendered in <strong>{elapsed_time}</strong> seconds. 
			<?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
			<br/> 
			<?php echo  (ENVIRONMENT === 'development') ?  'POS Application Version <strong>' . APP_VERSION . '</strong>' : '' ?></p>
		-->
		<script type="text/javascript" src="<?=asset_url()?>/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?=asset_url()?>/js/bootstrap.js"></script>
		<script type="text/javascript" src="<?=asset_url()?>/js/bootstrap3-typeahead.js"></script>
		<script type="text/javascript" src="<?=asset_url()?>/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="<?=asset_url()?>/js/dataTables.bootstrap.min.js"></script>
		<script type="text/javascript" src="<?=asset_url()?>/js/dataTables.buttons.min.js"></script>
		<script type="text/javascript" src="<?=asset_url()?>/js/buttons.bootstrap.min.js"></script>
		<script type="text/javascript" src="<?=asset_url()?>/js/bootstrap-datepicker.js"></script>
		<script type="text/javascript" src="<?=asset_url()?>/js/bootstrap-select.min.js"></script>
		<script type="text/javascript" src="<?=asset_url()?>/js/invoice.js"></script>
		<script type="text/javascript" src="<?=asset_url()?>/js/sweetalert.min.js"></script>

	</body>
</html>