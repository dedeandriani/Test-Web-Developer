<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body class="sb-nav-fixed">
	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="layoutSidenav">
		<div id="layoutSidenav_nav">
			<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
				<?php $this->load->view("admin/_partials/sidebar.php") ?>
				<div class="sb-sidenav-footer">
					<div class="small">Logged in as:</div>
					Start Bootstrap
				</div>
			</nav>
		</div>
		<div id="layoutSidenav_content">
			<main>
				<div class="container-fluid px-4">
					<h1 class="mt-4">Product</h1>
					<div id="content-wrapper">

						<div class="container-fluid">

							<?php if ($this->session->flashdata('success')): ?>
								<div class="alert alert-success" role="alert">
									<?php echo $this->session->flashdata('success'); ?>
								</div>
							<?php endif; ?>

							<div class="card mb-3">
								<div class="card-header">
									<a href="<?php echo site_url('admin/products/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
								</div>
								<div class="card-body">

									<form action="<?php echo site_url('admin/products/add') ?>" method="post" enctype="multipart/form-data">
										<div class="form-group">
											<label for="name">Name*</label>
											<input class="form-control <?php echo form_error('name') ? 'is-invalid' : '' ?>"
												type="text" name="name" placeholder="Product name" />
											<div class="invalid-feedback">
												<?php echo form_error('name') ?>
											</div>
										</div>

										<div class="form-group">
											<label for="price">Price*</label>
											<input class="form-control <?php echo form_error('price') ? 'is-invalid' : '' ?>"
												type="number" name="price" min="0" placeholder="Product price" />
											<div class="invalid-feedback">
												<?php echo form_error('price') ?>
											</div>
										</div>
										<div class="form-group">
											<label for="stock">Stock*</label>
											<input class="form-control <?php echo form_error('stock') ? 'is-invalid' : '' ?>"
												type="number" name="stock" min="0" placeholder="Product stock" />
											<div class="invalid-feedback">
												<?php echo form_error('stock') ?>
											</div>
										</div>
										<div class="form-group">
											<label for="stock">Is Sell*</label>
											<select class="form-control <?php echo form_error('is_sell') ? 'is-invalid' : '' ?>"
												name="is_sell">
												<option value="1">Yes</option>
												<option value="0">No</option>
											</select>
											<div class="invalid-feedback">
												<?php echo form_error('is_sell') ?>
											</div>
										</div>
										<br>
										<div class="form-group">
											<input class="btn btn-success" type="submit" name="btn" value="Save" />

										</div>

									</form>

								</div>

								<div class="card-footer small text-muted">
									* required fields
								</div>


							</div>
						</div>
			</main>
			<footer class="py-4 bg-light mt-auto">
				<?php $this->load->view("admin/_partials/footer.php") ?>
			</footer>
		</div>
	</div>
</body>
<?php $this->load->view("admin/_partials/js.php") ?>

</html>
